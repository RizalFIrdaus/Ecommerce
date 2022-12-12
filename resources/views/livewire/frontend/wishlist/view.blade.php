<div class="container profile-tab" style="margin-top: 100px">
    <div class="row">
        @include('home.sidebar_profile')
        <div class="col-9 ">
            <h2>Wishlist</h2>
            <div class="row">
                <div class="d-flex flex-wrap gap-2 px-0">
                    @forelse ($wishlist as $item)
                    @if ($item->product->category)
                    <a href="{{'category/'.$item->product->category->slug.'/'.$item->product->slug}}" style="text-decoration: none; color:black;">
                        <div class="d-flex flex-wrap gap-5 ms-2 mb-2">
                            <div class="card card-product" style="width: 258px">
                                @if ($item->product->ProductImages->isEmpty())
                                <img src="{{ asset('frontend/img/default_product.png') }}">
                                @else
                                <img src="{{ asset('image/uploads/products/'.$item->product->_ProductImages->image) }}">
                                @endif
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <p class="product-name" style="height: 40px;">{{$item->product->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center align-items-center" style="height: 40px;">
                                            <div class="col-8 d-flex justify-content-start">
                                                <p class="price">Rp{{number_format($item->product->selling_price,0,',','.');}}</p>
                                            </div>
                                            <div class="col">
                                                <div class="d-flex justify-content-end">
                                                    <p>
                                                        <strong style="font-size: 16px;">{{$item->product->weight}}</strong>
                                                        <span style="font-size: 12px;">Kg</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col d-flex justify-content-start">
                                                <div class="d-flex justify-content-center align-content-center">
                                                    <i class="bi bi-star-fill text-warning me-1" style="margin-top: 2px;"></i>
                                                    <p class="rating-text">4.5 |</p>
                                                </div>
                                                <div>
                                                    <p class="rating-text sold ms-2"> terjual {{$item->product->sold}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col d-flex gap-2" style="height: 40px">
                                                <img wire:click.prevent='deleteWishlist({{ $item->id }})' src="{{ asset('frontend/img/ico/wishlist/deletewishlist.png') }}">
                                                <button wire:click.prevent='addToCart({{$item->id}})' class="btn btn-cart-produk">+ Keranjang</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    @else
                    <a href="{{'hastag/'.$item->product->_ProductHastags->hastag->slug.'/'.$item->product->slug}}" style="color: black;text-decoration: none;">
                        <div class="d-flex flex-wrap gap-5 ms-2 mb-2">
                            <div class="card card-product" style="width: 258px">
                                <img src="{{ asset('image/uploads/products/'.$item->product->_ProductImages->image) }}">
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <p class="product-name" style="height: 40px;">{{$item->product->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center align-items-center" style="height: 40px;">
                                            <div class="col-8 d-flex justify-content-start">
                                                <p class="price">Rp{{number_format($item->product->selling_price,0,',','.');}}</p>
                                            </div>
                                            <div class="col">
                                                <div class="d-flex justify-content-end">
                                                    <p>
                                                        <strong style="font-size: 16px;">{{$item->product->weight}}</strong>
                                                        <span style="font-size: 12px;">Kg</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col d-flex justify-content-start">
                                                <div class="d-flex justify-content-center align-content-center">
                                                    <i class="bi bi-star-fill text-warning me-1" style="margin-top: 2px;"></i>
                                                    <p class="rating-text">4.5 |</p>
                                                </div>
                                                <div>
                                                    <p class="rating-text sold ms-2"> terjual {{$item->product->sold}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col d-flex gap-2" style="height: 40px">
                                                <img wire:click.prevent='deleteWishlist({{ $item->id }})' src="{{ asset('frontend/img/ico/wishlist/deletewishlist.png') }}">
                                                <button wire:click.prevent='addToCart({{$item->id}})' class="btn btn-cart-produk">+ Keranjang</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endif
                    @empty
                    <h3>No Product Found</h3>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>