<?php

namespace App\Http\Livewire\Frontend\Province;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Wishlists;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;



class Collection extends Component
{
    public $categories, $products, $province, $inputCategories = [];
    protected $queryString = [
        'inputCategories' => ['except' => '', 'as' => 'category'],
    ];
    public function addToCart($product_id)
    {

        // dd($this->products->where('id', $product_id)->first());
        if (Auth::check()) {
            // IF PRODUCT EXIST
            if (Cart::where('product_id', $product_id)->where('user_id', Auth::user()->id)->exists()) {
                $cart = Cart::where('user_id', Auth::user()->id)->where('product_id', $product_id)->first();
                $cart->user_id = Auth::user()->id;
                $cart->product_id = $product_id;
                $cart->quantity =  $cart->quantity + 1;
                $this->emit('cartUpdated');
                $cart->save();
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Product successfully added to cart',
                    'type' => 'success',
                    'status' => 200
                ]);
            } else {
                if ($this->products->where('id', $product_id)->first()) {
                    $cart = new Cart();
                    $cart->user_id = Auth::user()->id;
                    $cart->product_id = $product_id;
                    $cart->quantity = 1;

                    $this->emit('cartUpdated');
                    $cart->save();

                    $this->dispatchBrowserEvent('message', [
                        'text' => 'Product successfully added to cart',
                        'type' => 'success',
                        'status' => 200
                    ]);
                } else {
                    $this->dispatchBrowserEvent('message', [
                        'text' => 'Product does not exist',
                        'type' => 'warning',
                        'status' => 401
                    ]);
                }
            }
        } else {
            $this->dispatchBrowserEvent('popupLogin');
        }
    }
    public function addToWishlist($product_id)
    {

        if (Auth::check()) {
            if (Wishlists::where('product_id', $product_id)->where('user_id', Auth::user()->id)->exists()) {
                $wishlist = Wishlists::where('product_id', $product_id)->where('user_id', Auth::user()->id)->first();
                $this->wishlistIsset = Wishlists::where('product_id', $product_id)->where('user_id', Auth::user()->id)->exists();
                $wishlist->delete();
            } else {
                $wishlist = new Wishlists();
                $wishlist->user_id = Auth::user()->id;
                $wishlist->product_id = $product_id;
                $this->wishlistIsset = Wishlists::where('product_id', $product_id)->where('user_id', Auth::user()->id)->exists();
                $wishlist->save();
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Wishlist berhasil ditambah, ',
                    'type' => 'success',
                    'status' => 200
                ]);
            }
        } else {
            $this->dispatchBrowserEvent('popupLogin');
        }
    }

    public function mount($categories, $products, $province)
    {
        $this->categories = $categories;
        $this->products = $products;
        $this->province = $province;
    }
    public function render()
    {
        $this->dispatchBrowserEvent('contentChanged');
        $this->products = Product::where('province_id', $this->province->id)
            ->when($this->inputCategories, function ($q) {
                $q->whereIn('category_id', $this->inputCategories);
            })
            ->get();
        return view('livewire.frontend.province.collection');
    }
}
