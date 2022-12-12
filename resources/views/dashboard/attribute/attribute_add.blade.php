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
            <p>ADD Attribute</p>
            <a class="btn btn-lihat-sm" href="{{url('admin/attribute')}}">Back</a>
        </div>
    </div>
    <div class="card-body">
        <form class="row g-3" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
              <label for="attribute_name" class="form-label">Attribute Product Name</label>
              <input type="text" class="form-control" id="attribute_name" name="attribute_name" autocomplete="off">
            </div>
            <div class="col-12 d-flex justify-content-end">
              <button type="submit" class="btn btn-lihat-sm">Add</button>
            </div>
          </form>
    </div>
  </div>
@endsection