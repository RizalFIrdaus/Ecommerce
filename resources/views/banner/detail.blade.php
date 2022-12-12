@extends('layouts.app')
@section('content')
<div class="container d-flex flex-row mt-5 min-height-526">
    <div class="row mt-5">
        <div class="col">
            <div class="card" style="width: 308px;cursor:default;">
                <div class="card-header fw-bold">
                    Filter
                </div>
                <div class="rounded shadow-sm side-dd">
                    <button class="dropdown-btn pt-3" style="font-size: 14px; font-weight: 700">Promo
                        {{-- <i class="fa fa-caret-down"></i> --}}
                      </button>
                      <div class="py-2">
                        <ul>
                            <li class="mb-2">
                                <div class="form-check cekbox-oren d-flex">
                                    <input class="form-check-input me-2 my-auto" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label my-auto ps-3" for="flexCheckChecked">Tiket Pesawat</label>
                                </div>
                            </li>
                            <li class="mb-2">
                                <div class="form-check cekbox-oren d-flex">
                                    <input class="form-check-input me-2 my-auto" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label my-auto ps-3" for="flexCheckChecked">Hotel</label>
                                </div>
                            </li>
                            <li class="mb-2">
                                <div class="form-check cekbox-oren d-flex">
                                    <input class="form-check-input me-2 my-auto" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label my-auto ps-3" for="flexCheckChecked">Holiday Stay</label>
                                </div>
                            </li>
                            <li class="mb-2">
                                <div class="form-check cekbox-oren d-flex">
                                    <input class="form-check-input me-2 my-auto" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label my-auto ps-3" for="flexCheckChecked">Tiket Kereta Api</label>
                                </div>
                            </li>
                            <li class="mb-2">
                                <div class="form-check cekbox-oren d-flex">
                                    <input class="form-check-input me-2 my-auto" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label my-auto ps-3" for="flexCheckChecked">Pesawat + Hotel</label>
                                </div>
                            </li>
                            <li class="mb-2">
                                <div class="form-check cekbox-oren d-flex">
                                    <input class="form-check-input me-2 my-auto" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label my-auto ps-3" for="flexCheckChecked">Tiket Bus & Travel</label>
                                </div>
                            </li>
                        </ul>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5 px-2" style="margin-left: 10px;">
        <div class="col-md category-product">
            <div class="d-flex gap-3 flex-wrap">
                {{-- <div class="card" style="width: 16.6rem;">
                    <img class="card-img-top w-100" src="{{asset('frontend/img/dummy/berita1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="promo-durasi">
                        <p>Periode promo: 12 - 24 November 2022 </p>
                        <p>Periode travel: kapan pun</p>
                      </div>
                      <a href="#" class="btn btn-full wis-btn">Go somewhere</a>
                    </div>
                </div> --}}
                <div class="card" style="width: 34.3rem">
                    <img class="card-img-top" src="{{asset('frontend/img/dummy/berita1.jpg')}}" style="width: 576px;height: 264px;" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="promo-durasi">
                        <p>Periode promo: 12 - 24 November 2022 </p>
                        <p>Periode travel: kapan pun</p>
                      </div>
                      <a href="#" class="btn btn-full wis-btn">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 34.3rem">
                    <img class="card-img-top" src="{{asset('frontend/img/dummy/berita1.jpg')}}" style="width: 576px;height: 264px;" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="promo-durasi">
                        <p>Periode promo: 12 - 24 November 2022 </p>
                        <p>Periode travel: kapan pun</p>
                      </div>
                      <a href="#" class="btn btn-full wis-btn">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 34.3rem">
                    <img class="card-img-top" src="{{asset('frontend/img/dummy/berita1.jpg')}}" style="width: 576px;height: 264px;" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="promo-durasi">
                        <p>Periode promo: 12 - 24 November 2022 </p>
                        <p>Periode travel: kapan pun</p>
                      </div>
                      <a href="#" class="btn btn-full wis-btn">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 34.3rem">
                    <img class="card-img-top" src="{{asset('frontend/img/dummy/berita1.jpg')}}" style="width: 576px;height: 264px;" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="promo-durasi">
                        <p>Periode promo: 12 - 24 November 2022 </p>
                        <p>Periode travel: kapan pun</p>
                      </div>
                      <a href="#" class="btn btn-full wis-btn">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 34.3rem">
                    <img class="card-img-top" src="{{asset('frontend/img/dummy/berita1.jpg')}}" style="width: 576px;height: 264px;" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="promo-durasi">
                        <p>Periode promo: 12 - 24 November 2022 </p>
                        <p>Periode travel: kapan pun</p>
                      </div>
                      <a href="#" class="btn btn-full wis-btn">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection