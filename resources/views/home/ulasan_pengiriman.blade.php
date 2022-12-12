@extends('layouts.app')
@section('content')
<main class="mt-5 pt-4">
    <div class="container" >
        <div class="row my-3 w-75" id="ulasan" style="position: fixed;z-index:10;">
            <div class="cektarif-dd col-9 h-100" >
                <select class="form-select select2" aria-label="Default select example" wire:model='country'>
                    <option selected value="{{null}}">Lihat Ulasan Negara Lainnya</option>
                    @foreach ($countries as $country)
                    <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-3">
                <button class="btn btn-primary w-100 h-100" wire:click.prevent='cekHarga'><span>Cek Tarif</span></button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="w-100 p-3" style="height: 240px; background-color: #ff4200">
                    <h5 class="fw-bold">Pengiriman</h5>
                    <h5 class="fw-bold">United States</h5>
                </div>
                <h5 class="ps-5  fw-bold">Ulasan MBestie</h5>
                <div class="wrap-product-ulasan d-flex gap-3 py-3">
                    <div class="ulasan-rating d-flex align-items-center flex-column w-100">
                        <div class="d-flex gap-2">
                            <i class="fa fa-star" aria-hidden="true" style="line-height: 70px;"></i>
                            <p class="score">4.6 <span>/ 5</span></p>
                        </div>
                        <p class="fw-bold">96% Pembeli merasa puas</p>
                        <div class="d-flex w-100">
                            <div class="flex-grow-1">
                                <div class="row align-items-center mb-1">
                                    <div class="col-2 text-end"><i class="fa fa-star" aria-hidden="true"></i>5</div>
                                    <div class="col-8">
                                        <div class="progress" style="height: 10px">
                                            <div class="progress-bar" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-2">10</div>
                                </div>
                                <div class="row align-items-center mb-1">
                                    <div class="col-2 text-end"><i class="fa fa-star" aria-hidden="true"></i>4</div>
                                    <div class="col-8">
                                        <div class="progress" style="height: 10px">
                                            <div class="progress-bar" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-2">10</div>
                                </div>
                                <div class="row align-items-center mb-1">
                                    <div class="col-2 text-end"><i class="fa fa-star" aria-hidden="true"></i>3</div>
                                    <div class="col-8">
                                        <div class="progress" style="height: 10px">
                                            <div class="progress-bar" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-2">10</div>
                                </div>
                                <div class="row align-items-center mb-1">
                                    <div class="col-2 text-end"><i class="fa fa-star" aria-hidden="true"></i>2</div>
                                    <div class="col-8">
                                        <div class="progress" style="height: 10px">
                                            <div class="progress-bar" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-2">10</div>
                                </div>
                                <div class="row align-items-center mb-1">
                                    <div class="col-2 text-end"><i class="fa fa-star" aria-hidden="true"></i>1</div>
                                    <div class="col-8">
                                        <div class="progress" style="height: 10px">
                                            <div class="progress-bar" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-2">10</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow mt-4">
                    <div class="card-header fw-bold">
                        <h3 style="font-size: 20px;" class="mt-2">Filter</h3>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div style="border-bottom: 2px solid rgba(221, 221, 221, 0.466)" class="pt-2 side-dd">
                            <div class="list-filter row">
                                <div class="col">
                                    <div class="rounded shadow-sm side-dd">
                                        <button class="dropdown-btn pt-3"
                                            style="font-size: 16px; font-weight: 700">Media<i
                                                class="fa fa-caret-down"></i></button>
                                        <div class="list--hideable list--show-hidden py-2">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <div class="form-check cekbox-oren d-flex">
                                                            <input class="form-check-input my-auto"
                                                                type="checkbox"
                                                                id="flexCheckChecked">
                                                            <label class="form-check-label my-auto ps-3"
                                                                for="flexCheckChecked">
                                                                Dengan Foto & Video
                                                            </label>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <a id="show-more-link" class="show-more-link text-black-50">Tampilkan lebih
                                                banyak...</a>
                                        </div>
                                    </div>
                                    <div class="rounded shadow-sm side-dd">
                                        <button class="dropdown-btn pt-3"
                                            style="font-size: 16px; font-weight: 700">Ratings<i
                                                class="fa fa-caret-down"></i></button>
                                        <div class="list--hideable list--show-hidden py-2">
                                            <ul>
                                                @for ($i=5; $i>=1; $i--)
                                                <li>
                                                    <a href="#">
                                                        <div class="form-check cekbox-oren d-flex">
                                                            <input class="form-check-input my-auto"
                                                                type="checkbox"
                                                                id="rating{{$i}}">
                                                            <label class="form-check-label my-auto ps-3"
                                                                for="rating{{$i}}">
                                                                <i class="fa-solid fa-star me-2" style="color: #efce4a"></i>{{$i}}
                                                            </label>
                                                        </div>
                                                    </a>
                                                </li>
                                                @endfor
                                            </ul>
                                        </div>
                                    </div>
                                    @php
                                        $topik= ['Pelayanan' , 'Barang', 'Kemasan', 'Pengiriman','Harga']
                                    @endphp
                                    <div class="rounded shadow-sm side-dd">
                                        <button class="dropdown-btn pt-3"
                                            style="font-size: 16px; font-weight: 700">Topik Ulasan<i
                                                class="fa fa-caret-down"></i></button>
                                        <div class="list--hideable list--show-hidden py-2">
                                            <ul>
                                                @foreach ($topik as $key => $item)
                                                <li>
                                                    <a href="#">
                                                        <div class="form-check cekbox-oren d-flex">
                                                            <input class="form-check-input my-auto"
                                                                type="checkbox"
                                                                id="topik{{$key}}">
                                                            <label class="form-check-label my-auto ps-3"
                                                                for="topik{{$key}}">
                                                                Kualitas {{$item}}
                                                            </label>
                                                        </div>
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>

            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 main-content-area">
                <div class="p-3 mb-4" style="background-color: #f4f4f4">
                    <h5 class="mb-0 fw-bold">Foto & Video MBestie</h5>
                </div>
                <div class="d-flex gap-3 mb-4">
                    <div style="width: 168px; height: 168px; background-color: #ff4200"></div>
                    <div style="width: 168px; height: 168px; background-color: #ff4200"></div>
                    <div style="width: 168px; height: 168px; background-color: #ff4200"></div>
                    <div style="width: 168px; height: 168px; background-color: #ff4200"></div>
                    <div style="width: 168px; height: 168px; background-color: #ff4200"></div>
                    <div style="width: 168px; height: 168px; background-color: #ff4200"></div>
                </div>

                <div class="p-3 mb-4" style="background-color: #f4f4f4">
                    <h5 class="mb-0 fw-bold">Ulasan Pilihan 5 dari 10 Ulasan</h5>
                </div>
                <div style="height: 315px; box-shadow: 0 0 5px 2px rgb(177, 177, 177)" class="px-3 py-4 mb-4">
                    <div class="d-flex gap-2">
                        <div>
                            <i class="fa fa-star me-1" aria-hidden="true" style="color: #efce4a"></i>
                            <i class="fa fa-star me-1" aria-hidden="true" style="color: #efce4a"></i>
                            <i class="fa fa-star me-1" aria-hidden="true" style="color: #efce4a"></i>
                            <i class="fa fa-star me-1" aria-hidden="true" style="color: #efce4a"></i>
                            <i class="fa fa-star me-1" aria-hidden="true" style="color: #efce4a"></i>
                        </div>
                        <h4 style="margin-top: -5px">|</h4>
                        <p class="text-muted mb-0">2 minggu yang lalu</p>
                    </div>

                    <div class="d-flex gap-2 align-items-center">
                        <div style="width: 46px; height: 46px; background-color: #ff4200"></div>
                        <h6 class="fw-bold mb-0">Noverina</h6>
                        <h4 style="margin-top: 5px">|</h4>
                        <h6 class="m-0" style="color: #ff4200">belanda</h6>
                    </div>
                    <p class="p-2" style="font-size: 18px">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum sit commodi assumenda veniam nostrum voluptatem animi dicta eveniet nobis illo est dolorem cupiditate sint, possimus ea quas deleniti vero tempore!</p>
                    <div class="d-flex gap-2">
                        <div style="width: 92px; height: 92px; background-color: #ff4200"></div>
                        <div style="width: 92px; height: 92px; background-color: #ff4200"></div>
                        <div style="width: 92px; height: 92px; background-color: #ff4200"></div>
                        <div style="width: 92px; height: 92px; background-color: #ff4200"></div>
                        <div style="width: 92px; height: 92px; background-color: #ff4200"></div>
                    </div>
                </div>
                <div style="height: 315px; box-shadow: 0 0 5px 2px rgb(177, 177, 177)" class="px-3 py-4 mb-4">
                    <div class="d-flex gap-2">
                        <div>
                            <i class="fa fa-star me-1" aria-hidden="true" style="color: #efce4a"></i>
                            <i class="fa fa-star me-1" aria-hidden="true" style="color: #efce4a"></i>
                            <i class="fa fa-star me-1" aria-hidden="true" style="color: #efce4a"></i>
                            <i class="fa fa-star me-1" aria-hidden="true" style="color: #efce4a"></i>
                            <i class="fa fa-star me-1" aria-hidden="true" style="color: #efce4a"></i>
                        </div>
                        <h4 style="margin-top: -5px">|</h4>
                        <p class="text-muted mb-0">2 minggu yang lalu</p>
                    </div>

                    <div class="d-flex gap-2 align-items-center">
                        <div style="width: 46px; height: 46px; background-color: #ff4200"></div>
                        <h6 class="fw-bold mb-0">Noverina</h6>
                        <h4 style="margin-top: 5px">|</h4>
                        <h6 class="m-0" style="color: #ff4200">belanda</h6>
                    </div>
                    <p class="p-2" style="font-size: 18px">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum sit commodi assumenda veniam nostrum voluptatem animi dicta eveniet nobis illo est dolorem cupiditate sint, possimus ea quas deleniti vero tempore!</p>
                    <div class="d-flex gap-2">
                        <div style="width: 92px; height: 92px; background-color: #ff4200"></div>
                        <div style="width: 92px; height: 92px; background-color: #ff4200"></div>
                        <div style="width: 92px; height: 92px; background-color: #ff4200"></div>
                        <div style="width: 92px; height: 92px; background-color: #ff4200"></div>
                        <div style="width: 92px; height: 92px; background-color: #ff4200"></div>
                    </div>
                </div>
                <div style="height: 315px; box-shadow: 0 0 5px 2px rgb(177, 177, 177)" class="px-3 py-4 mb-4">
                    <div class="d-flex gap-2">
                        <div>
                            <i class="fa fa-star me-1" aria-hidden="true" style="color: #efce4a"></i>
                            <i class="fa fa-star me-1" aria-hidden="true" style="color: #efce4a"></i>
                            <i class="fa fa-star me-1" aria-hidden="true" style="color: #efce4a"></i>
                            <i class="fa fa-star me-1" aria-hidden="true" style="color: #efce4a"></i>
                            <i class="fa fa-star me-1" aria-hidden="true" style="color: #efce4a"></i>
                        </div>
                        <h4 style="margin-top: -5px">|</h4>
                        <p class="text-muted mb-0">2 minggu yang lalu</p>
                    </div>

                    <div class="d-flex gap-2 align-items-center">
                        <div style="width: 46px; height: 46px; background-color: #ff4200"></div>
                        <h6 class="fw-bold mb-0">Noverina</h6>
                        <h4 style="margin-top: 5px">|</h4>
                        <h6 class="m-0" style="color: #ff4200">belanda</h6>
                    </div>
                    <p class="p-2" style="font-size: 18px">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum sit commodi assumenda veniam nostrum voluptatem animi dicta eveniet nobis illo est dolorem cupiditate sint, possimus ea quas deleniti vero tempore!</p>
                    <div class="d-flex gap-2">
                        <div style="width: 92px; height: 92px; background-color: #ff4200"></div>
                        <div style="width: 92px; height: 92px; background-color: #ff4200"></div>
                        <div style="width: 92px; height: 92px; background-color: #ff4200"></div>
                        <div style="width: 92px; height: 92px; background-color: #ff4200"></div>
                        <div style="width: 92px; height: 92px; background-color: #ff4200"></div>
                    </div>
                </div>
                <div style="height: 315px; box-shadow: 0 0 5px 2px rgb(177, 177, 177)" class="px-3 py-4 mb-4">
                    <div class="d-flex gap-2">
                        <div>
                            <i class="fa fa-star me-1" aria-hidden="true" style="color: #efce4a"></i>
                            <i class="fa fa-star me-1" aria-hidden="true" style="color: #efce4a"></i>
                            <i class="fa fa-star me-1" aria-hidden="true" style="color: #efce4a"></i>
                            <i class="fa fa-star me-1" aria-hidden="true" style="color: #efce4a"></i>
                            <i class="fa fa-star me-1" aria-hidden="true" style="color: #efce4a"></i>
                        </div>
                        <h4 style="margin-top: -5px">|</h4>
                        <p class="text-muted mb-0">2 minggu yang lalu</p>
                    </div>

                    <div class="d-flex gap-2 align-items-center">
                        <div style="width: 46px; height: 46px; background-color: #ff4200"></div>
                        <h6 class="fw-bold mb-0">Noverina</h6>
                        <h4 style="margin-top: 5px">|</h4>
                        <h6 class="m-0" style="color: #ff4200">belanda</h6>
                    </div>
                    <p class="p-2" style="font-size: 18px">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum sit commodi assumenda veniam nostrum voluptatem animi dicta eveniet nobis illo est dolorem cupiditate sint, possimus ea quas deleniti vero tempore!</p>
                    <div class="d-flex gap-2">
                        <div style="width: 92px; height: 92px; background-color: #ff4200"></div>
                        <div style="width: 92px; height: 92px; background-color: #ff4200"></div>
                        <div style="width: 92px; height: 92px; background-color: #ff4200"></div>
                        <div style="width: 92px; height: 92px; background-color: #ff4200"></div>
                        <div style="width: 92px; height: 92px; background-color: #ff4200"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

@endsection

@section('script')
<script>
    $.fn.followTo = function (pos) {
        var $this = this,
            $window = $(window);
        $window.scroll(function (e) {
            if (
                $window.scrollTop() >
                 500
            ) {
                $this.css({
                    position: "absolute",
                    top: $(".short-desc").height() +
                        $(".ulasan-pembeli").height() +
                        0,
                });
            } else {
                $this.css({
                    position: "fixed",
                    top: 90,
                    width: $('.col').width()
                });
            }
        });
    };

</script>

@endsection