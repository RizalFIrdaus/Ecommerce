<?php

namespace App\Http\Livewire\Frontend\Product;

use App\Models\BuyNow;
use App\Models\Cart;
use App\Models\Wishlists;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;



class View extends Component
{
    public $brands, $products, $note, $wishlistIsset, $quantityCount = 1, $total;

    public function rules()
    {
        return [
            'note' => 'nullable|string|max:144',
        ];
    }
    public function addToCart($product_id)
    {
        if (Auth::check()) {
            // IF PRODUCT EXIST
            if (Cart::where('product_id', $product_id)->where('user_id', Auth::user()->id)->exists()) {
                $cart = Cart::where('user_id', Auth::user()->id)->where('product_id', $product_id)->first();
                $cart->user_id = Auth::user()->id;
                $cart->product_id = $product_id;
                $cart->quantity =  $cart->quantity + $this->quantityCount;
                if ($this->note !== "") {
                    $cart->note = $this->note;
                }
                $this->emit('cartUpdated');
                $cart->save();
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Product successfully added to cart',
                    'type' => 'success',
                    'status' => 200
                ]);
            } else {
                if ($this->products->where('id', $product_id)->where('status', '1')->exists()) {
                    if ($this->products->quantity > 0) {
                        if ($this->quantityCount != 0) {
                            $cart = new Cart();
                            $cart->user_id = Auth::user()->id;
                            $cart->product_id = $product_id;
                            $cart->note = $this->note;
                            $cart->quantity = $this->quantityCount;

                            $this->emit('cartUpdated');
                            $cart->save();

                            $this->dispatchBrowserEvent('message', [
                                'text' => 'Product successfully added to cart',
                                'type' => 'success',
                                'status' => 200
                            ]);
                        } else {
                            $this->dispatchBrowserEvent('message', [
                                'text' => 'Minimum add 1 product',
                                'type' => 'warning',
                                'status' => 401
                            ]);
                        }
                    } else {
                        $this->dispatchBrowserEvent('message', [
                            'text' => 'Product out of stock',
                            'type' => 'warning',
                            'status' => 401
                        ]);
                    }
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

    public function buyNow($product)
    {
        $product_buynow = BuyNow::where('user_id', Auth::user()->id)->first();
        if ($product_buynow !== null)
            $product_buynow->delete();
        $buynow = new BuyNow;
        $buynow->user_id = Auth::user()->id;
        $buynow->product_id = $product;
        $buynow->quantity = 1;
        $buynow->save();
        $this->emit('buynow');
        return redirect()->to('/buynow');
    }

    public function incrementQuantity()
    {
        $this->quantityCount++;
    }
    public function decrementQuantity()
    {
        if ($this->quantityCount > 1) {
            $this->quantityCount--;
        }
    }
    public function mount($categories, $products)
    {
        $this->categories = $categories;
        $this->products = $products;
    }

    public function addToWishlist($product_id)
    {
        if (Auth::check()) {
            if (Wishlists::where('product_id', $product_id)->where('user_id', Auth::user()->id)->exists()) {
                $wishlist = Wishlists::where('product_id', $product_id)->where('user_id', Auth::user()->id)->first();
                $wishlist->delete();
                $this->wishlistIsset = Wishlists::where('product_id', $product_id)->where('user_id', Auth::user()->id)->exists();
            } else {
                $wishlist = new Wishlists();
                $wishlist->user_id = Auth::user()->id;
                $wishlist->product_id = $product_id;
                $wishlist->save();
                $this->wishlistIsset = Wishlists::where('product_id', $product_id)->where('user_id', Auth::user()->id)->exists();
            }
        } else {
            $this->dispatchBrowserEvent('popupLogin');
        }
    }

    public function render()
    {
        $this->dispatchBrowserEvent('contentChanged');
        return view('livewire.frontend.product.view', [
            'categories' => $this->categories,
            'products' => $this->products

        ]);
    }
}
