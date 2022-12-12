<?php

namespace App\Http\Livewire\Frontend\Buynow;

use App\Models\BuyNow;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ViewBuyNow extends Component
{
    public  $totalCartAmount = 0;

    protected $listeners = [
        'buynow' => 'render'
    ];


    public function totalAmount()
    {
        $this->product = BuyNow::where('user_id', Auth::user()->id)->first();
        $this->totalCartAmount += $this->product->quantity * $this->product->product->selling_price;
        return $this->totalCartAmount;
    }
    public function mount()
    {
        $this->totalCartAmount = $this->totalAmount();
    }
    public function render()
    {
        $product = BuyNow::where('user_id', Auth::user()->id)->first();
        return view('livewire.frontend.buynow.view-buy-now', [
            'product' => $product
        ]);
    }
}
