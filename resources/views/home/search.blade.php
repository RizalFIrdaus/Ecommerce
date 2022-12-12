@extends('layouts.app')
@section('content')
<div class="container">
    <livewire:frontend.search.collection :categories="$categories" :productsearch="$product_search" >
</div>
@endsection