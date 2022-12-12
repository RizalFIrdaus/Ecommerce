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
            <h2>Diskusi Produk</h2>
            <div class="row px-0" style="border: 1px solid rgba(221, 221, 221, 0.466); border-radius: 10px;">
                <div class="d-flex align-middle p-4">
                    <p class="mb-0 mt-2 me-2">Tampilkan</p>
                    <button class="btn rounded-pill me-2" style="border: 1px solid #ff4200">Belum dibaca</button>
                    <button class="btn rounded-pill" style="border: 1px solid #ff4200">Sudah Dibaca</button>
                </div>
                <div class="p-3">
                    <div class="p-3 my-2 d-flex flex-column w-100" style="border: 1px solid #ddd; background-color: #ff440010; border-radius: 10px">
                        <div class="d-flex justify-content-between pb-2" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466)">
                            <div class="d-flex">
                                <div class="pe-2">
                                    <img src="{{asset('frontend/img/ico/default/profile-default.svg')}}" alt="Avatar" class="avatar pl-5">
                                </div>
                                <div style="font-size: 14px">
                                    <p class="mb-0">maisto diecast motor 1:12 BMW S 1000 RR</p>
                                    <p class="mb-1 fw-bold">Rp280.000 
                                        <span>•</span>
                                        <span class="fw-normal text-danger">Stok tersisa 1</span>
                                    </p>
                                </div>
                            </div>
                            <img src="{{asset('frontend/img/ico/wishlist/wishlist-off.svg')}}" alt="">
                        </div>
                        <div class="pt-3">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                    <div class="pe-2">
                                        <img src="{{asset('frontend/img/ico/default/profile-default.svg')}}" alt="Avatar" class="avatar rounded-circle pl-5">
                                    </div>
                                    <div>
                                        <p class="mb-0" style="font-size: 14px">Subhandi
                                            <span class="px-1" style="background-color: #d9caca; border-radius: 5px">kamu</span>
                                            <span>•</span>
                                            <span>2 menit</span>
                                        </p>
                                        <p class="mb-1" style="font-size: 16px">Ini dijual bang?</p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <button class="btn" style="background-color: white; border: 1px solid #ddd; border-radius: 10px; height: 35px; margin: auto 0;">Following</button>
                                    <button class="btn"><i class="fa-solid fa-ellipsis fa-2x"></i></button>
                                </div>
                            </div>
                            <div class="ps-5">
                                <div class="ps-1">
                                    <p class="fw-bold">Lihat komentar lainnya</p> 
                                    <div style="border-left: 4px solid #ddd">
                                        <div class="ps-3 d-flex flex-column">
                                            <div class="d-flex my-2">
                                                <div class="d-flex">
                                                    <img src="{{asset('frontend/img/ico/default/profile-default.svg')}}" alt="Avatar" class="avatar rounded-circle pl-5 my-auto" style="max-width: 70%;">
                                                </div>
                                                <div>
                                                    <p class="mb-0" style="font-size: 12px">Rizaldi 
                                                        <span class="px-1" style="background-color: #ffc2ac; color: #ff4200; border-radius: 5px">penjual</span>
                                                        <span>•</span>
                                                        <span>2 menit</span>
                                                    </p>
                                                    <p class="mb-1" style="font-size: 14px">Lu pikir lah ban, yakali gua pajang doang</p>
                                                </div>
                                            </div>
                                            <div class="d-flex my-2">
                                                <div class="d-flex">
                                                    <img src="{{asset('frontend/img/ico/default/profile-default.svg')}}" alt="Avatar" class="avatar rounded-circle pl-5 my-auto" style="max-width: 70%;">
                                                </div>
                                                <div>
                                                    <p class="mb-0" style="font-size: 12px">Subhandi 
                                                        <span class="px-1" style="background-color: #d9caca; border-radius: 5px">kamu</span>
                                                        <span>•</span>
                                                        <span>2 menit</span>
                                                    </p>
                                                    <p class="mb-1" style="font-size: 14px">Ini dijual bang?</p>
                                                </div>
                                            </div>
                                            <form action="">
                                                <input class="diskusi" type="text" placeholder="Balas diskusi...">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 my-2 d-flex flex-column w-100" style="border: 1px solid #ddd; border-radius: 10px">
                        <div class="d-flex justify-content-between pb-2" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466)">
                            <div class="d-flex">
                                <div class="pe-2">
                                    <img src="{{asset('frontend/img/ico/default/profile-default.svg')}}" alt="Avatar" class="avatar pl-5">
                                </div>
                                <div style="font-size: 14px">
                                    <p class="mb-0">maisto diecast motor 1:12 BMW S 1000 RR</p>
                                    <p class="mb-1 fw-bold">Rp280.000 
                                        <span>•</span>
                                        <span class="fw-normal text-danger">Stok tersisa 1</span>
                                    </p>
                                </div>
                            </div>
                            <img src="{{asset('frontend/img/ico/wishlist/wishlist-off.svg')}}" alt="">
                        </div>
                        <div class="pt-3">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                    <div class="pe-2">
                                        <img src="{{asset('frontend/img/ico/default/profile-default.svg')}}" alt="Avatar" class="avatar rounded-circle pl-5">
                                    </div>
                                    <div>
                                        <p class="mb-0" style="font-size: 14px">Subhandi
                                            <span class="px-1" style="background-color: #d9caca; border-radius: 5px">kamu</span>
                                            <span>•</span>
                                            <span>2 menit</span>
                                        </p>
                                        <p class="mb-1" style="font-size: 16px">Ini dijual bang?</p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <button class="btn" style="background-color: white; border: 1px solid #ddd; border-radius: 10px; height: 35px; margin: auto 0;">Following</button>
                                    <button class="btn"><i class="fa-solid fa-ellipsis fa-2x"></i></button>
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