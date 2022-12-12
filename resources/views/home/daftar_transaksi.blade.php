@extends('layouts.app')
@section('content')
@if (Session()->has('success'))
<div class="alert alert-success mt-4" role="alert">
    {{Session()->get('success')}}
</div>
@endif

@if (Session()->has('failed'))
<div class="alert alert-danger mt-4" role="alert">
    {{Session()->get('failed')}}
</div>

@endif
@if ($errors->any())
<div class="alert alert-danger">
    <div>
        <p>Something wrong...</p>
    </div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="container" style="margin-top: 100px">
    <div class="row d-flex">
        @include('home.sidebar_profile')

        <div class="col-9">
            <div class="row">
                <div class="nav-tabs p-3 d-flex gap-3 mb-2" style="border: 1px solid rgba(221, 221, 221, 0.466); border-radius: 10px;">
                    <span>
                        <img class="ico-mb" src="{{asset('frontend/img/ico/mb/MBpay.png')}}" alt=""> 
                    </span>
                    <p class="m-0">Menunggu Pembayaran</p>
                </div>
    
                <div class="nav-tabs p-3 mt-2" style="border: 1px solid rgba(221, 221, 221, 0.466); border-radius: 10px;">
                    <div class="d-flex gap-3">
                        <span>
                            <img class="ico-mb" src="{{asset('frontend/img/ico/mb/MBmart.png')}}" alt=""> 
                        </span>
                        <p class="m-0 fw-bold">Belanja</p>
                        <p class="m-0">16 Nov 2022</p>
                        <span class="badge " style="color: orangered; background-color: rgb(248, 236, 122)">Sedang Dikirim</span>
                        <p class="m-0 text-muted">
                            INV/20221116/MPL/2823245538
                        </p>
                    </div>
                    <div class="d-flex gap-2 mt-3">
                        <div style="width: 20px">
                            <img src="{{ asset('frontend/img/dummy/berita1.jpg') }}" alt="">
                        </div>
                        <p class="m-0 fw-bold">Bryan Toys Shop</p>
                    </div>
    
                    <div class="d-flex justify-content-between mt-3">
                        <div class="d-flex gap-3">
                            <div style="width: 50px">
                                <img src="{{ asset('frontend/img/dummy/berita1.jpg') }}" alt="">
                            </div>
                            <div>
                                <h6 class="m-0">Hot Wheels Aston Martin Vantage GTE Hijau</h6>
                                <p class="m-0 text-muted">1 barang x Rp 19.900</p>
                                <p class="m-0 text-muted mt-2">+4 produk lainnya</p>
                            </div>
                        </div>
                        <div class="border-start p-3">
                            <p class="m-0">Total Belanja</p>
                            <h5 class="m-0 fw-bold">Rp 116.400</h5>
                        </div>
                    </div>
    
                    <div class="d-flex justify-content-end align-content-center gap-3 mt-4">
                        <a href="#"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="text-decoration-none" style="line-height: 3; color:#ff4200">Lihat Detail Transaksi</a>
                        <button type="button" class="btn btn-cart-produk w-auto px-5">Lacak</button>
                        <button type="button" class="btn btn-cart-produk w-auto">...</button>
                    </div>
                </div>
                
                <div class="nav-tabs p-3 mt-2" style="border: 1px solid rgba(221, 221, 221, 0.466); border-radius: 10px;">
                    <div class="d-flex gap-3">
                        <span>
                            <img class="ico-mb" src="{{asset('frontend/img/ico/mb/MBmart.png')}}" alt=""> 
                        </span>
                        <p class="m-0 fw-bold">Belanja</p>
                        <p class="m-0">16 Nov 2022</p>
                        <span class="badge " style="color: orangered; background-color: rgb(248, 236, 122)">Sedang Dikirim</span>
                        <p class="m-0 text-muted">
                            INV/20221116/MPL/2823245538
                        </p>
                    </div>
                    <div class="d-flex gap-2 mt-3">
                        <div style="width: 20px">
                            <img src="{{ asset('frontend/img/dummy/berita1.jpg') }}" alt="">
                        </div>
                        <p class="m-0 fw-bold">Bryan Toys Shop</p>
                    </div>
    
                    <div class="d-flex justify-content-between mt-3">
                        <div class="d-flex gap-3">
                            <div style="width: 50px">
                                <img src="{{ asset('frontend/img/dummy/berita1.jpg') }}" alt="">
                            </div>
                            <div>
                                <h6 class="m-0">Hot Wheels Aston Martin Vantage GTE Hijau</h6>
                                <p class="m-0 text-muted">1 barang x Rp 19.900</p>
                                <p class="m-0 text-muted mt-2">+4 produk lainnya</p>
                            </div>
                        </div>
                        <div class="border-start p-3">
                            <p class="m-0">Total Belanja</p>
                            <h5 class="m-0 fw-bold">Rp 116.400</h5>
                        </div>
                    </div>
    
                    <div class="d-flex justify-content-end align-content-center gap-3 mt-4">
                        <a href="#"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="text-decoration-none" style="line-height: 3; color:#ff4200">Lihat Detail Transaksi</a>
                        <button type="button" class="btn btn-cart-produk w-auto px-5">Lacak</button>
                        <button type="button" class="btn btn-cart-produk w-auto">...</button>
                    </div>
                </div>
            </div>


        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="background:rgba(0,0,0,0.5);">
        <div class="modal-dialog" style="min-width: 800px">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="w-100">
                        <h5 class="modal-title text-center" id="staticBackdropLabel">Detail Transaksi</h5>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-9">
                            <div style="border-bottom: 7px solid rgb(223, 223, 223)">
                                <div class="container px-3">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-bold">Menunggu Konfirmasi</h6>
                                        <h6 class="fw-bold" style="color: #ff4200">Sembunyikan ^</h6>
                                    </div>
                                    <div class="border mt-2 p-3 rounded">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p class="text-muted">16 Nov 2022, 09:30 WIB</p>
                                            </div>
                                            <div class="col-md-8">
                                                <p class="fw-bold m-0">Pembayaran sudah Dikonfirmasi</p>
                                                <p class="text-muted m-0">Pembayaran telah diterima Tokopedia dan pesanan Anda sudah diteruskan ke penjual</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between w-100 mt-3">
                                        <div>
                                            <p class="text-muted">No. Invoice</p>
                                            <p class="text-muted">Tanggal Pembelian</p>
                                            <p class="text-muted">Batal Otomatis</p>
                                        </div>
                                        <div>
                                            <p class="fw-bold">INV/20221116/MPL/2823245538</p>
                                            <p class="">16 November 2022, 09:30 WIB</p>
                                            <p class="fw-bold">17 Nov; 09:30</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="border-bottom: 7px solid rgb(223, 223, 223)">
                                <div class="container px-3 mt-4">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-bold">Detail Produk</h6>
                                        <a href="#" class="d-flex gap-2 text-decoration-none" style="color: #ff4200">
                                            <div style="width: 20px">
                                                <img src="{{ asset('frontend/img/dummy/berita1.jpg') }}" alt="">
                                            </div>
                                            <p class="m-0 fw-bold">Bryan Toys Shop ></p>
                                        </a>
                                    </div>

                                    <div class="border p-3 mt-2 mb-3">
                                        <div class="row">
                                            <div class="col-md-8 d-flex gap-3">
                                                <div style="width: 50px">
                                                    <img src="{{ asset('frontend/img/dummy/berita1.jpg') }}" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="fw-bold">Hot Wheels Aston Martin Vantage GTE Hijau</h6>
                                                    <p class="text-muted">1 x Rp19.900</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 border-start text-end p-3">
                                                <h6>Total Harga</h6>
                                                <h6 class="fw-bold">Rp19.900</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border p-3 mt-2 mb-3">
                                        <div class="row">
                                            <div class="col-md-8 d-flex gap-3">
                                                <div style="width: 50px">
                                                    <img src="{{ asset('frontend/img/dummy/berita1.jpg') }}" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="fw-bold">Hot Wheels Aston Martin Vantage GTE Hijau</h6>
                                                    <p class="text-muted">1 x Rp19.900</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 border-start text-end p-3">
                                                <h6>Total Harga</h6>
                                                <h6 class="fw-bold">Rp19.900</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border p-3 mt-2 mb-3">
                                        <div class="row">
                                            <div class="col-md-8 d-flex gap-3">
                                                <div style="width: 50px">
                                                    <img src="{{ asset('frontend/img/dummy/berita1.jpg') }}" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="fw-bold">Hot Wheels Aston Martin Vantage GTE Hijau</h6>
                                                    <p class="text-muted">1 x Rp19.900</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 border-start text-end p-3">
                                                <h6>Total Harga</h6>
                                                <h6 class="fw-bold">Rp19.900</h6>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div style="border-bottom: 7px solid rgb(223, 223, 223)">
                                <div class="container px-3 mt-4">
                                    <h6 class="fw-bold">Info Pengiriman</h6>
                                </div>
                            </div>
                            <div>
                                <div class="container px-3 mt-4">
                                    <h6 class="fw-bold">Rincian Pembayaran</h6>

                                    <div class="d-flex justify-content-between mt-3">
                                        <h6 class="text-muted">Metode Pembayaran</h6>
                                        <div>
                                            <h6>Transfer Manual</h6>
                                            <h6>Saldo Tokopedia</h6>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between mt-3 py-2" style="border-top: 2px dashed gray; border-bottom: 2px dashed gray">
                                        <div>
                                            <h6 class="text-muted">Total Harga (3 barang)</h6>
                                            <h6 class="text-muted">Total Ongkos Kirim (550 gr)</h6>
                                            <h6 class="text-muted">Biaya Asuransi Pengiriman</h6>
                                        </div>
                                        <div>
                                            <h6>Rp104.800</h6>
                                            <h6>Rp11.000</h6>
                                            <h6>Rp600</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-3 py-2">
                                        <h6 class="fw-bold">Total Belanja</h6>
                                        <h6 class="fw-bold">Rp116.400</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 border-start">
                            <div class="container">
                                <div class="d-flex flex-column gap-2 py-3 px-2">
                                    <button type="button" class="btn btn-success border rounded w-100">Chat Bantuan</button>
                                    <button type="button" class="btn btn-light border rounded w-100">Bantuan</button>
                                    <button type="button" class="btn btn-light border rounded w-100">Batalkan Pesanan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection