
<div id="keranjg" class="py-0 cekbox-oren">
    <div class="row mt-5 pt-5">
        <div class="col-9">
            <h4 class="fw-bold mb-3">Keranjang</h4>
            <div class="kotak1">
                <div class="d-flex justify-content-between">
                    <div class="form-check cekbox-oren d-flex">
                        <input class="form-check-input my-auto" type="checkbox" value="54" id="flexCheckChecked">
                        <label class="form-check-label my-auto ms-3" for="flexCheckChecked">Pilih semua</label>
                    </div>
                    <div class="btn fw-bold">Hapus</div>
                </div>
            </div>
            @forelse ($cart as $item)
            <div class="kotak2 px-2">
                <div class="d-flex align-items-center">
                    <div class="form-check cekbox-oren">
                        <input class="form-check-input my-auto" type="checkbox" value="" id="flexCheckChecked">
                    </div>
                    <div class="d-flex ms-3">
                        @if ($item->product->ProductImages->isEmpty())
                        <img src="{{asset('frontend/img/default_product.png')}}" width="70px">
                        @else
                        <img src="{{asset('/image/uploads/products/'.$item->product->_ProductImages->image)}}" width="70px">
                        @endif
                        <div class="cart-detail d-flex flex-column justify-content-center ms-3">
                            <p>{{$item->product->name}}</p>
                            <div>
                                <span>{{ $item->product->brand }}</span><span class="px-1">|</span><span>{{ $item->product->category->name }}</span><span class="px-1">|</span><span>{{$item->product->name}}</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p> <strong> Rp{{ number_format($item->product->selling_price,0,',','.') }}</strong></p>
                                <p class="fw-bold"><strong>| {{ $item->product->weight }} Kg</strong></p>
                            </div>
                            @php
                            $total += $item->quantity * $item->product->selling_price;
                            @endphp
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col">
      
                    </div>
                    <div class="col d-flex justify-content-end align-items-center ">
                        <div class="btn mx-5" style="color: #ff4200; font-size: 12px; "> <a
                            wire:click='addToWishlist({{ $item->id }})'>Tambahkan ke
                            Wishlist</a>
                        </div>
                        <a class="trash-icon py-2 px-4 border-start border-2" wire:click='deleteCart({{ $item->id }})'>
                            <i class="far fa-trash-alt fa-lg"></i>
                        </a>
                        <span class="btn btn1 btn-circle mt-0" wire:click='decrementQuantity({{ $item->id }})'><i
                            class="fa fa-minus fa-lg"></i></span>
                        <input readonly type="text" value="{{ $item->quantity }}" class="input-quantity mt-0" />
                        <span class="btn btn1 btn-circle mt-0" wire:click='incrementQuantity({{ $item->id }})'><i
                                class="fa fa-plus"></i></span>
                    </div>
                </div>
            </div>
            @empty
                
            @endforelse
        </div>
        <div class="col-3">
            <div class="px-3 py-2 " id="checkoutFixed">
                <div class="shadow bg-body rounded p-3">
                    <button type="button" class="border border-2 d-flex justify-content-between gap-2 p-3" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" style="background-color: transparent; width: 100%; border-color:#d7d7d7 !important;">
                        <img src="{{ asset('frontend/img/promo/icon-promo.svg') }}" alt="">
                        <h6 class="fw-bold my-auto">Makin hemat pakai promo</h6>
                        <i class="fa-solid fa-angle-right mt-2"></i>
                    </button>

                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h4 class="ms-2 fw-bold" style="color: #ff4200">Pakai Promo</h4>
                                    <form action="">
                                        <input type="text" class="mt-2 p-3 form-control" placeholder="Masukkan kode promo">
                                        <input type="submit" hidden />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shadow bg-body rounded p-4 mt-2">
                    <h6 class="fw-bold">Ringkasan belanja</h6>
                    <div class="d-flex justify-content-between my-3 border-bottom border-3">
                        <h6 style="font-size: 0.8rem">Total harga (5 Barang)</h6>
                        <h6 style="font-size: 0.8rem">Rp{{ number_format($total,2,',','.') }}</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="fw-bold">Total Belanja</h6>
                        <h6 class="fw-bold">Rp{{ number_format($total,2,',','.') }}</h6>
                    </div>
                    <a href="/checkout">
                        <div wire:ignore class=" w-100 btn btn-checkout-pembayaran text-center my-2" id="pay-button">
                            Bayar
                        </div>
                    </a>
                    <p class="mb-0 p-2 rounded" style="background-color: #f4f4f4; font-size: 0.6rem">Lakukan pembayaran belanja untuk melanjutkan proses pengemasan kiriman</p>
                    <div class="d-flex justify-content-between mt-3 mb-1 border-bottom border-3">
                        <h6 style="font-size: 0.8rem">Estimasi biaya kirim</h6>
                        <h6 style="font-size: 0.8rem" class="fw-bold">Rp{{ number_format($total,2,',','.') }}</h6>
                    </div>
                    <p class="mb-0 p-2 rounded" style="background-color: #f4f4f4; font-size: 0.6rem">Akan ditagihkan ketika barang Anda sudah siap dikirim</p>
                </div>
            </div>
        </div>
    </div>
</div>




{{-- <div id="keranjg" class="py-0 cekbox-oren">
    <div class="row mt-5 pt-5">
        <div class="col-8">
            <h4 class="fw-bold mb-3">Keranjang</h4>
            <div class="kotak1">
                <div class="d-flex justify-content-between">
                    <div class="form-check cekbox-oren d-flex">
                        <input class="form-check-input my-auto" type="checkbox" value="54" id="flexCheckChecked">
                        <label class="form-check-label my-auto ms-3" for="flexCheckChecked">Pilih semua</label>
                    </div>
                    <div class="btn fw-bold">Hapus</div>
                </div>
            </div>
            @forelse ($cart as $item)
            <div class="kotak2"> --}}
                {{-- <div class="d-flex">
                    <div class="px-2">
                        <div class="form-check">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckChecked" checked>
                        </div>
                    </div>
                    <div>
                        @if ($item->product->brand || $item->product->category)
                        <p style="font-size: 16px; margin-bottom: 0">{{$item->product->brand}}</p>
                        <p style="font-size: 12px; color: rgb(163, 162, 162)">{{$item->product->category->name}}</p>
                        @else
                            
                        @endif
                    </div>
                </div> --}}
                {{-- <div class="d-flex align-items-center">
                    <div class="form-check cekbox-oren">
                        <input class="form-check-input my-auto" type="checkbox" value="" id="flexCheckChecked">
                    </div>
                    <div class="d-flex ms-3">
                        <img src="{{asset('/image/uploads/products/'.$item->product->_ProductImages->image)}}" width="70px">
                        <div class="cart-detail d-flex flex-column justify-content-center ms-3">
                            <p>{{$item->product->name}}</p>
                            <span>Hastag Bran <span>|</span><span>Hastag Category Product #18</span></span>
                            <p> <strong> Rp{{ number_format($item->product->selling_price,0,',','.') }}</strong></p>
                            @php
                            $total += $item->quantity * $item->product->selling_price;
                        @endphp
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col">
      
                    </div>
                    <div class="col" style="position: relative">
                        <div class="btn" style="color: #ff4200; font-size: 12px; position: absolute; right: 0;"> <button class="round-black-btn small-btn"
                            wire:click='addToWishlist({{ $item->id }})'>Add to
                            Wishlist</button>
                        </div>
                    </div>
                    <div class="col  d-flex">
                        <a class="trash-icon pt-3 px-3" wire:click='deleteCart({{ $item->id }})'>
                            <i class="far fa-trash-alt"></i>
                        </a>
                        <span class="btn btn1" wire:click='decrementQuantity({{ $item->id }})'><i
                            class="fa fa-minus"></i></span>
                    <input readonly type="text" value="{{ $item->quantity }}" class="input-quantity" />
                    <span class="btn btn1" wire:click='incrementQuantity({{ $item->id }})'><i
                            class="fa fa-plus"></i></span>
                    </div>
                </div>
            </div>
            @empty
                
            @endforelse
        </div>
        <div class="col-lg-4 ps-5">
            <div class="px-3 py-2 " id="checkoutFixed">
                <div class="shadow bg-body rounded p-3">
                    <button type="button" class="border border-3 d-flex justify-content-between gap-4 py-3 px-5" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" style="background-color: transparent; width: 100%; border-color:#505050 !important;">
                        <i class="fa-solid fa-percent my-auto rounded-circle p-1"></i>
                        <h6 class="fw-bold my-auto">Makin hemat pakai promo</h6>
                        <i class="fa-solid fa-angle-right my-auto"></i>
                    </button>

                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h4 class="ms-2 fw-bold" style="color: #ff4200">Pakai Promo</h4>
                                    <form action="">
                                        <input type="text" class="mt-2 p-3 form-control" placeholder="Masukkan kode promo">
                                        <input type="submit" hidden />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shadow bg-body rounded p-3 mt-2">
                    <h6 class="fw-bold">Ringkasan belanja</h6>
                    <div class="d-flex justify-content-between mt-3">
                        <h6>Total harga (5 Produk)</h6>
                        <h6>Rp{{ number_format($total,2,',','.') }}</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6>Estimasi Pengiriman</h6>
                        <h6>Rp{{ number_format($total,2,',','.') }}</h6>
                    </div>
                    <hr>
                    <h6 class="fw-bold">Total tagihan</h6>
                    <h6>{{ number_format($total,2,',','.') }}</h6>
                    <a href="/checkout">
                        <div wire:ignore class=" w-100 btn btn-checkout-pembayaran text-center mt-3" id="pay-button">
                            Bayar
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> --}}