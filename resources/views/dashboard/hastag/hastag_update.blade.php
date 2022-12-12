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
            <p>Update Hastag</p>
          <a class="btn btn-lihat-sm" href="{{url('admin/hastags')}}">Back</a>
        </div>
    </div>
    <div class="card-body">
        <form class="row g-3" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-md-12">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{$hastag->name}}">
            </div>
            <div class="col-md-12">
              <label for="hastag" class="form-label">Hastag</label>
              <input type="text" class="form-control" id="hastag" name="hastag" value="{{$hastag->hastag}}">
            </div>
            <div class="col-md-12">
              <div class="form-check">
                <input class="form-check-input position-static" type="checkbox" id="status" name="status"
                      value="option1" aria-label="..."  {{$hastag->status ? 'checked':''}}>
                  <label for="status" class="form-label">Status</label>
              </div>
            </div>
            <div class="col-12 d-flex justify-content-end">
              <button type="submit" class="btn btn-lihat-sm">Update</button>
            </div>
          </form>
    </div>
  </div>
@endsection