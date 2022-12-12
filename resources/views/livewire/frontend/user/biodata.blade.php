<div class="row">
    <div class="col-md-4 border-right">
        <div class="d-flex flex-column align-items-center text-center p-3 py-1">
            <div class="row mt-5">
                <div class="card" style="border-radius: 10px">
                    <img class="card-image-top p-3" width="350px" src="{{ asset(Auth::user()->avatar) }}">
                    <div class="card-body">
                        <div class="col-md-12">
                            <form wire:submit.prevent='updateImage'>
                                <input type="file" class="form-control" wire:model="avatar">
                                <button type="submit" class="btn btn-primary btn-sm mt-4 w-100">Upload</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="mt-3 d-flex justify-content-center">
                    <div class="btn fw-bold"
                        style="font-size: 14px; width: 100%; border: 1px solid #ccc; border-radius: 8px" data-bs-toggle="modal" data-bs-target="#password" >Ubah Sata Sandi
                    </div>
                       <!-- Password -->
                <div wire:ignore class="modal fade" id="password" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Kata Sandi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form wire:submit.prevent='updatePassword'>
                                <div class="form-floating mb-3">
                                    <input type="password" wire:model="password" class="form-control" >
                                    <label for="password" >Password</label>
                                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                                  </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                {{-- <div class="mt-3 d-flex justify-content-center" style="padding-right: 10px !important;">
                    <div class="btn fw-bold"
                        style="position: relative; font-size: 14px; width: 100%; border: 1px solid #ccc; border-radius: 8px">
                        <span class="btn-icon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        Pin Master Bagasi
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="col-md">
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <h4 class="fw-bold">Ubah Biodata</h4>
                </div>
            </div>
            <div class="row mt-4" wire:ignore.self >
                <div class="col-3 ">
                    <p class="fw-bold" style="font-size: 16px;">Nama</p>
                </div>
                <div class="col">
                    <p style="font-size: 16px;" class="text-sm">{{ Auth::user()->name }} <span type="button" data-bs-toggle="modal" data-bs-target="#nama" class="btn" style=" color:#ff4200 ">Ubah</span></p>
                </div>
                  <!-- Nama -->
                <div wire:ignore class="modal fade" id="nama" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Nama</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form wire:submit.prevent='updateName'>
                                <div class="form-floating mb-3">
                                    <input type="text" wire:model="name" class="form-control" id="nama" placeholder="Nama kamu">
                                    <label for="nama" >Nama</label>
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                  </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row"  >
                <div class="col-3 ">
                    <p class="fw-bold text-sm" style="font-size: 16px;">Tanggal Lahir </p>
                </div>
                <div class="col" wire:ignore.self>
                    <p class="text-sm " style="font-size: 16px;">
                        {{ Auth::user()->place_birth }} , {{ date('d M Y', strtotime(Auth::user()->birthday)) }} <span class="btn"
                            style=" color:#ff4200 " data-bs-toggle="modal" data-bs-target="#tanggal">Ubah</span></p>
                    <!-- Tanggal Lahir -->
                    <div wire:ignore class="modal fade" id="tanggal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Tanggal Lahir</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form wire:submit.prevent='updateBirthday'>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="tanggal_lahir" placeholder="Contoh : Depok" wire:model="place_birth">
                                        <label for="tanggal_lahir">Tempat Tanggal Lahir</label>
                                      </div>
                                    @error('place_birth') <span class="text-danger">{{ $message }}</span> @enderror

                                    <div class="mb-3">
                                        <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control" wire:model="birthday" >
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row" >
                <div class="col-3 ">
                    <p class="fw-bold text-sm" style="font-size: 16px;">Jenis Kelamin</p>
                </div>
                <div class="col" wire:ignore>
                    <p data-bs-toggle="modal" data-bs-target="#gender" class="text-sm " style="font-size: 16px;">{{ Auth::user()->gender }} <span class="btn"
                            style=" color:#ff4200 ">Ubah</span></p>
                <!-- Tanggal Lahir -->
                    <div wire:ignore.self class="modal fade" id="gender" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div wire:ignore class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Jenis Kelamin</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form wire:submit.prevent='updateGender'>
                                        <select class="form-select" aria-label="Default select example" wire:model="gender">
                                            <option selected>Pilih Jenis Kelamin</option>
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>
                                        </select>
                                        @error('gender') <span class="text-danger">{{ $message }}</span> @enderror
                                    <div class="d-flex justify-content-end mt-4">
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4 class="fw-bold">Ubah Kontak</h4>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-3 ">
                    <p class="fw-bold" style="font-size: 16px;">Email</p>
                </div>
                <div class="col" wire:ignore.self>
                    <p style="font-size: 16px;" class="text-sm">{{ Auth::user()->email }} <span class="btn"
                            style=" color:#ff4200 " data-bs-toggle="modal" data-bs-target="#email">Ubah</span></p>
                            <div wire:ignore class="modal fade" id="email" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Email</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form wire:submit.prevent='updateEmail'>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="email" placeholder="Contoh :  masterbagasi@gmail.com" wire:model="email">
                                                <label for="email">Email</label>
                                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror

                                            </div>
                                            <div class="d-flex justify-content-end mt-4">
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3 ">
                    <p class="fw-bold text-sm" style="font-size: 16px;">Nomor HP</p>
                </div>
                <div class="col">
                    <p class="text-sm " style="font-size: 16px;">
                        {{ Auth::user()->handphone }} <span data-bs-toggle="modal" data-bs-target="#handphone" class="btn"
                            style=" color:#ff4200 ">Ubah</span></p>
                            <div wire:ignore class="modal fade" id="handphone" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Nomor Telepon</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form wire:submit.prevent='updateHandphone'>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="handphone" placeholder="Contoh : 082111292382" wire:model="handphone">
                                                <label for="handphone">Ganti Nomor Handphone</label>
                                                @error('handphone') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="d-flex justify-content-end mt-4">
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('script')
    <script>
        window.addEventListener('close-model', e =>{
            $('#name').modal('hide');
            $('#birthday').modal('hide');
            $('#gender').modal('hide');
            $('#email').modal('hide');
            $('#handphone').modal('hide');
            $('#password').modal('hide');
        })
    </script>
@endsection