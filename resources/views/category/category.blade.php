@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row pt-4">
            <div class="col-md-12" >
                <div class="jumbotron" style="background-color: #ff4200">
                    <div class="d-flex justify-content-start align-items-end h-100 ps-3 pb-4" style="min-height: 337px;">
                        <h1 class="text-white">{{ $categories->name }}</h1>
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
                                    <li class="item-link"><span style="font-size: 16px">{{ $categories->name }}</span></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <livewire:frontend.category.view :products="$products" :categories="$categories"/>
    </div>
</div>

@endsection
