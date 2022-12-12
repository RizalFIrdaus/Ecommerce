<?php

namespace App\Http\Livewire\Frontend\Checkout;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;



class View extends Component
{

    public $cart, $totalCartAmount = 0;
    public $fullname, $phone, $email, $pincode, $address, $status_message, $payment_mode = NULL, $payment_id = NULL;

    protected $listeners = [
        'result' => 'midtransResult',
        'validation'
    ];

    public function validation()
    {
        $this->validate();
    }
    public function rules()
    {
        return [
            'fullname' => 'required|string|max:120',
            'email' => 'required|email|max:120',
            'phone' => 'required|string',
            'pincode' => 'required|string|max:9',
            'address' => 'required|string|max:2000',
        ];
    }

    public function placeOrder($request)
    {
        // dd($reque/*  */st);
        $this->validate();
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->tracking_no = 'MB' . date('YmdHi') . Str::upper(Str::random(6));
        $order->fullname = $this->fullname;
        $order->email = $this->email;
        $order->phone = $this->phone;
        $order->pincode = $this->pincode;
        $order->address = $this->address;
        $order->status_message = $request['transaction_status'];
        $order->payment_mode = $request['payment_type'];
        $order->payment_id = $request['transaction_id'];
        $order->save();
        foreach ($this->cart as $item) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $item->product_id;
            $orderItem->quantity = $item->quantity;
            $orderItem->price = $item->quantity * $item->product->selling_price;
            $orderItem->save();
        }
        return $order;
    }


    public function totalAmount()
    {
        $this->cart = Cart::where('user_id', Auth::user()->id)->get();
        if ($this->cart) {
            foreach ($this->cart as $item) {
                $this->totalCartAmount += $item->quantity * $item->product->selling_price;
            }
            return $this->totalCartAmount;
        }
    }
    public function mount()
    {
        $this->totalCartAmount = $this->totalAmount();
        $this->fullname = Auth::user()->name;
        $this->email = Auth::user()->email;
        $this->address = Auth::user()->address;
        $this->phone =  Auth::user()->handphone;
        $this->pincode =  Auth::user()->zipcode;
    }
    public function midtransRequest()
    {

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-_P-W7rfTD2ueOqpLAeki-BZO';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $this->totalCartAmount,
            ),
            'customer_details' => array(
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
                'phone' => Auth::user()->handphone,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return $snapToken;
    }

    public function midtransResult($request)
    {
        $Midtrans = $this->placeOrder($request);
        if ($Midtrans) {
            Cart::where('user_id', Auth::user()->id)->delete();
            $this->dispatchBrowserEvent('message', [
                'text' => 'Order Succesfully',
                'type' => 'success',
                'status' => 200
            ]);
            return redirect('/');
        } else {
            $this->dispatchBrowserEvent('message', [
                'text' => 'Order Failed',
                'type' => 'error',
                'status' => 400
            ]);
        }
    }

    public function render()
    {
        $cart =  Cart::where('user_id', Auth::user()->id)->get();
        return view('livewire.frontend.checkout.view', [
            'totalCartAmount' =>  $this->totalCartAmount,
            'snapToken' => $this->midtransRequest(),
            'carts' => $cart
        ]);
    }
}
