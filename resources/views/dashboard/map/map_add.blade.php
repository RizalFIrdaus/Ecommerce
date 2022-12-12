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
            <p>ADD Map</p>
            <a class="btn btn-lihat-sm" href="{{url('admin/map')}}">Back</a>
        </div>
    </div>
    <div class="card-body">
        <form class="row g-3" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title" autocomplete="off">
            </div>
            <div class="col-md-12">
              <label for="vector" class="form-label">Vector</label>
              <textarea class="form-control" id="vector" rows="3" name="vector"></textarea>
            </div>
            <div class="col-md input-group">
              <input type="file" class="form-control" id="image" name="image">
              <label class="input-group-text" for="image">Upload</label>
            </div>
            <div class="col-12 d-flex justify-content-end">
              <button type="submit" class="btn btn-lihat-sm">Add</button>
            </div>
          </form>
    </div>
  </div>
@endsection