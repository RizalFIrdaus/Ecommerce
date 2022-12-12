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
<div class="container profile-tab" style="margin-top: 100px">
    <div class="row d-flex">
       @include('home.sidebar_profile')
        <div class="col-9">
            <h2>Menunggu Pembayaran</h2>
            <div class="row nav-tabs px-0" style="border: 1px solid rgba(221, 221, 221, 0.466); border-radius: 10px;">
                <div class="p-4">
                    {{-- <div class="profile-header">
                        <h6>Menunggu Pembayaran</h6>
                    </div> --}}
                    <div class="p-3" style="box-shadow: 0 0 5px rgba(221, 221, 221, 0.466); border-radius: 10px; position: relative">
                        <div class="row">
                            <div class="col-6">
                                <p style="font-size: 15px">
                                    <span style="color: #ff4200"><img class="ico-mb" src="{{asset('frontend/img/ico/mb/MBmart.png')}}" alt=""> </span>
                                    <span class="fw-bold px-1">Belanja</span>
                                    <span style="color: rgb(112, 112, 112)">22 Nov 2022</span>
                                </p>
                            </div>
                            <div class="col-6" style="position: relative">
                                <p style="font-size: 15px; position: absolute; right: 0">
                                    <span>Bayar sebelum</span>
                                    <span class="fw-bold px-1" style="color: #ff4200">
                                        <i class="fa-regular fa-clock"></i>
                                        23 Nov, 11:06
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="row d-flex mb-5">
                            <div class="col-3 my-auto">
                                <div class="row d-flex">
                                    <div class="col-3 my-auto">
                                        <div class="pe-3">
                                            <img src="{{asset('frontend/img/dummy/berita1.jpg')}}">
                                        </div>
                                    </div>
                                    <div class="col-9 my-auto">
                                        <div>
                                            <p style="font-size: 16px" class="mb-0">Metode Pembayaran</p>
                                            <p style="font-size: 18px" class="mb-0 fw-bold">Mandiri Virtual Account</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 my-auto">
                                <div style="border-left: 2px solid #ddd" class="ps-3">
                                    <p style="font-size: 15px;" class="mb-0">
                                        Nomor Virtual Account
                                    </p>
                                    <p style="font-size: 15px;" class="mb-0 fw-bold">
                                        887656432198456
                                    </p>
                                </div>
                            </div>
                            <div class="col-3 my-auto">
                                <div style="border-left: 2px solid #ddd" class="ps-3">
                                    <p style="font-size: 15px;" class="mb-0">
                                        Total Pembayaran
                                    </p>
                                    <p style="font-size: 15px;" class="mb-0 fw-bold">
                                        Rp32.500
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div style="position: relative">
                            <div style="position: absolute; right: 0; bottom: 0">
                                <button class="btn" style="background-color: white; border: 1px solid #ddd; border-radius: 10px; height: 35px; margin: auto 0;">Lihat Detail</button>
                                <button class="btn wis-btn" style="border: 1px solid #ddd; border-radius: 10px; height: 35px; margin: auto 0; color: #fff">Bayar</button>
                                <button class="btn px-0"><i class="fa-solid fa-ellipsis fa-2x"></i></button>
                            </div>
                        </div>
                    </div>

                </div>

        
            </div>
        </div>
    </div>
</div>

@endsection