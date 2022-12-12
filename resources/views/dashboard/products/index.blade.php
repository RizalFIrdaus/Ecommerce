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
        <a href="{{ url('admin/products/add') }}" class="btn btn-lihat-sm mb-4">Add Product</a>
        <form method="post" enctype="multipart/form-data" action="{{route('excel.import')}}">
            @csrf
            <input type="file" name="excel">
            <button type="submit" class="btn btn-success">Import Excel</button>
        </form>
    </div>
    <form class="row g-3" method="get">
        <div class="col-auto d-flex align-items-center">
            <a href="{{URL::current()}}" class="me-4"><i class="fa-sharp fa-solid fa-rotate-left"></i></a>
            <input type="text" class="form-control" id="search" autocomplete="off" name="search"
                placeholder="Search Product">
        </div>
    </form>
</div>
<!-- DataTales Example -->
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
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Weight</th>
                        <th scope="col">Selling Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Trending</th>
                        <th scope="col">Status</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Name</th>
                      <th scope="col">Category</th>
                      <th scope="col">Slug</th>
                      <th scope="col">Brand</th>
                      <th scope="col">Weight</th>
                      <th scope="col">Selling Price</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Trending</th>
                      <th scope="col">Status</th>
                      <th scope="col" class="text-center">Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($product as $index => $item)
                        <tr>
                            <td>{{$index + $product->firstItem()}}</td>
                            <td>{{ $item->name }}</td>
                            @if($item->category)
                                <td>{{ $item->category->name }}</td>
                            @else
                                <td>No Category</td>
                            @endif
                            <td>{{ $item->slug }}</td>
                            <td>{{ $item->brand }}</td>
                            <td>{{ $item->weight }}</td>
                            <td>{{ $item->selling_price }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->trending == 1 ? 'Trending' : 'Not Tranding' }}
                            </td>
                            <td>{{ $item->status == 1 ? 'Visible' :'Hidden' }}
                            </td>
                            <td class="d-flex flex-row justify-content-around">
                                <a class="btn btn-edit-sm"
                                    href="{{ url("admin/products/".$item->id."/edit") }}">Edit</a>
                                <a class="btn btn-delete-sm"
                                    href="{{ url("admin/products/product/".$item->id."/delete") }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-center mx-4">
      {{-- {{ $product->links() }} --}}
      {{ $product->links('vendor.pagination.bootstrap-5')}}
    </div>
</div>



@endsection