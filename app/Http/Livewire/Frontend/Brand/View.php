<?php

namespace App\Http\Livewire\Frontend\Brand;

use App\Models\Cart;
use App\Models\Category;
use Livewire\Component;
use App\Models\Product;
use App\Models\Wishlists;
use Illuminate\Support\Facades\Auth;



class View extends Component
{
    public $products, $brands, $quantityCount = 1, $inputCategories = [];
    protected $queryString = [
        'inputCategories' => ['except' => '', 'as' => 'category'],
    ];
    public function mount($brands, $products)
    {
        $this->brands = $brands;
        $this->products = $products;
    }
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
                $wishlist->delete();
            } else {
                $wishlist = new Wishlists();
                $wishlist->user_id = Auth::user()->id;
                $wishlist->product_id = $product_id;
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


    public function render()
    {
        $category = Category::all();
        // dd(Product::where('brand', $this->brands->name)->first());
        $this->dispatchBrowserEvent('contentChanged');
        $this->products = Product::where('brand', $this->brands->name)
            ->when($this->inputCategories, function ($q) {
                $q->whereIn('category_id', $this->inputCategories);
            })
            ->get();
        return view('livewire.frontend.brand.view', [
            'products' => $this->products,
            'brands' => $this->brands,
            'categories' => $category
        ]);
    }
}
