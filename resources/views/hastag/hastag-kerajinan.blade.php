@extends('layouts.app')
@section('content')
<div class="jumbotron" style="background-color: #FF4200; height: 400px;"></div>
<div class="container" style="margin-top: -80px">
    <div class="row">
        <div class="col">
            <h1 class="text-white">{{ $hastag->name }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md d-flex justify-content-center">
            <div class="card w-100">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="wrap-breadcrumb pb-2">
                            <ul>
                                <li class="item-link"><a href="{{ url('/') }}" class="link">Home</a>
                                </li>
                                <li class="item-link"><span>{{ $hastag->name }}</span></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container d-flex flex-row">
    <div class="row mt-5" style="margin-right: 14px">
        <div class="col">
            <div class="card" style="width: 14rem;cursor:default;">
                <div class="card-header fw-bold">
                    Filter
                </div>
                <ul class="list-group list-group-flush">
                    <p class="list-group-item">Brand</p>
                    <li class="list-group-item">
                        <div class="form-check d-flex flex-column">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row mt-5 px-2" style="margin-left: 10px;">
        <div class="col-md category-product">
            <div class="d-flex gap-3 flex-wrap">
                @foreach($hastag->productHastag as $product)
                    <a href="{{ url('category/'.$product->product->category->slug.'/'.$product->product->slug) }}"
                        style="text-decoration: none; color:black">
                        <div class="card card-product">
                            @if($product->product->ProductImages->isEmpty())
                                <img src="{{ asset('frontend/img/default_product.png') }}"
                                    class="card-img-top card-img-product" alt="product" width="50px">
                            @else
                                <img src="{{ asset('image/uploads/products/'.$product->product->_ProductImages->image) }}"
                                    class="card-img-top card-img-product" alt="product" width="50px">
                            @endif
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="">
                                        <p class="card-title product-name">{{ $product->product->name }}</p>
                                        <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                                        <p class="price">Rp.
                                            {{ number_format($product->product->original_price,2,',','.'); }},-
                                        </p>
                                        <div class="d-flex align-items-center discount">
                                            <div class="discount-percentage">50%</div>
                                            <div class="discount-price text-muted">Rp.
                                                {{ number_format($product->product->selling_price,2,',','.'); }},-
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center conclusion-product">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <p class="rating-text text-muted">4.5</p>
                                            |
                                            <p class="rating-text text-muted sold">terjual 1260</p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-center justify-content-between">
                                        <p class="weight-product">500g</p>
                                        <div class="d-flex flex-column product-card-icon">
                                            @php
                                                if(Auth::check()){
                                                $wishlistCheck = App\Models\Wishlists::where('product_id',
                                                $product->id)->where('user_id', Auth::user()->id)->exists();
                                                }
                                            @endphp
                                            <div class="col" style="height: 46px; width: 216px">
                                                <div class="row">
                                                    <div class="col-3 pe-0">
                                                        @if(Auth::check())
                                                            @if($wishlistCheck)
                                                                <img wire:click.prevent='addToWishlist({{ $product->id }})'
                                                                    src="{{ asset('frontend/img/ico/wishlist/cta/wishlist-aktif.svg') }}"
                                                                    style="box-sizing: border-box;width: 50px;">
                                                            @else
                                                                <img class="keranjang-hov"
                                                                    wire:click.prevent='addToWishlist({{ $product->id }})'
                                                                    src="{{ asset('frontend/img/ico/wishlist/cta/wishlist-off.svg') }}"
                                                                    style="box-sizing: border-box">
                                                            @endif
                                                        @else
                                                            <img class="keranjang-hov"
                                                                wire:click.prevent='addToWishlist({{ $product->id }})'
                                                                src="{{ asset('frontend/img/ico/wishlist/cta/wishlist-off.svg') }}"
                                                                style="box-sizing: border-box">
                                                        @endif
                                                    </div>
                                                    <div class="col-9 pe-3 d-flex my-auto">
                                                        <button wire:click.prevent='addToCart({{ $product->id }})'
                                                            class="btn btn-cart-produk">+
                                                            Keranjang</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection