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

<div class="nav-table-action d-flex align-content-center justify-content-between mt-5 mb-3">
    <div class="">
        <a href="{{ url('admin/brands/add') }}" class="btn btn-lihat-sm mb-4">Add Brand</a>
        <form method="post" enctype="multipart/form-data" action="{{url('admin/importBrand')}}">
            @csrf
            <input type="file" name="excel_brand">
            <button type="submit" class="btn btn-success">Import Excel</button>
        </form>
    </div>
    <form class="row g-3" method="get">
        <div class="col-auto d-flex align-items-center">
            <a href="{{URL::current()}}" class="me-4"><i class="fa-sharp fa-solid fa-rotate-left"></i></a>
            <input type="text" class="form-control" id="search" autocomplete="off" name="search" placeholder="Search Product">
        </div>
    </form>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-mb">Product Table</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Category</th>
                        <th scope="col">Name</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Image</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Category</th>
                        <th scope="col">Name</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Image</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($brands as $index => $item)

                    <tr>
                        <td>{{$index + $brands->firstItem()}}</td>
                        <td>{{ $item->category->name }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->slug }}</td>
                        <td><img src="{{ asset('image/uploads/brands/'.$item->image) }}" class="img-thumbnail" width="200px" alt=""> </td>
                        <td class="d-flex flex-row justify-content-around">
                            <a class="btn btn-edit-sm" href="{{ url("admin/brands/".$item->id."/edit") }}">Update</a>
                            <form method="POST" action="{{ url("admin/brands/brand/".$item->id."/delete") }}">
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
        {{ $brands->links('vendor.pagination.bootstrap-5')}}
    </div>
</div>



{{-- @if(count($brands) == 0)
    <div class="alert alert-warning" role="alert">
        Data category belum tersedia
    </div>
@else
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Category</th>
                <th scope="col">Name</th>
                <th scope="col">Slug</th>
                <th scope="col">Image</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach($brands as $item)

                <tr>
                    <td>{{ $loop->index+1 }}</td>
<td>{{ $item->category->name }}</td>
<td>{{ $item->name }}</td>
<td>{{ $item->slug }}</td>
<td><img src="{{ asset('image/uploads/brands/'.$item->image) }}" class="img-thumbnail" width="200px" alt=""> </td>
<td class="d-flex flex-row justify-content-center">
    <a class="btn btn-primary" href="{{ url("admin/brands/".$item->id."/edit") }}">Update</a>
    <form method="POST" action="{{ url("admin/brands/brand/".$item->id."/delete") }}">
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

        {{ $brands->links() }}
    </div>
</div> --}}


@endsection