<div wire:ignore.self class="modal fade" id="cektarif" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Lihat opsi dan tarif pengiriman kami</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row mt-4 ps-3 pe-3">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="d-flex justify-content-between cektarif-dd">
                      <select class="form-select select2" aria-label="Default select example" wire:model='country'>
                          <option selected value="{{null}}">Pilih Negara Tujuan</option>
                          @foreach ($countries as $country)
                          <option value="{{$country->id}}">{{$country->name}}</option>
                          @endforeach
                      </select>
                        <button class="btn btn-primary btn-sm" wire:click.prevent='cekHarga'><span>Cek Tarif</span></button>
                    </div>
                </div>
                <div class="d-flex justify-content-between cektarif-rate mt-3">
                  <div class="w-100">
                    <div class="tarif-rate d-flex my-auto">
                      <p class="fw-bold my-auto"><i class="fa fa-star text-warning"></i> 4.5</p>
                      <p class="px-1 my-auto">|</p>
                      <p class="tarif-terjual my-auto">terkirim <span>1260</span></p>
                    </div>
                  </div>
                  <a href="{{url('/ulasan-pengiriman')}}" class="btn btn-oren" style="min-width: 271px;" >Ulasan Pengiriman</a>
                </div>
              </div>
            </div>
            <div id="pop-banjang" class="container pop-banjang" style="color: #fff">
              <div class="row mt-3 pb-3">
                <div class="col-md">
                  <div class="card text-center" style="background-color: #d9d9d9" >
                    <div class="card-header">Air Freight/Kg</div>
                  </div>
                </div>
              </div>
              <div class="row d-flex flex-row justify-content-center px-3">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th colspan="3" style="border-right: 1px solid black">Kiloan</th>
                        <th scope="col" style="border-right: 1px solid black">Perorangan</th>
                        <th scope="col">Bersama</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if ($this->country)
                        @foreach ($cargo as $item)
                        <tr>
                            <td>
                              {{number_format($item->min_weight ,0,'.')}} Kg
                            </td>
                            <td>
                              <i class="fa-solid fa-minus"></i>
                            </td>
                            <td>
                              {{number_format($item->max_weight ,1,'.')}} Kg
                            </td>
                            <td>Rp{{number_format($item->price ,0,',','.')}}</td>
                            <td>Rp{{number_format($item->price_bersama  ,0,',','.')}}</td>
                        </tr>
                        @endforeach
                        
                        @else
                            <tr>
                                <td></td>
                            </tr>
                        @endif
                        
                    </tbody>
                  </table>
              </div>
    
            </div>
          </div>
    
        </div>
      </div>
    </div>
  </div>
