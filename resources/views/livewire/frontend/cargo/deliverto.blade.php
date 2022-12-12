
<!-- Modal Deliver To -->
<div wire:ignore.self class="modal fade" id="deliverto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header" style="background-color: #25258C">
            <h3 class="mb-0 text-white">Daftar Alamat Pengiriman</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style=" background-color:#fff;color:#fff"></button>
        </div>
        <div class="modal-body">
            <div class="container">
                <div class="row d-flex flex-row justify-content-center align-items-center mx-4 my-4">
                    <div class="col">
                        <div class="popup-bagas"></div>
                    </div>
                    <div class="col">
                        <div class="popup-mastah"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <select class="form-select" aria-label="Default select example" wire:model='country'>
                        <option selected value={{ null }} >Pilih Negara Tujuan</option>
                        @foreach ($countries as $country)
                             <option value="{{$country->id}}">{{$country->name}}</option>
                        @endforeach
                      </select>
                      <div class="d-flex justify-content-end mt-2">
                        <button class="btn btn-primary btn-sm" wire:click.prevent='cekNegara'>Tambah Alamat</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary btn-sm" wire:click.prevent='deliverto'>Selesai</button>
        </div>
    </div>
    </div>
</div>