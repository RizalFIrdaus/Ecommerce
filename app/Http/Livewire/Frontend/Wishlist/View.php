<?php

namespace App\Http\Livewire\Frontend\Wishlist;

use App\Models\Cart;
use App\Models\Wishlists;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;


class View extends Component
{
    public function deleteWishlist($wishlist_id)
    {
        Wishlists::where('user_id', Auth::user()->id)->where('id', $wishlist_id)->delete();
        $this->dispatchBrowserEvent('message', [
            'text' => 'Wishlist deleted',
            'type' => 'success',
            'status' => 200
        ]);
    }
    public function addToCart($id)
    {
        $wishlist = Wishlists::where('user_id', Auth::user()->id)->where('id', $id)->first();
        if (Cart::where('user_id', Auth::user()->id)->where('product_id', $wishlist->product->id)->first()) {
            $cart = Cart::where('user_id', Auth::user()->id)->where('product_id', $wishlist->product->id)->first();
            $cart->quantity++;
            $cart->save();
        } else {
            $cart = new Cart();
            $cart->user_id = $wishlist->user_id;
            $cart->product_id = $wishlist->product_id;
            $cart->quantity = 1;
            $cart->save();
            $this->emit('cartUpdated');
        }
        $wishlist->delete();
    }
    public function render()
    {
        $wishlist = Wishlists::where('user_id', Auth::user()->id)->get();
        return view('livewire.frontend.wishlist.view', [
            'wishlist' =>  $wishlist,
        ]);
    }
}
