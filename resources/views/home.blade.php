@extends('layouts.app')
@section('content')

<div class="container mt-5">
  @include('home.banner')
  {{-- splash screen --}}
  <div class="container">
    <div id="splash-screen-home" class="modal fade" role="dialog">
      <div class="modal-dialog modal-dialog-centered" style="max-width: 720px; max-height: 90vh;">
        <div class="modal-content">
          <div class="modal-body p-0">
            
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- category --}}
  <section class="cat-wrap my-3">
    <div class="bg-cat">
      <p class="px-4 py-2 mb-0 section-title">Kategori Produk Indonesia</p>
    </div>
    <div class="container">
      <div class="bks-cat">
        <div id="carou-cat" class="owl-carousel owl-theme">
          
          @foreach ($categories as $category)
          <div class="d-flex flex-column align-items-center pikistaw px-3">
            <a href="{{url('category/'.$category->slug)}}">
              <div class="card py-md-3 py-1">
                <img src="{{asset('image/uploads/category/'.$category->image)}}" class="w-100">
              </div>
            </a>
            <a href="{{url('category/'.$category->slug)}}" class="btn btn-cat w-100 pikistel">{{$category->name}}</a>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  
  {{-- Brand Asli Inmdonesia --}}
  <section class="categories my-3">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h4>Merek Asli Indonesia</h4>
        </div>
      </div>
    </div>
    <div id="carou-cat2" class="owl-carousel owl-theme cat-cat">
      @foreach ($brands as $brand)
      <a href="{{url('brands/'.$brand->slug)}}">
        <div class="ms-2 me-2 d-flex flex-column">
          <div class="circle">
            <img src="{{asset('image/uploads/brands/'.$brand->image)}}">
          </div>
          <span class="text-center mt-4" style="font-size: 18px; color:black;">{{$brand->name}}</span>
        </div>
      </a>
      @endforeach
    </div>
  </section>
  
  {{-- Lagi Viral --}}
  <section class="viral-wrap my-3">
    <div class="bg-cat">
      <div class="row">
        <div class="col-md-8 col-8">
          <p class="px-4 mb-0 section-title">{{$viral_hastag->hastag->name}}</p>
        </div>
        <div class="col-md-4 col-4 d-flex justify-content-end">
          <div class="p-2">
            <a class="btn btn-lihat" href="{{url('hastag/'.$viral_hastag->hastag->slug)}}" style="text-decoration: none; color: black;">
              Lihat semua
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container mb-xl-5">
      <div class="bks-cat">
        <div id="carou-cat3" class="hashtag owl-carousel owl-theme">
         @foreach ($viral as $product)
         <a href="{{url("hastag/".$product->hastag->slug."/".$product->product->slug)}}" style="text-decoration: none; color:black;">
          <div class="ms-2 me-2">
            <div class="d-flex flex-wrap gap-4">
              <div class="card card-product mt-2">
                @if ($product->product->ProductImages->isEmpty())
                <img src="{{ asset('frontend/img/default_product.png') }}">
                @else
                <img src="{{ asset('image/uploads/products/'.$product->product->_ProductImages->image) }}">
                @endif
                  <div class="card-body">
                    <div class="container">
                      <div class="row pb-2">
                        <div class="d-flex" style="height: 1.7rem">
                          <div class="position-absolute label-product px-2 px-md-3 py-1 terviral">
                            Terviral
                          </div>
                          <div class="position-absolute label-product px-2 px-md-3 py-1 terlaris d-flex justify-content-end">
                            Terlaris
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <p class="product-name" >{{$product->product->name}}</p>
                        </div>
                      </div>
                      <div class="row d-flex justify-content-center align-items-center py-1">
                        <div class="col-8 d-flex justify-content-start pe-0">
                          <p class="price" >Rp{{number_format($product->product->selling_price,0,',','.');}}</p>
                        </div>
                        <div class="col ps-0">
                          <div class="d-flex justify-content-end">
                            <p>
                              <strong>{{$product->product->weight}}</strong>  
                              <span>Kg</span> 
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row" >
                        <div class="col d-flex justify-content-start">
                          <div class="d-flex justify-content-center align-content-center">
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <p class="rating-text mb-0">4.5 |</p>
                          </div>
                          <div>
                            <p class="rating-text sold ms-2 mb-0"> terjual {{$product->product->sold}}</p>
                          </div>  
                        </div>
                      </div>
                      <div class="row" >
                        {{-- livewire --}}
                        <livewire:frontend.c-t-a.wish-cart :product="$product->product">
                      </div>
                    </div>
                  </div>
            
                
              </div>
            </div>
          </div>
         </a>
         @endforeach
        </div>
      </div>
    </div>
  </section>

  {{-- Banner panjang klik --}}
  <section class="banr my-3">
    <div id="BannerPanjang" class="owl-carousel owl-theme">
      <div class="item">
        <img src="{{asset('frontend/img/banner/promoUK.png')}}" class="d-block w-100">
      </div>
      <div class="item">
        <img src="{{asset('frontend/img/banner/promoAustralia.png')}}" class="d-block w-100">
      </div>
      <div class="item">
        <img src="{{asset('frontend/img/banner/promoUSA.png')}}" class="d-block w-100">
      </div>
      <div class="item">
        <img src="{{asset('frontend/img/banner/promoEropa.png')}}" class="d-block w-100">
      </div>
    </div>
    <div class="banr-btn popup-banjang" type="button" data-bs-toggle="modal" data-bs-target="#cektarif">
      <span>Cek tarif ke negara lainnya</span>
    </div>
   <livewire:frontend.cargo.popup :countries="$countries">
  </section>

  {{-- Dapur --}}
  <section class="test-dapur my-3 ps-4">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <p class="p-2 mb-0 text-black" style="font-size: 2.5rem;">{{$dapur->name}}</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="h-100 d-flex align-items-end pb-5">
            <a href="{{url('hastag/'.$dapur->slug)}}" class="btn btn-lihat mb-5 text-black-100">Lihat selengkapnya</a>
          </div>
        </div>
        <div class="col-md-9">
          <div class="w-100" style="height: 300px; background-color: #25258c"></div>
        </div>
      </div>
    </div>
  </section>

  {{-- rebahan --}}
  <section class="viral-wrap2 my-3">
    <div class="bg-cat">
      <div class="row">
        <div class="col-md-8 col-8">
          <p class="px-4 mb-0 section-title">{{$masakanibu_hastag->hastag->hastag}}</p>
        </div>
        <div class="col-md-4 col-4 d-flex justify-content-end">
          <div class="p-2">
            <a class="btn btn-lihat" href="{{url('hastag/'.$masakanibu_hastag->hastag->slug)}}" style="text-decoration: none; color: black;">
              Lihat semua
            </a>
          </div>
        </div>
      </div>
    <div class="container mb-5">
      <div class="bks-cat">
        <div id="carou-cat4" class="hashtag owl-carousel owl-theme">
          @foreach ($masakanibu as $product)
         <a href="{{url("hastag/".$product->hastag->slug."/".$product->product->slug)}}" style="text-decoration: none; color:black;">
          <div class="ms-2 me-2">
            <div class="d-flex flex-wrap gap-4">
              <div class="card card-product mt-2">
                @if ($product->product->ProductImages->isEmpty())
                <img src="{{ asset('frontend/img/default_product.png') }}">
                @else
                <img src="{{ asset('image/uploads/products/'.$product->product->_ProductImages->image) }}">
                @endif
                  <div class="card-body pt-2">
                    <div class="container">
                      <div class="row">
                        <div class="col">
                          <p class="product-name">{{$product->product->name}}</p>
                        </div>
                      </div>
                      <div class="row d-flex justify-content-center align-items-center py-1" >
                        <div class="col-8 d-flex justify-content-start">
                          <p class="price" >Rp{{number_format($product->product->selling_price,0,',','.')}}</p>
                        </div>
                        <div class="col ps-0">
                          <div class="d-flex justify-content-end">
                            <p>
                              <strong>{{$product->product->weight}}</strong>  
                              <span>Kg</span> 
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row" >
                        <div class="col d-flex justify-content-start">
                          <div class="d-flex justify-content-center align-content-center">
                            <i class="bi bi-star-fill text-warning me-1" style="margin-top: 2px;"></i>
                            <p class="rating-text">4.5 |</p>
                          </div>
                          <div>
                            <p class="rating-text sold ms-2"> terjual {{$product->product->sold}}</p>
                          </div>  
                        </div>
                      </div>
                      <div class="row" >
                        {{-- livewire --}}
                        <livewire:frontend.c-t-a.wish-cart :product="$product->product">
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
         </a>
         @endforeach
        </div>
      </div>
    </div>
  </section>

  {{-- bundling --}}
  <section class="bundling mt-4">
    <div class="bks-bundle d-flex">
      <div id="bundle" class="owl-carousel owl-theme my-auto">
        @foreach ($bundling as $bundle)
        <div style="background-color: #fff; border:1px solid #ddd ;height: 337px;">
          <div class="bks-caption" style="position: relative">
            <div id="bundle-caption" style="position: absolute;left: 69px;top: 30px;width: 276px;z-index: 10;">
              <h2 style="font-size: 45px; font-weight: 600; color: #00428C; text-align: left;" class="animateanimated animatefadeInLeft "> <span id="bundle-event"></span>{{$bundle->product->name}}</h2>
              <h2 class="bundle-price" style="font-size: 45px; font-weight: 600; background-color: #00428C; color: white; text-align: left; padding: 5px 10px;"><span class="h2"><strong>Rp{{number_format($bundle->product->selling_price,0,',','.');}}</strong><span id="bundle-price"></span></h2>
              <div class="d-flex justify-content-start mt-3" style="font-size: 16px">
                <p class="fw-bold my-auto"><i class="fa fa-star text-warning"></i> 4.5</p>
                <p class="px-1 my-auto">|</p>
                <p class="bund-terjual my-auto">terjual <span>{{$bundle->product->sold}}</span></p>
              </div>
              <livewire:frontend.c-t-a.wishcart-bundling :product="$bundle->product">
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>


  {{-- Video menarik --}}
  <section class="reels my-3 d-flex py-3 pe-3">
    <div class="section-title position-relative ps-3 pe-5 py-5" style="width: 38%">

    </div>
    
    <div id="carocaro" class="owl-carousel owl-theme py-3">
      <div class="mx-2 reels-grow">
        <div class="video1" >
        
            <iframe width="270" height="481" style="border-radius: 5px;" src="https://www.youtube.com/embed/JpBvYhcHaK0?html5=1&enablejsapi=1" title="Tips menerima paket dari Indonesia yang dikirim oleh Master Bagasi✨🥰  #kirimpaketkeluarnegeri" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="mx-2 reels-grow">
        <div class=" video1">
          
          <iframe width="270" height="481"  style="border-radius: 5px;" src="https://www.youtube.com/embed/dWKPPHZwdcY?html5=1&enablejsapi=1" title="KEBANJIRAN BASO ACI SAMI RAOS❤️‍🔥 #kirimpaketkeluarnegeri #jasatitipindonesia #umkm #jastipmurah" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="mx-2 reels-grow">
        <div class=" video1">
           
          <iframe width="270" height="481" style="border-radius: 5px;" src="https://www.youtube.com/embed/mm8FQujQ1Ig?html5=1&enablejsapi=1" title="MAKAN 3 MIE SEDAP "TASTY" SEKALI MAKAN?!!!😱 PERUT SAMPE MAU MELEDAK!! #viralshorts #viral #shorts" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="mx-2 reels-grow">
        <div class=" video1">
          <iframe width="270" height="481" style="border-radius: 5px;" src="https://www.youtube.com/embed/Z8KFHkuH0_I?html5=1&enablejsapi=1" title="The one and only "Master Bagasi"😎 #kirimpaketkeluar negeri #virashorts  #jasatitip #jastipmurah" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          
        </div>
      </div>
    </div>
  </section>

  {{-- Kerajinan --}}
  <section class="test-dapur my-3 ps-4">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <p class="p-2 mb-0 text-black" style="font-size: 2.5rem;">{{$kerajinan->name}}</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="h-100 d-flex align-items-end pb-5">
            <a href="{{url('hastag/'.$kerajinan->slug)}}" class="btn btn-lihat mb-5 text-black-100">Lihat selengkapnya</a>
          </div>
        </div>
        <div class="col-md-9">
          <div class="w-100" style="height: 300px; background-color: #25258c"></div>
        </div>
      </div>
    </div>
  </section>

  {{-- kopi dan teh --}}
  <section class="viral-wrap3 my-3">
    <div class="bg-cat">
      <div class="row">
        <div class="col-md-8 col-8">
          <p class="px-4 mb-0 section-title">{{$kehangatan_hastag->hastag->hastag}} </p>
        </div>
        <div class="col-4 d-flex justify-content-end my-auto">
          <div class="p-2">
            <a class="btn btn-lihat" href="{{url('hastag/'.$kehangatan_hastag->hastag->slug)}}" style="text-decoration: none; color: black;">
              Lihat semua
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container mb-5">
      <div class="bks-cat">
        <div id="carou-cat5" class="hashtag owl-carousel owl-theme">
            @foreach ($kehangatan as $product)
            <a href="{{url('hastag/'.$product->hastag->slug.'/'.$product->product->slug)}}" style="text-decoration: none; color:black;">
              <div class="ms-2 me-2">
                <div class="d-flex flex-wrap gap-4">
                  <div class="card card-product mt-2">
                    @if ($product->product->ProductImages->isEmpty())
                    <img src="{{ asset('frontend/img/default_product.png') }}">
                    @else
                    <img src="{{ asset('image/uploads/products/'.$product->product->_ProductImages->image) }}">
                    @endif
                      <div class="card-body">
                        <div class="container">
                          <div class="row">
                            <div class="col">
                              <p class="product-name" >{{$product->product->name}}</p>
                            </div>
                          </div>
                          <div class="row d-flex justify-content-center align-items-center py-1">
                            <div class="col-8 d-flex justify-content-start">
                              <p class="price" >Rp{{number_format($product->product->selling_price,0,',','.');}}</p>
                            </div>
                            <div class="col ps-0">
                              <div class="d-flex justify-content-end">
                                <p>
                                  <strong>{{$product->product->weight}}</strong>  
                                  <span>Kg</span> 
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="row" >
                            <div class="col d-flex justify-content-start">
                              <div class="d-flex justify-content-center align-content-center">
                                <i class="bi bi-star-fill text-warning me-1"></i>
                                <p class="rating-text">4.5 |</p>
                              </div>
                              <div>
                                <p class="rating-text sold ms-2"> terjual {{$product->product->sold}}</p>
                              </div>  
                            </div>
                          </div>
                          <div class="row" >
                            <livewire:frontend.c-t-a.wish-cart :product="$product->product">

                          </div>
                        </div>
                      </div>
                
                    
                  </div>
                </div>
              </div>
             </a>
         @endforeach
        </div>
      </div>
    </div>
  </section>
  
  {{-- peta --}}
  <section class="categories my-4">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
        <h4>Keliling Daerah Nusantara</h4>
        </div>
      </div>
    </div>
    <livewire:frontend.popup.peta :maps="$maps">
  </section>
  
  {{-- berita --}}
  <section class="categories mt-5">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h4>Berita & Youtube</h4>
        </div>
      </div>
    </div>
    @include('home.news')
  </section>

  {{-- rekomendasi --}}
  <section class="viral-wrap2 mt-3">
    <div class="bg-cat">
      <div class="row">
        <div class="col-8 d-flex my-auto">
          <p class="px-4 mb-0 section-title">{{$rekomendasi_hastag->hastag->hastag}}</p>
        </div>
        <div class="col-4 d-flex justify-content-end my-auto">
          <div class="p-2">
            <a class="btn btn-lihat" href="{{url('hastag/'.$rekomendasi_hastag->hastag->slug)}}" style="text-decoration: none; color: black;">
              Lihat semua
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container mb-5">
      <div class="bks-cat">
        <div id="carou-cat4" class="hashtag owl-carousel owl-theme">
            @foreach ($rekomendasi as $product)
            <a href="{{url('hastag/'.$product->hastag->slug.'/'.$product->product->slug)}}" style="text-decoration: none; color:black;">
              <div class="ms-2 me-2">
                <div class="d-flex flex-wrap gap-4">
                  <div class="card card-product mt-2">
                    @if ($product->product->ProductImages->isEmpty())
                    <img src="{{ asset('frontend/img/default_product.png') }}">
                    @else
                    <img src="{{ asset('image/uploads/products/'.$product->product->_ProductImages->image) }}">
                    @endif
                      <div class="card-body">
                        <div class="container">
                          <div class="row">
                            <div class="col">
                              <p class="product-name">{{$product->product->name}}</p>
                            </div>
                          </div>
                          <div class="row d-flex justify-content-center align-items-center py-1">
                            <div class="col-8 d-flex justify-content-start">
                              <p class="price" >Rp{{number_format($product->product->selling_price,0,',','.');}}</p>
                            </div>
                            <div class="col ps-0">
                              <div class="d-flex justify-content-end">
                                <p>
                                  <strong>{{$product->product->weight}}</strong>  
                                  <span>Kg</span> 
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="row" >
                            <div class="col d-flex justify-content-start">
                              <div class="d-flex justify-content-center align-content-center">
                                <i class="bi bi-star-fill text-warning me-1"></i>
                                <p class="rating-text">4.5 |</p>
                              </div>
                              <div>
                                <p class="rating-text sold ms-2"> terjual {{$product->product->sold}}</p>
                              </div>  
                            </div>
                          </div>
                          <div class="row" >
                            <livewire:frontend.c-t-a.wish-cart :product="$product->product">

                          </div>
                        </div>
                      </div>
                
                    
                  </div>
                </div>
              </div>
             </a>
         @endforeach
        </div>
      </div>
    </div>
  </section>

  {{-- testimoni --}}
  <section id="slider" class="my-4">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h4>Ulasan Pengiriman</h4>
        </div>
      </div>
    </div>
    <div id="testi" class="testi owl-carousel owl-theme">
      <div class="item">
        <div class="card" style="width: 510px;">
          <div class="d-flex justify-content-between">
            <div class="card-poto">
              <div class="img-card d-flex">
                <img src="https://masterbagasi.online/frontend/img/testi/suban.jpg" alt="">
              </div>
            </div>
            <div class="card-bodi">
              <div class="bodi-wrap">
                <h4>Cepat banget sampainya!!</h4>
                <div class="testimonial mt-2 mb-2 d-flex">
                  <span>"</span>
                  <span>Jakarta Korea Selatan, awalnya luamayan deg degan, karna this is my first time experience sama Master Bagasi. Tapi ternyata cepat banget sampainyaa hihi <span>"</span></span>
                </div>
                <div class="testiName pt-4 d-flex justify-content-between">
                  <div class="d-flex">
                    <p>Muqodaz</p>
                    <span>-</span>
                    <a class="testi-negara">Korea Selatan</a>
                  </div>
                  <div>
                    <i class="fa fa-star text-warning"></i>
                    <span>4.5</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card" style="width: 510px;">
          <div class="d-flex justify-content-between">
            <div class="card-poto">
              <div class="img-card d-flex">
                <img src="https://masterbagasi.online/frontend/img/testi/suban.jpg" alt="">
              </div>
            </div>
            <div class="card-bodi">
              <div class="bodi-wrap">
                <h4>Cepat banget sampainya!!</h4>
                <div class="testimonial mt-2 mb-2 d-flex">
                  <span>"</span>
                  <span>Jakarta Korea Selatan, awalnya luamayan deg degan, karna this is my first time experience sama Master Bagasi. Tapi ternyata cepat banget sampainyaa hihi <span>"</span></span>
                </div>
                <div class="testiName pt-4 d-flex justify-content-between">
                  <div class="d-flex">
                    <p>Muqodaz</p>
                    <span>-</span>
                    <a class="testi-negara">Korea Selatan</a>
                  </div>
                  <div>
                    <i class="fa fa-star text-warning"></i>
                    <span>4.5</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card" style="width: 510px;">
          <div class="d-flex justify-content-between">
            <div class="card-poto">
              <div class="img-card d-flex">
                <img src="https://masterbagasi.online/frontend/img/testi/suban.jpg" alt="">
              </div>
            </div>
            <div class="card-bodi">
              <div class="bodi-wrap">
                <h4>Cepat banget sampainya!!</h4>
                <div class="testimonial mt-2 mb-2 d-flex">
                  <span>"</span>
                  <span>Jakarta Korea Selatan, awalnya luamayan deg degan, karna this is my first time experience sama Master Bagasi. Tapi ternyata cepat banget sampainyaa hihi <span>"</span></span>
                </div>
                <div class="testiName pt-4 d-flex justify-content-between">
                  <div class="d-flex">
                    <p>Muqodaz</p>
                    <span>-</span>
                    <a class="testi-negara">Korea Selatan</a>
                  </div>
                  <div>
                    <i class="fa fa-star text-warning"></i>
                    <span>4.5</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card" style="width: 510px;">
          <div class="d-flex justify-content-between">
            <div class="card-poto">
              <div class="img-card d-flex">
                <img src="https://masterbagasi.online/frontend/img/testi/suban.jpg" alt="">
              </div>
            </div>
            <div class="card-bodi">
              <div class="bodi-wrap">
                <h4>Cepat banget sampainya!!</h4>
                <div class="testimonial mt-2 mb-2 d-flex">
                  <span>"</span>
                  <span>Jakarta Korea Selatan, awalnya luamayan deg degan, karna this is my first time experience sama Master Bagasi. Tapi ternyata cepat banget sampainyaa hihi <span>"</span></span>
                </div>
                <div class="testiName pt-4 d-flex justify-content-between">
                  <div class="d-flex">
                    <p>Muqodaz</p>
                    <span>-</span>
                    <a class="testi-negara">Korea Selatan</a>
                  </div>
                  <div>
                    <i class="fa fa-star text-warning"></i>
                    <span>4.5</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@push('scripts')
  <script>
    $(document).ready(function(){
      if (!document.cookie.split('; ').find((row) => row.startsWith('doSomethingOnlyOnce'))) {
          document.cookie = "doSomethingOnlyOnce=true;";
          $('#splash-screen-home').modal('show');
      } else if(document.cookie.split('; ').find((row) => row.startsWith('doSomethingOnlyOnce'))) {
          const output = document.getElementById('splash-screen-home')
          // output.classList.remove('show')
          // output.style.display = 'none'
      }
      
    }); 
  </script>
@endpush