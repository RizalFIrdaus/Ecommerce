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
            <p>Update Map</p>
          <a class="btn btn-lihat-sm" href="{{url('admin/map')}}">Back</a>
        </div>
    </div>
    <div class="card-body">
      <img src="{{asset('image/uploads/provinces/'.$province->image)}}" class="img-thumbnail mb-5" zalt="Aceh" width="400px"/>

        <form class="row g-3" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-md-12">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title" autocomplete="off" value="{{$province->title}}">
            </div>
            <div class="col-md-12">
              <label for="vector" class="form-label">Vector</label>
              <textarea class="form-control" id="vector" rows="3" name="vector" >{{$province->vector}}</textarea>
            </div>
            <div class="col-md input-group">
              <input type="file" class="form-control" id="image" name="image">
              <label class="input-group-text" for="image">Upload</label>
            </div>
            <div class="col-12 d-flex justify-content-end">
              <button type="submit" class="btn btn-lihat-sm">Update</button>
            </div>
          </form>
    </div>
  </div>
@endsection