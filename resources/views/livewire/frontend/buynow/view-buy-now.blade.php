<div class="pt-5 mt-5 container checkoutnew">
    <div class="row">
        <div class="col-md-8">
            <h2 class="fw-bold">Beli Langsung</h2>
            <div class="alamat-pengiriman mt-3 py-3">
                <h5 class="fw-bold">Alamat Pengiriman</h5>
                <hr>
                <h5 class="fw-bold">Freddy <span class="fw-normal"> (Official Address) </span> <span class="fw-normal badge wis-btn">Utama</span></h5>
                <h6>081513191399</h6>
                <h6 class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam, cumque nulla vel explicabo itaque ipsam eaque animi, at quod saepe hic, corporis assumenda maxime dolore natus eum deleniti odio exercitationem!</h6>
                <hr>
                <div class="action-alamat d-flex gap-4">
                    <div class="btn btn-checkout-alamat">Pilih Alamat Lain</div>
                    <div class="btn btn-checkout-alamat">Kirim Ke Beberapa Alamat</div>
                </div>
            </div>
            <div class="checkout-items d-flex flex-column gap-1 py-5">
                <div class="info-toko">
                    <div class="d-flex gap-2">
                        <img src="{{ asset('image/uploads/products/2022111208283.jpg') }}" alt="tes" class="checkout-img-toko">
                        <h5 class="fw-bold">Bryan Toys Shop</h5>
                    </div>
                    <h6 class="text-muted mt-3">Kota Surabaya</h6>
                </div>
                <div class="checkout-item mt-5">
                    <div class="d-flex gap-3">
                        @if ($product->product->ProductImages->isEmpty())
                        <img src="{{ asset('frontend/img/default_product.png')  }}" alt="tes" class="checkout-img-product">
                        @else
                        <img src="{{ asset('image/uploads/products/'.$product->product->_ProductImages->image) }}" alt="tes" class="checkout-img-product">
                        @endif
                        <div>
                            <h5>{{$product->product->name}}</h5>
                            <h6>{{$product->quantity}} barang ({{$product->product->weight}}) Kg</h6>
                            <h5 class="fw-bold">Rp{{number_format($product->product->selling_price,0,',','.')}}</h5>
                        </div>
                    </div>
                    <div class="ganti-rugi d-flex align-items-center gap-3 mt-3">
                        <input type="checkbox" name="check-ganti">
                        <div>
                            <h6>Rusak total selama dipakai? Bisa ganti rugi!</h6>
                            <p class="text-muted">Proses claim mudah dan instan, berlaku 3 bulan</p>
                        </div>
                        <div>
                            <h6 class="fw-bold">Rp 27.500</h6>
                            <p class="text-muted">per barang</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mt-5">
            <div class="px-3 py-2 " id="checkoutFixed">
                <div class="shadow bg-body rounded p-3">
                    {{-- <div class="border border-3 d-flex gap-4 p-2">
                        <img src="test" alt="test">
                        <h6 class="fw-bold">Makin hemat pakai promo</h6>
                        <div class="text-muted">></div>
                    </div> --}}
                    <button type="button" class="border border-3 d-flex justify-content-between gap-4 py-3 px-5" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" style="background-color: transparent; width: 100%; border-color:#505050 !important;">
                        <i class="fa-solid fa-percent my-auto rounded-circle p-1"></i>
                        <h6 class="fw-bold my-auto">Makin hemat pakai promo</h6>
                        <i class="fa-solid fa-angle-right my-auto"></i>
                    </button>

                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h4 class="ms-2 fw-bold" style="color: #ff4200">Pakai Promo</h4>
                                    <form action="">
                                        <input type="text" class="mt-2 p-3 form-control" placeholder="Masukkan kode promo">
                                        <input type="submit" hidden />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shadow bg-body rounded p-3 mt-2">
                    <h6 class="fw-bold">Ringkasan belanja</h6>
                    <div class="d-flex justify-content-between mt-3">
                        <h6>Total harga 1 Produk</h6>
                        <h6>Rp.{{ number_format($this->totalCartAmount,2,',','.') }}</h6>
                    </div>
                    <hr>
                    <h6 class="fw-bold">Total tagihan</h6>
                    <div wire:ignore class=" w-100 btn btn-checkout-pembayaran text-center mt-3" id="pay-button">
                        Pilih Pembayaran
                    </div>
 
                </div>
            </div>
        </div>
    </div>

</div>

@push('scripts')
{{-- <script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
      // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
    Livewire.emit('validation');
    
    window.snap.pay('{{$snapToken}}', {
            onSuccess: function(result){
            
            Livewire.emit('result',result);
            alert("payment success!"); console.log(result);
            },
            onPending: function(result){
            /* You may add your own implementation here */
            alert("wating your payment!"); console.log(result);
            },
            onError: function(result){
            /* You may add your own implementation here */
            alert("payment failed!"); console.log(result);
            },
            onClose: function(){
            /* You may add your own implementation here */
            alert('you closed the popup without finishing the payment');
            }
        })
        // customer will be redirected after completing payment pop-up
    });
</script> --}}

<script>
    $.fn.followTo = function (pos) {
        var $this = this,
            $window = $(window);

        $window.scroll(function (e) {
            if (
                $window.scrollTop() > $('.col-md-8')
                // $(".short-desc").height() + $(".ulasan-pembeli").height() + 90
            ) {
                $this.css({
                    position: "absolute",
                    top: 130,
                });
            } else {
                $this.css({
                    position: "fixed",
                    top: 130,
                    width: $('.col-md-4').width()
                });
            }
        });
    };

    // document.addEventListener('contentChanged', function(e) {
    //     var $this = $("#checkoutFixed"),
    //         $window = $(window);

    //     if (
    //         $window.scrollTop() >
    //         $(".short-desc").height() + $(".ulasan-pembeli").height() + 90
    //     ) {
    //         $this.css({
    //             position: "absolute",
    //             top: $(".short-desc").height() +
    //                 $(".ulasan-pembeli").height() +
    //                 130,
    //         });
    //     } else {
    //         $this.css({
    //             position: "fixed",
    //             top: 130,
    //         });
    //     }
    // })

    $("#checkoutFixed").followTo($(".detail-info").height());
</script>
@endpush