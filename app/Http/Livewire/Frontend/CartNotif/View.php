<?php

namespace App\Http\Livewire\Frontend\CartNotif;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class View extends Component
{

    public $countCart;
    protected $listeners = ['cartUpdated' => 'render'];

    public function render()
    {
        if (Auth::check()) {
            $this->countCart = Cart::orderBy('id', 'desc')->where('user_id', Auth::user()->id)->get()->count();
            $carts = Cart::orderBy('id', 'desc')->where('user_id', Auth::user()->id)->take(5)->get();
            return view('livewire.frontend.cart-notif.view', [
                'carts' => $carts
            ]);
        }
        return view('livewire.frontend.cart-notif.view');
    }
}
