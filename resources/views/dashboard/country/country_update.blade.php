@extends('layouts.adminpanel.admin')
@section('content')


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
    <div class="card-header ">
        <div class="d-flex flex-row justify-content-between items-center">
            <p>Update Country</p>
          <a class="btn btn-lihat-sm" href="{{url('admin/country')}}">Back</a>
        </div>
    </div>
    <div class="card-body">
        <form class="row g-3" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-md-12">
              <label for="zona_id" class="form-label">Zona</label>
              <select class="form-select" aria-label="Default select example" name="zona_id">
                <option selected>Select Zona</option>
                @foreach ($zonas as $zona)
                  <option value="{{$zona->id}}" {{$zona->id == $country->zona_id ? 'selected':''}}>{{$zona->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-12">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{$country->name}}">
            </div>
            <div class="col-md-12">
              <label for="code" class="form-label">Code</label>
              <input type="text" class="form-control" id="code" name="code" value="{{$country->code}}">
            </div>
            <div class="col-12 d-flex justify-content-end">
              <button type="submit" class="btn btn-lihat-sm">Update</button>
            </div>
          </form>
    </div>
  </div>
@endsection