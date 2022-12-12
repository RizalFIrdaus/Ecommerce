@php
use App\Models\Wishlists;
if(Auth::check()){
  $wishlistCheck = Wishlists::where('product_id', $product->id)->where('user_id', Auth::user()->id )->exists();
}
@endphp
<div class="col wish-cart-home">
    <div class="row">
      <div class="col-3 pe-0">
        @if (Auth::check())
            @if ($wishlistCheck)
            <img  wire:click.prevent='addToWishlist({{$product->id}})' src="{{ asset('frontend/img/ico/wishlist/cta/wishlist-aktif.svg') }}" style="box-sizing: border-box">
            
            @else
            <img class="keranjang-hov" wire:click.prevent='addToWishlist({{$product->id}})' src="{{ asset('frontend/img/ico/wishlist/cta/wishlist-off.svg') }}" style="box-sizing: border-box">
            @endif
        @else
        <img class="keranjang-hov" wire:click.prevent='addToWishlist({{$product->id}})' src="{{ asset('frontend/img/ico/wishlist/cta/wishlist-off.svg') }}" style="box-sizing: border-box">
            
        @endif
      </div>
      <div class="col-9 pe-3 d-flex my-auto">
        <button wire:click.prevent='addToCart({{$product->id}})' class="btn btn-cart-produk">+ Keranjang</button>
      </div>
    </div>
</div>
