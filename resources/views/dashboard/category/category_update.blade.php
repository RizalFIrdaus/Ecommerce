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
            <p>Update Category</p>
          <a class="btn btn-lihat-sm" href="{{url('admin/category')}}">Back</a>
        </div>
    </div>
    <div class="card-body">
      <img src="{{asset('image/uploads/category/'.$category->image)}}" class="img-thumbnail mb-5" width="200px" alt="">

        <form class="row g-3" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-md-12">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}">
            </div> 
            <div class="col-md input-group">
                  <input type="file" class="form-control" id="image" name="image" >
                  <label class="input-group-text" for="image">Upload</label>
            </div>
            <div class="col-12 d-flex justify-content-end">
              <button type="submit" class="btn btn-lihat-sm">Update</button>
            </div>
          </form>
    </div>
  </div>
@endsection