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
            <h2>Pesan Bantuan</h2>
            <div class="row nav-tabs px-0" style="border: 1px solid rgba(221, 221, 221, 0.466); border-radius: 10px;">
                <div class="px-0" style="border-bottom: 1px solid #ddd">
                    <div class="updateTabs" style="width: 50%">
                        <ul class="nav nav-tabs row" id="myTab2" role="tablist">
                            <li class="nav-item col" role="presentation">
                                <button class="nav-link active" id="transaksiProf-tab" data-bs-toggle="tab"
                                    data-bs-target="#transaksiProf" type="button" role="tab" aria-controls="transaksiProf"
                                    aria-selected="true" style="font-size: 16px">Transaksi</button>
                            </li>
                            <li class="nav-item col" role="presentation">
                                <button class="nav-link" id="alamatProf-tab" data-bs-toggle="tab" data-bs-target="#alamatProf"
                                    type="button" role="tab" aria-controls="alamatProf"
                                    aria-selected="false" style="font-size: 16px">Update(0)</button>
                            </li>
                            
                        </ul>
                    </div>

                </div>
                <div class="tab-content px-0">
                    <div id="transaksiProf" class="tab-pane fade in active show">
                        <div class="p-4" style="background-color: #ff440010">
                            <div class="d-flex">
                                <p style="font-size: 14px; color: rgb(143, 143, 143); margin-bottom:10px;">
                                    <img class="ico-mb" src="{{asset('frontend/img/ico/mb/MBmart.png')}}" alt=""> 
                                    Belanja
                                    <span style="color: black">•</span>
                                    <span>06 Nov</span>
                                </p>
                            </div>
                            <h6>Pesananmu sudah selesai, beri ulasan yuk 🎉</h6>
                            <p>Terima kasih kamu tetap aman di rumah jaga kesehatan diri dan keluarga 💚</p>
                        </div>
                        <div class="p-4">
                            <div class="d-flex">
                                <p style="font-size: 14px; color: rgb(143, 143, 143); margin-bottom:10px;">
                                    <img class="ico-mb" src="{{asset('frontend/img/ico/mb/MBmart.png')}}" alt=""> 
                                    Belanja
                                    <span style="color: black">•</span>
                                    <span>06 Nov</span>
                                </p>
                            </div>
                            <h6>Pesananmu sudah selesai, beri ulasan yuk 🎉</h6>
                            <p>Terima kasih kamu tetap aman di rumah jaga kesehatan diri dan keluarga 💚</p>
                        </div>
                        
                    </div>
                    <div id="alamatProf" class="tab-pane fade">
                        <div class="p-4 d-flex align-middle">
                            <p class="mb-0 mt-2 me-2">Kategori</p>
                            <button class="btn rounded-pill me-2" style="border: 1px solid #ff4200">Promo</button>
                            <button class="btn rounded-pill" style="border: 1px solid #ff4200">Info</button>
                        </div>
                        <div class="p-4 pe-2" style="background-color: #ff440010">
                            <div class="d-flex">
                                <p style="font-size: 14px; color: rgb(143, 143, 143); margin-bottom:10px;">
                                    <img class="ico-mb" src="{{asset('frontend/img/ico/mb/MBmart.png')}}" alt=""> 
                                    Belanja
                                    <span style="color: black">•</span>
                                    <span>06 Nov</span>
                                </p>
                            </div>
                            <h6>Pesananmu sudah selesai, beri ulasan yuk 🎉</h6>
                            <p>Terima kasih kamu tetap aman di rumah jaga kesehatan diri dan keluarga 💚</p>
                        </div>
                        <div class="p-4">
                            <div class="d-flex">
                                <p style="font-size: 14px; color: rgb(143, 143, 143); margin-bottom:10px;">
                                    <img class="ico-mb" src="{{asset('frontend/img/ico/mb/MBmart.png')}}" alt=""> 
                                    Belanja
                                    <span style="color: black">•</span>
                                    <span>06 Nov</span>
                                </p>
                            </div>
                            <h6>Pesananmu sudah selesai, beri ulasan yuk 🎉</h6>
                            <p>Terima kasih kamu tetap aman di rumah jaga kesehatan diri dan keluarga 💚</p>
                        </div>
                    </div>
                </div>
        
            </div>
        </div>
    </div>
</div>

@endsection