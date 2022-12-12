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
            <h2>Ulasan Pengiriman</h2>
            <div class="row nav-tabs px-0" style="border: 1px solid rgba(221, 221, 221, 0.466); border-radius: 10px;">
                <div class="px-0" style="border-bottom: 1px solid #ddd">
                    <div class="updateTabs" style="width: 50%">
                        <ul class="nav nav-tabs row" id="myTab2" role="tablist">
                            <li class="nav-item col" role="presentation">
                                <button class="nav-link active" id="belumDiUlas-tab" data-bs-toggle="tab"
                                    data-bs-target="#belumDiUlas" type="button" role="tab" aria-controls="belumDiUlas"
                                    aria-selected="true" style="font-size: 16px">Belum Diulas</button>
                            </li>
                            <li class="nav-item col" role="presentation">
                                <button class="nav-link" id="sudahDiUlas-tab" data-bs-toggle="tab" data-bs-target="#sudahDiUlas"
                                    type="button" role="tab" aria-controls="sudahDiUlas"
                                    aria-selected="false" style="font-size: 16px">Ulasan Saya</button>
                            </li>
                            
                        </ul>
                    </div>

                </div>
                <div class="tab-content px-0">
                    <div id="belumDiUlas" class="tab-pane fade in active show">
                        <div class="px-4 pt-2 d-flex align-middle">
                            <button class="btn p-0" style="color: #ff4200">
                                <i class="fa-solid fa-angle-left"></i>
                                Kembali
                            </button>
                        </div>
                        <div class="p-4">
                            <div style="border: 1px solid #ddd;">
                                <div style="background-color: #ddd">
                                    <div class="row px-3 py-2">
                                        <div class="col-6">
                                            <p class="mb-0">
                                                Penjual: 
                                                <span>Rizaldi</span>
                                            </p>
                                        </div>
                                        <div class="col-6" style="position: relative">
                                            <p class="mb-0" style="position: absolute; right: 0">
                                                Pesanan diterima: 
                                                <span>06 Sep 2020, 14:09</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="p-3">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img src="{{ asset('frontend/img/dummy/berita1.jpg') }}" alt="" class="w-100">
                                            </div>
                                            <div class="col-md-11 ">
                                                <div class="ps-2">
                                                    <p class="mb-0">Mouse Logitech M100R</p>
                                                    <div class="d-flex my-2">
                                                        <span class="text-warning">
                                                            <i class="fa-solid fa-star fa-2x"></i>
                                                            <i class="fa-solid fa-star fa-2x"></i>
                                                            <i class="fa-solid fa-star fa-2x"></i>
                                                            <i class="fa-solid fa-star fa-2x"></i>
                                                            <i class="fa-solid fa-star fa-2x"></i>
                                                        </span>
                                                        <p style="font-size: 16px; padding-left: 10px; margin: auto 0">Sangat Baik</p>
                                                    </div>
                                                    <p>Tampilkan sebagai
                                                        <span style="color: #ff4200">Subhandi</span>
                                                        <span class="p-1" style="border: 1px solid #ddd; border-radius: 5px">
                                                            <i class="fa-solid fa-face-smile text-warning"></i>
                                                             100%
                                                        </span>
                                                    </p>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <p>08 Sep 2020, 7:28 WIB</p>
                                                        </div>
                                                        <div class="col-6" style="position: relative">
                                                            <div style="position: absolute; right: 0;">
                                                                <button class="btn px-0" style="font-size: 20px;"><i class="fa-brands fa-facebook"></i></button>
                                                                <button class="btn px-0" style="font-size: 20px;"><i class="fa fa-link"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3" style="background-color: #ff440010; border: 1px solid #ddd">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <img src="{{ asset('frontend/img/dummy/berita1.jpg') }}" alt="" class="w-100">
                                                        </div>
                                                        <div class="col-md-11 ">
                                                            <div class="ps-2">
                                                                <p class="mb-0">Rizaldi</p>
                                                                
                                                                <span style="border: 1px solid #ddd; background-color: #ffc2ac; border-radius: 5px; font-size: 12px; padding: 2px; color:#fff">
                                                                    Penjual
                                                                </span>
                                                                <p class="py-1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque natus quis, quidem unde praesentium tempore? Tenetur provident voluptates, animi suscipit tempora quod iusto perspiciatis, repellat adipisci modi in deleniti debitis asperiores quaerat ipsam ab fugiat ad ratione nam! Earum eaque esse ullam ipsa accusamus et repellendus eum iusto. Ipsam, quo.</p>
                                                                <p>08 Sep 2020, 7:28 WIB</p>
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
                    <div id="sudahDiUlas" class="tab-pane fade">
                        <div class="px-4 pt-2 d-flex align-middle">
                            <button class="btn p-0" style="color: #ff4200">
                                <i class="fa-solid fa-angle-left"></i>
                                Kembali
                            </button>
                        </div>
                        <div class="p-4">
                            <div style="border: 1px solid #ddd;">
                                <div style="background-color: #ddd">
                                    <div class="row px-3 py-2">
                                        <div class="col-6">
                                            <p class="mb-0">
                                                Penjual: 
                                                <span>Rizaldi</span>
                                            </p>
                                        </div>
                                        <div class="col-6" style="position: relative">
                                            <p class="mb-0" style="position: absolute; right: 0">
                                                Pesanan diterima: 
                                                <span>06 Sep 2020, 14:09</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="p-3">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img src="{{ asset('frontend/img/dummy/berita1.jpg') }}" alt="" class="w-100">
                                            </div>
                                            <div class="col-md-11 ">
                                                <div class="ps-2">
                                                    <p class="mb-0">Mouse Logitech M100R</p>
                                                    <div class="d-flex my-2">
                                                        <span class="text-warning">
                                                            <i class="fa-solid fa-star fa-2x"></i>
                                                            <i class="fa-solid fa-star fa-2x"></i>
                                                            <i class="fa-solid fa-star fa-2x"></i>
                                                            <i class="fa-solid fa-star fa-2x"></i>
                                                            <i class="fa-solid fa-star fa-2x"></i>
                                                        </span>
                                                        <p style="font-size: 16px; padding-left: 10px; margin: auto 0">Sangat Baik</p>
                                                    </div>
                                                    <p>Tampilkan sebagai
                                                        <span style="color: #ff4200">Subhandi</span>
                                                        <span class="p-1" style="border: 1px solid #ddd; border-radius: 5px">
                                                            <i class="fa-solid fa-face-smile text-warning"></i>
                                                             100%
                                                        </span>
                                                    </p>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <p>08 Sep 2020, 7:28 WIB</p>
                                                        </div>
                                                        <div class="col-6" style="position: relative">
                                                            <div style="position: absolute; right: 0;">
                                                                <button class="btn px-0" style="font-size: 20px;"><i class="fa-brands fa-facebook"></i></button>
                                                                <button class="btn px-0" style="font-size: 20px;"><i class="fa-solid fa-share-nodes"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3" style="background-color: #ff440010; border: 1px solid #ddd">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <img src="{{ asset('frontend/img/dummy/berita1.jpg') }}" alt="" class="w-100">
                                                        </div>
                                                        <div class="col-md-11 ">
                                                            <div class="ps-2">
                                                                <p class="mb-0">Rizaldi</p>
                                                                
                                                                <span style="border: 1px solid #ddd; background-color: #ffc2ac; border-radius: 5px; font-size: 12px; padding: 2px; color:#fff">
                                                                    Penjual
                                                                </span>
                                                                <p class="py-1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque natus quis, quidem unde praesentium tempore? Tenetur provident voluptates, animi suscipit tempora quod iusto perspiciatis, repellat adipisci modi in deleniti debitis asperiores quaerat ipsam ab fugiat ad ratione nam! Earum eaque esse ullam ipsa accusamus et repellendus eum iusto. Ipsam, quo.</p>
                                                                <p>08 Sep 2020, 7:28 WIB</p>
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
                </div>
        
            </div>
        </div>
    </div>
</div>

@endsection