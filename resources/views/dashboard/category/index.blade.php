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

{{-- <a href="{{ url('admin/category/add') }}" class="btn btn-primary mb-4">Add Category</a>

<form class="row g-3 my-4" method="get">
    <div class="col-auto">
        <input type="text" class="form-control py-4" id="search" autocomplete="off" name="search" placeholder="Search Category...">
    </div>
</form>

@if(count($count) == 0)
<div class="alert alert-warning" role="alert">
    Data category belum tersedia
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

        @foreach($category as $item)

        <tr>
            <td>{{ $loop->index+1 }}</td>
            <td>{{ $item->name }}</td>
            <td><img src="{{ asset('image/uploads/category/'.$item->image) }}" class="img-thumbnail" width="200px" alt=""> </td>
            <td class="d-flex flex-row justify-content-center">
                <a class="btn btn-primary" href="{{ url("admin/category/".$item->id."/edit") }}">Update</a>
                <form method="POST" action="{{ url("admin/category/".$item->id) }}">
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
<div class="d-flex">
    <div class="mx-auto my-4">

        {{ $category->links() }}
    </div>
</div> --}}

<div class="nav-table-action d-flex align-content-center justify-content-between mt-5 mb-3">
    <div class="">
        <a href="{{ url('admin/category/add') }}" class="btn btn-lihat-sm">Add Category</a>
    </div>
    <form class="row g-3" method="get">
        <div class="col-auto d-flex align-items-center">
            <a href="{{URL::current()}}" class="me-4"><i class="fa-sharp fa-solid fa-rotate-left"></i></a>
            <input type="text" class="form-control" id="search" autocomplete="off" name="search" placeholder="Search Category">
        </div>
    </form>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-mb">Category Table</h6>
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
                    @foreach($category as $index => $item)

                    <tr>
                        <td>{{$index + $category->firstItem()}}</td>
                        <td>{{ $item->name }}</td>
                        <td><img src="{{ asset('image/uploads/category/'.$item->image) }}" class="img-thumbnail" width="200px" alt=""> </td>
                        <td class="d-flex flex-row justify-content-around">
                            <a class="btn btn-edit-sm" href="{{ url("admin/category/".$item->id."/edit") }}">Update</a>
                            <form method="POST" action="{{ url("admin/category/".$item->id) }}">
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
        {{ $category->links('vendor.pagination.bootstrap-5')}}
    </div>
</div>

@endsection