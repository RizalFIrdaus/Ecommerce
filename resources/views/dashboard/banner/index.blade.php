@extends('layouts.adminpanel.admin')
@section('content')


@if(Session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ Session()->get('success') }}
</div>
@endif

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
{{--
<a href="{{ url('admin/banner/add') }}" class="btn btn-primary mb-4">Add Banner</a>

@if(count($banner) == 0)
<div class="alert alert-warning" role="alert">
    Data Banner belum tersedia
</div>
@else
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach($banner as $item)

        <tr>
            <td>{{ $loop->index+1 }}</td>
            <td>{{ $item->name }}</td>
            <td><img src="{{ asset('image/uploads/banner/'.$item->image) }}" class="img-thumbnail" width="200px" alt=""> </td>
            <td class="d-flex flex-row justify-content-around">
                <a class="btn btn-primary" href="{{ url("admin/banner/".$item->id."/edit") }}">Update</a>
                <form method="POST" action="{{ url("admin/banner/".$item->id."/delete") }}">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endif
--}}

<div class="nav-table-action d-flex align-content-center justify-content-between mt-5 mb-3">
    <div class="">
        <a href="{{ url('admin/banner/add') }}" class="btn btn-lihat-sm">Add Banner</a>
    </div>
    <form class="row g-3" method="get">
        <div class="col-auto d-flex align-items-center">
            <a href="{{URL::current()}}" class="me-4"><i class="fa-sharp fa-solid fa-rotate-left"></i></a>
            <input type="text" class="form-control" id="search" autocomplete="off" name="search" placeholder="Search Banner">
        </div>
    </form>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-mb">Banners Table</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($banner as $index => $item)
                    <tr>
                        <td>{{ $index + $banner->firstItem() }}</td>
                        <td>{{ $item->name }}</td>
                        <td><img src="{{ asset('image/uploads/banner/'.$item->image) }}" class="img-thumbnail" width="200px" alt=""> </td>
                        <td class="d-flex flex-row justify-content-around">
                            <a class="btn btn-edit-sm" href="{{ url("admin/banner/".$item->id."/edit") }}">Update</a>
                            <form method="POST" action="{{ url("admin/banner/".$item->id."/delete") }}">
                                @csrf
                                @method('delete')
                                <button class="btn btn-delete-sm" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-center mx-4">
        {{ $banner->links('vendor.pagination.bootstrap-5')}}
    </div>
</div>


@endsection