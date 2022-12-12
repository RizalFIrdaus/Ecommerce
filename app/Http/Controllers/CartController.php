<?php

namespace App\Http\Controllers;

use App\Models\Wishlists;
use App\Models\ProductHastags;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $rekomendasi = ProductHastags::where('hastags_id', '7')->take(10)->get();
        $rekomendasi_hastag = ProductHastags::where('hastags_id', '7')->first();
        $wishlist = Wishlists::where('user_id', Auth::user()->id)->get();
        return view('cart.cart', compact('wishlist', 'rekomendasi', 'rekomendasi_hastag'));
    }

    public function sharingcart()
    {
        $rekomendasi = ProductHastags::where('hastags_id', '7')->take(10)->get();
        $rekomendasi_hastag = ProductHastags::where('hastags_id', '7')->first();
        $wishlist = Wishlists::where('user_id', Auth::user()->id)->get();
        return view('cart.sharingcart', compact('wishlist', 'rekomendasi', 'rekomendasi_hastag'));
    }

    public function menusharingcart()
    {
        return view('cart.menusharingcart');
    }
}
