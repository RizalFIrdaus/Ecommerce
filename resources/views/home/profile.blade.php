{@extends('layouts.app')
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
<div class="container profile-tab min-height-510" style="margin-top: 100px" >
    <div class="row d-flex">
        @include('home.sidebar_profile')
        <div class="col-9">
            <div class="row nav-tabs px-0" style="border: 1px solid rgba(221, 221, 221, 0.466); border-radius: 10px;">
                <ul class="nav nav-tabs row" id="myTab2" role="tablist">
                    <li class="nav-item col" role="presentation">
                        <button class="nav-link active" id="biodata-tab" data-bs-toggle="tab"
                            data-bs-target="#biodata-diri" type="button" role="tab" aria-controls="biodata-diri"
                            aria-selected="true" style="font-size: 16px">Biodata Diri</button>
                    </li>
                    <li class="nav-item col" role="presentation">
                        <button class="nav-link" id="alamat-tab" data-bs-toggle="tab" data-bs-target="#alamat"
                            type="button" role="tab" aria-controls="alamat"
                            aria-selected="false" style="font-size: 16px">Alamat</button>
                    </li>
                    <li class="nav-item col" role="presentation">
                        <button class="nav-link" id="pembayaran-tab" data-bs-toggle="tab"
                            data-bs-target="#pembayaran" type="button" role="tab" aria-controls="pembayaran"
                            aria-selected="false" style="font-size: 16px">Pembayaran</button>
                    </li>
                    <li class="nav-item col" role="presentation">
                        <button class="nav-link" id="notifikasi-tab" data-bs-toggle="tab" data-bs-target="#notifikasi"
                            type="button" role="tab" aria-controls="notifikasi"
                            aria-selected="false" style="font-size: 16px">Notifikasi</button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="biodata-diri" class="tab-pane fade in active show">
                     {{-- livewire biodata --}}
                     <livewire:frontend.user.biodata>
                    </div>
                    <div id="alamat" class="tab-pane fade">
                     {{-- Livewire alamat --}}
                     <livewire:frontend.user.alamat>
                    </div>
                    <div id="pembayaran" class="tab-pane fade">
                        <div class="p-4 pt-5">
                            <div class="row">
                                <div class="col-6">
                                    <div class="pe-3">
                                        <div class="p-1">
                                            <h4>Hai Subhan,</h4>
                                            <h4>selamat datang dihalaman</h4>
                                            <h4 class="fw-bold">Pengaturan Pembayaran</h4>
        
                                            <p style="color: rgb(161, 161, 161)">Atur pembayaran Anda untuk meningkatkan keamanan dan kemudahan berbelanja Anda di Tokopedia.</p>
                                            <div style="border-bottom: 1px solid #ddd">
                                                <p class="btn p-0 fw-bold pt-3" href="" style="color: #ff4200;">MbPay</p>
                                            </div>
                                            <div style="border-bottom: 1px solid #ddd">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <p class="btn p-0 fw-bold pt-3" href="">Kartu Kredit / Debit</p>
                                                    </div>
                                                    <div class="col-6" style="position: relative">
                                                        <div style="position: absolute; right: 0">
                                                            <p class="btn p-0 fw-bold pt-3" href="">0 / 4 Tersimpan</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="border-bottom: 1px solid #ddd">
                                                <p class="btn p-0 fw-bold pt-3" href="">Kredivo Express</p>
                                            </div>
                                            <div style="border-bottom: 1px solid #ddd">
                                                <p class="btn p-0 fw-bold pt-3" href="">Debit Instan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div style="border: 1px solid #ddd; height:500px">
                                        <div style="border-bottom: 2px solid #ddd" class="p-2 pembayaran">
                                            <p>MbPay</p>
                                        </div>
                                        <div class="p-4">
                                            <div class="px-2">
                                                <div style="color: white; background: linear-gradient(#ff4400ad, #ff4200); height: 230px; border-radius: 20px" class="p-3">
                                                    <div class="mb-5 pb-3">
                                                        <img src="{{asset('frontend/img/dummy/MBpay.svg')}}" width="116px" alt="Avatar" class="avatar pl-5 my-2">
                                                    </div>
                                                    <p style="font-size: 22px; margin-bottom: 0">**** **** **23 6</p>
                                                    <p style="font-size: 16px">Saldo: Rp0</p>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <p class="fw-bold" style="font-size: 16px">Akun Tokopedia yang terhubung</p>
                                                <div class="d-flex">
                                                    <div class="pe-3">
                                                        <img src="{{asset('frontend/img/ico/default/profile-default.svg')}}" alt="Avatar" class="avatar rounded-circle pl-5">
                                                    </div>
                                                    <div class="my-2">
                                                        <p class="mb-1 fw-bold" style="font-size: 14px">belthandavara.abd@gmail.com</p>
                                                        <p class="mb-1" style="font-size: 12px; color: rgb(112, 112, 112)">Terhubung sejak 29 Oct 2021 13:06 WIB</p>
                                                    </div>    
                                                </div>
                                                <div>
                                                    <p style="font-size: 14px; color: rgb(112, 112, 112)"> <span><i style="color: rgb(107, 107, 107); font-size: 15px;" class="fa fa-exclamation-circle fa-2x pe-2" aria-hidden="true"></i>
                                                    </span> Kamu hanya bisa menyambungkan 1 nomor GoPay ke Tokopedia.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="notifikasi" class="tab-pane fade p-4">
                        <h3 class="fw-bold mb-0">Notifikasi</h3>
                        <p style="color: rgb(161, 161, 161)">Atur notifikasi yang ingin kamu terima disini.</p>
                        
                        <div class="px-3 my-3" style="background-color: #eee; border-radius: 10px; height:40px">
                            <div class="row notif-text fw-bold">
                                <div class="col-10">
                                    <p>Transaksi</p>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <p class="">E-mail</p>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 my-2" style="height:40px">
                            <div class="row notif-text fw-bold" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466);">
                                <p> <span><i style="color: rgb(107, 107, 107); font-size: 17px;" class="fa fa-shopping-cart pe-2" aria-hidden="true"></i>
                                </span> Transaksi Pembelian</p>
                            </div>
                        </div>
                        <div class="px-3 my-2" style="height:40px">
                            <div class="row notif-text" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466);">
                                <div class="col-10">
                                    <p>Menunggu Pembayaran</p>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <div style="padding: 10px 0;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 my-2" style="height:40px">
                            <div class="row notif-text" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466);">
                                <div class="col-10">
                                    <p>Menunggu Konfirmasi</p>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <div style="padding: 10px 0;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 my-2" style="height:40px">
                            <div class="row notif-text" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466);">
                                <div class="col-10">
                                    <p>Pesanan Diproses</p>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <div style="padding: 10px 0;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 my-2" style="height:40px">
                            <div class="row notif-text" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466);">
                                <div class="col-10">
                                    <p>Pesanan Dikirim</p>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <div style="padding: 10px 0;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 my-2" style="height:40px">
                            <div class="row notif-text" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466);">
                                <div class="col-10">
                                    <p>Pesanan Tiba</p>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <div style="padding: 10px 0;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 my-2" style="height:40px">
                            <div class="row notif-text" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466);">
                                <div class="col-10">
                                    <p>Pengingat</p>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <div style="padding: 10px 0;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-3 my-2" style="height:40px">
                            <div class="row notif-text fw-bold" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466);">
                                <p> <span><i style="color: rgb(107, 107, 107); font-size: 17px;" class="fa fa-exclamation-circle pe-2" aria-hidden="true"></i>
                                </span> Promo</p>
                            </div>
                        </div>
                        <div class="px-3 my-2" style="height:40px">
                            <div class="row notif-text" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466);">
                                <div class="col-10">
                                    <p>Newsletter Master Bagasi</p>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <div style="padding: 10px 0;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        </div>
                                    </div>
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

@section('script')
    <script>
        window.addEventListener('close-model', e =>{
            $('#name').modal('hide');
            $('#birthday').modal('hide');
            $('#gender').modal('hide');
            $('#email').modal('hide');
            $('#handphone').modal('hide');
            $('#password').modal('hide');
            $('#address').modal('hide');
            $('#editAddress').modal('hide');
        })
    </script>
@endsection


