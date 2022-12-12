{{-- @extends('layouts.app')
@section('content')
<div class="jumbotron" style="height: 300px; padding-top: 100px;">
    <div class="container">
        <div class="row" style="height: 200px">
            <div class="col-md-3">
                <div style="min-height: 200px; background-color: #ff4200"></div>
            </div>
            <div class="col-md-9">
                <div class="jumbotron" style="min-height: 200px; background-color: #ff4200">
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="text-white">
                                <h1 class="mb-3">{{ $viral->name }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<livewire:frontend.hastag.collection-hastag :products="$products" :viral="$viral" :categories="$categories" />

@endsection --}}




@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row pt-4">
            <div class="col-md-12" >
                <div class="jumbotron" style=" background-color: #ff4200">
                    <div class="d-flex justify-content-start align-items-end h-100 ps-3 pb-4" style="min-height: 337px;">
                        <h1 class="text-white">{{ $viral->name }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md d-flex justify-content-center">
                <div class="card w-100">
                    <ul class="list-group list-group-flush shadow">
                        <li class="list-group-item">
                            <div class="wrap-breadcrumb pb-2">
                                <ul>
                                    <li class="item-link"><a href="{{ url('/') }}" class="link" style="font-size: 16px">Home</a>
                                    </li>
                                    <li class="item-link"><span style="font-size: 16px">{{ $viral->name }}</span></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    {{-- Livewire --}}
    <livewire:frontend.hastag.collection-hastag :products="$products" :viral="$viral" :categories="$categories" />
    </div>

@endsection
@section('script')
<script>
    $(document).on('contentChanged', function(e) {
        $(".show-more-link").parent().toggleClass('list--show-hidden list--show-all');
        $(".show-more-link").text("Tampilkan lebih banyak..." ? "Tampilkan lebih sedikit..." : "Tampilkan lebih banyak...");
    })
</script>
@endsection
