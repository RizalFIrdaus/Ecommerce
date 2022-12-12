<?php

namespace App\Http\Livewire\Frontend\Cart;

use App\Models\Cart;
use App\Models\Wishlists;
use App\Models\ProductHastags;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;



class Viewsharingcart extends Component
{
    public $cart, $products, $total, $total_weight;

    protected $listeners = [
        'cartUpdated' => 'render'
    ];

    public function addToWishlist($id)
    {

        $cart = Cart::where('id', $id)->where('user_id', Auth::user()->id)->first();
        if (Wishlists::where('product_id', $cart->product_id)->where('user_id', Auth::user()->id)->exists()) {
            $this->dispatchBrowserEvent('message', [
                'text' => 'Product already added in wishlist',
                'type' => 'warning',
                'status' => 300
            ]);
            $cart->delete();
        } else {
            $wishlist = new Wishlists();
            $wishlist->user_id = $cart->user_id;
            $wishlist->product_id = $cart->product_id;
            $this->emit('cartUpdated');
            $wishlist->save();
            $cart->delete();
            $this->dispatchBrowserEvent('message', [
                'text' => 'Product added to wishlist',
                'type' => 'success',
                'status' => 300
            ]);
        }
    }

    public function updateNote($id, $note)
    {
        $this->cart = Cart::where('id', $id)->where('user_id', Auth::user()->id)->first();
        $this->cart->note = $note;
        $this->cart->save();
    }

    public function incrementQuantity($id)
    {
        $this->cart = Cart::where('id', $id)->where('user_id', Auth::user()->id)->first();
        if ($this->cart) {
            $this->cart->increment('quantity');
        }
    }
    public function decrementQuantity($id)
    {
        $this->cart = Cart::where('id', $id)->where('user_id', Auth::user()->id)->first();
        if ($this->cart) {
            if ($this->cart->quantity > 1) {
                $this->cart->decrement('quantity');
            }
        }
    }
    public function deleteCart($id)
    {
        Cart::where('user_id', Auth::user()->id)->where('id', $id)->delete();
        $this->emit('cartUpdated');
        $this->dispatchBrowserEvent('message', [
            'text' => 'Wishlist deleted',
            'type' => 'success',
            'status' => 200
        ]);
    }
    public function addNote($id, $note)
    {
        $this->note = $note;
        $this->cart = Cart::where('id', $id)->where('user_id', Auth::user()->id)->first();
        $this->cart->note = $this->note;
        $this->cart->save();
    }

    public function render()
    {
        $this->dispatchBrowserEvent('contentChanged');

        $this->cart = Cart::where('user_id', Auth::user()->id)->get();
        return view('livewire.frontend.cart.viewsharingcart', [
            "cart" =>  $this->cart
        ]);
    }
}
