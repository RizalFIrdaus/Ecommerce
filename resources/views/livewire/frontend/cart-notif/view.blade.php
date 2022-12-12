<li class="nav-item dropdown">
    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        @if($this->countCart == 0)
        <div class="mycart-icon ic-size" alt=""></div>
        @else
        <div class="mycart-icon-tompel ic-size" alt=""></div>
        @endif
    </a>
    @if(Auth::check())
    @if ($this->countCart == 0)
    <ul class="dropdown-menu dropdown-menu-lg-end keranjang_ul" aria-labelledby="navbarDropdown">
        <div class="no-cart p-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h5 class="text-center">Tidak ada produk di cart</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="bg-notif">
                            <div class="mb_maskot d-flex">
                                <div class="sleepymasta"></div>
                                <div class="sleepybagas"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </ul>
    @else
    <ul class="dropdown-menu dropdown-menu-lg-end keranjang_ul" aria-labelledby="navbarDropdown">
        <div class="keranjang_lihatsemua ">
            <div class="container">
                <div class="row d-flex flex-row">
                    <div class="col-md">
                        <div class="keranjang_title">
                            Keranjang({{ $this->countCart }})
                        </div>
                    </div>
                    <div class="col-md d-flex flex-row justify-content-end">
                        <div>
                            <a href="{{ url('cart') }}">Lihat semua</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <li class="keranjang_li">
            <div class="container">
                <div class="row">
                    @foreach($carts as $item)
                    @if($this->countCart == 0 )
                    @else
                    <div class="col">
                        @if ($item->product->category)
                        <a href="{{ url('category/'.$item->product->category->slug.'/'.$item->product->slug) }}" style="text-decoration: none;">
                            <div class="dropdown-item" style="margin-right: 100px !important;">
                                <div class="container d-flex flex-row">
                                    <div class="row">
                                        <div class="col">
                                            @if($item->product->ProductImages->isEmpty())
                                            <img src="{{ asset('frontend/img/default_product.png')  }}" width="50px">
                                            @else
                                            <img src="{{ asset('image/uploads/products/'.$item->product->_ProductImages->image) }}" width="50px">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="keranjang_data d-flex flex-column">
                                                <div class="keranjang_title">
                                                    {{ $item->product->name }}
                                                </div>
                                                <div class="keranjang_subtit">
                                                    {{ $item->quantity }} Barang
                                                    ({{ $item->product->weight }} Kg)
                                                </div>
                                                <div class="keranjang_harga">
                                                    Rp.{{ number_format($item->product->selling_price,2,',','.') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @else
                        <a href="{{ url('hastag/'.$item->product->_ProductHastags->hastag->slug.'/'.$item->product->slug) }}" style="text-decoration: none;">
                            <div class="dropdown-item" style="margin-right: 100px !important;">
                                <div class="container d-flex flex-row">
                                    <div class="row">
                                        <div class="col">
                                            <img src="{{ asset('image/uploads/products/'.$item->product->_ProductImages->image) }}" width="50px">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="keranjang_data d-flex flex-column">
                                                <div class="keranjang_title">
                                                    {{ $item->product->name }}
                                                </div>
                                                <div class="keranjang_subtit">
                                                    {{ $item->quantity }} Barang
                                                    ({{ $item->product->weight * $item->quantity }} Kg)
                                                </div>
                                                <div class="keranjang_harga">
                                                    Rp.{{ number_format($item->product->selling_price,2,',','.') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endif

                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </li>
    </ul>
    @endif

    @else

    @endif

</li>