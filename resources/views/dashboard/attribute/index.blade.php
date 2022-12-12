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
        <a href="{{ url('admin/attribute/add') }}" class="btn btn-lihat-sm">Add Attribute</a>
    </div>
    <form class="row g-3" method="get">
        <div class="col-auto d-flex align-items-center">
            <a href="{{URL::current()}}" class="me-4"><i class="fa-sharp fa-solid fa-rotate-left"></i></a>
            <input type="text" class="form-control" id="search" autocomplete="off" name="search" placeholder="Search Attribute">
        </div>
    </form>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-mb">Attribute Table</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col" style="width:5%">No</th>
                        <th scope="col">Name</th>
                        <th scope="col" class="text-center" style="width:15%">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="col" style="width:5%">No</th>
                        <th scope="col">Name</th>
                        <th scope="col" class="text-center" style="width:15%">Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($attributes as $index => $attribute)
                    <tr>
                        <td>{{ $index + $attributes->firstItem() }}</td>
                        <td>{{ $attribute->attribute_name }}</td>
                        <td class="d-flex flex-row justify-content-around">
                            <a class="btn btn-edit-sm btn-sm" href="{{ url("admin/attribute/".$attribute->id."/edit") }}">Update</a>
                            <form method="POST" action="{{ url("admin/attribute/".$attribute->id."/delete") }}">
                                @csrf
                                @method('delete')
                                <button class="btn btn-delete-sm btn-sm" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-center mx-4">
        {{ $attributes->links('vendor.pagination.bootstrap-5')}}
    </div>
</div>


@endsection