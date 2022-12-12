@extends('layouts.adminpanel.admin')
@section('content')

@if (Session()->has('success'))
<div class="alert alert-success" role="alert">
 {{Session()->get('success')}}
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

<div class="card">
    <div class="card-header">
        <div class="d-flex flex-row justify-content-between">
            <p>ADD Cargo</p>
            <a class="btn btn-lihat-sm" href="{{url('admin/cargo')}}">Back</a>
        </div>
    </div>
    <div class="card-body">
        <form class="row g-3" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
              <label for="zona_id" class="form-label">Zona</label>
              <select class="form-select" aria-label="Default select example" name="zona_id">
                <option selected>Select Zona</option>
                @foreach ($zonas as $zona)
                  <option value="{{$zona->value}}">{{$zona->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-12">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" autocomplete="off">
            </div>
            <div class="col-md-12">
              <label for="min_weight" class="form-label">Min Weight</label>
              <input type="text" class="form-control" id="min_weight" name="min_weight">
            </div>
            <div class="col-md-12">
              <label for="max_weight" class="form-label">Max Weight</label>
              <input type="text" class="form-control" id="max_weight" name="max_weight">
            </div>
            <div class="col-md-12">
              <label for="price_bersama" class="form-label">Harga Bersama</label>
              <input type="number" class="form-control" id="price_bersama" name="price_bersama">
            </div>
            <div class="col-md-12">
              <label for="price" class="form-label">Harga Perorangan</label>
              <input type="number" class="form-control" id="price" name="price">
            </div>
            <div class="col-12 d-flex justify-content-end">
              <button type="submit" class="btn btn-lihat-sm">Add</button>
            </div>
          </form>
    </div>
  </div>
@endsection