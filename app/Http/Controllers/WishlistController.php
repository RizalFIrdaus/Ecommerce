<?php

namespace App\Http\Controllers;

use App\Models\Wishlists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('wishlist.index');
    }
}
