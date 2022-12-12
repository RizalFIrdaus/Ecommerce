@extends('layouts.adminpanel.admin')
@section('content')


@if($errors->any())
    <div class="alert alert-danger">
        <div>
            <p>Something wrong...</p>
        </div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="card">
    <div class="card-header ">
        <div class="d-flex flex-row justify-content-between items-center">
            <p>Update Video</p>
            <a class="btn btn-lihat-sm" href="{{ url('admin/videos') }}">Back</a>
        </div>
    </div>
    <div class="card-body">
        <video id="my-video" class="video-js mb-5" autoplay loop preload="auto" width="640" height="264"
            poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
            <source src="{{ asset('video/uploads/home/'.$homevideo->video) }}"
                type="video/mp4" />
        </video>

        <form class="row g-3" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-md input-group">

                <input type="file" class="form-control" id="video" name="video">
                <label class="input-group-text" for="video">Upload</label>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-lihat-sm">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection