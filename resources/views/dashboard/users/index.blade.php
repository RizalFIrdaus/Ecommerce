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
    <form class="row g-3" method="get">
        <div class="col-auto d-flex align-items-center">
            <a href="{{URL::current()}}" class="me-4"><i class="fa-sharp fa-solid fa-rotate-left"></i></a>
            <input type="text" class="form-control" id="search" autocomplete="off" name="search"
                placeholder="Search Users">
        </div>
    </form>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-mb">Users Table</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nama Tempat</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tempat & Tanggal Lahir</th>
                        <th scope="col">Nomor Telepon</th>
                        <th scope="col">Pengiriman</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nama Tempat</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tempat & Tanggal Lahir</th>
                        <th scope="col">Nomor Telepon</th>
                        <th scope="col">Pengiriman</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($users as $index => $user)
                        <tr>
                            <td>{{ $index + $users->firstItem() }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->addresses->name_place ?? null}}</td>
                            <td>{{ $user->addresses->address ?? null}}</td>
                            <td>{{ $user->gender }}</td>
                            <td>{{ $user->place_birth}}, {{date('d M Y', strtotime($user->birthday))}}</td>
                            <td>{{ $user->addresses->number_phone ?? null}}</td>
                            <td>{{ $user->country->name ?? null}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-center mx-4">
        {{ $users->links('vendor.pagination.bootstrap-5')}}
    </div>
</div>


@endsection