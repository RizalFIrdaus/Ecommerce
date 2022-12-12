@extends('layouts.app')
@section('content')


<div class="py-3 py-md-5">
    <p class="product-path">
        Home / Category / Product 
    </p>
    <div class="row">
        <div class="col-md-3 mt-3">
            <div class="bg-white">
                <img src="{{ asset('frontend/img/produk/boci.png') }}" class="w-100" alt="Img" id="mainImgProd">
                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="{{ asset('frontend/img/produk/energen.png') }}" alt="" class="small-img" width="100%">
                    </div>
                    <div class="small-img-col">
                        <img src="{{ asset('frontend/img/produk/kayuputih.png') }}" alt="" class="small-img" width="100%">
                    </div>
                    <div class="small-img-col">
                        <img src="{{ asset('frontend/img/produk/kyl food.png') }}" alt="" class="small-img" width="100%">
                    </div>
                    <div class="small-img-col">
                        <img src="{{ asset('frontend/img/produk/sidomuncul.png') }}" alt="" class="small-img" width="100%">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-3">
            <div class="product-view">
                <h4 class="product-view-name">
                    Gudeg Mercon Bu Narti Telor Ayam Suwir
                    <label class="label-stock bg-success">In Stock</label>
                </h4>
                <hr>

                <div>
                    <span class="selling-price">Rp 113.000</span>
                    <span class="original-price">Rp 169.000</span>
                </div>

                <div class="mt-3">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Description</h5>
                        </div>
                        <div class="card-body">
                            <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ty
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header bg-white">
                            <h4>Reviews</h4>
                        </div>
                        <div class="card-body">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 p-3 border dp-action">
            <h4 class="fw-bold">Atur jumlah</h3>
            <div class="mt-2">
                <div class="input-group">
                    <span class="btn btn1"><i class="fa fa-minus"></i></span>
                    <input type="text" value="1" class="input-quantity" />
                    <span class="btn btn1"><i class="fa fa-plus"></i></span>
                </div>
            </div>
            <div class="mt-5">
                <a href="" class="btn btn1 btn-action"> <i class="fa fa-shopping-cart"></i> Add To Cart</a>
                <a href="" class="btn btn1 btn-action"> <i class="fa fa-heart"></i> Add To Wishlist </a>
            </div>
        </div>
    </div>
</div>
@endsection

