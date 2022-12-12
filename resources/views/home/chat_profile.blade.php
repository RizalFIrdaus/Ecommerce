@extends('layouts.app')
@section('content')
@if (Session()->has('success'))
<div class="alert alert-success mt-4" role="alert">
    {{Session()->get('success')}}
</div>
@endif

@if (Session()->has('failed'))
<div class="alert alert-danger mt-4" role="alert">
    {{Session()->get('failed')}}
</div>

@endif
@if ($errors->any())
<div class="alert alert-danger">
    <div>
        <p>Something wrong...</p>
    </div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container profile-tab" style="margin-top: 100px">
    <div class="row">
            @include('home.sidebar_profile')
        <div class="col-9">
          <div class="row" style="border: 1px solid #ddd; border-radius: 10px">
              <div class="col-4 px-0">
                  <div class="container rounded-5 border-gray-500 px-3">
                      <div class="d-flex justify-content-between my-2">
                        <h2 class="mb-0">Chat</h2>
                        <div class="btn ps-0">
                            <i class="fa-solid fa-gear fa-2x"></i>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between my-2">
                          <form class="mb-0">
                              <input class="searchChat" type="text" name="search" placeholder="Cari ..">
                          </form>
                          <div class="btn fw-bold faq-chat d-flex justify-content-center align-items-center" onclick="chatToggle()">
                              FAQ
                          </div>
                      </div>
                  </div>
                  <div class="p-1">
                      <div class="container p-3 listChat">
                          <div class="d-flex justify-content-between">
                              <div class="d-flex">
                                <div class="my-auto ">
                                    <div class="d-flex mx-auto bag-chat">
                                        <img src="{{asset('frontend/img/dummy/profil.svg')}}" alt="">
                                    </div>
                                </div>
                                <div class="ms-2 my-auto">
                                    <div class="chatName d-flex">
                                        <h5>Subhan ... </h5>
                                        <p>Penjual</p>
                                    </div>
                                    <p>oke bang</p>
                                </div>
                              </div>
                              <div class="justify-content-center my-auto">
                                  <p>16:18</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-8 px-0"  style="border-left: 1px solid #ddd">
                  {{-- chat --}}
                  <div id="chatNih" class="chatNih">
                      <div class="chatNav">
                          <div class="row p-3">
                              <div class="col d-flex justify-content-between">
                                  <div class="d-flex">
                                      <div class="d-flex bag-chat">
                                          <img src="{{asset('frontend/img/dummy/profil.svg')}}" alt="">
                                      </div>
                                      <div class="ps-3 my-auto">
                                          <h5>Rizaldi</h5>
                                          <p>online</p>
                                      </div>
                                  </div>
                                  <div class="btn my-auto"><i class="fa-solid fa-ellipsis-vertical fa-2x"></i></div>
                              </div>
                          </div>    
                      </div>
                      <div class="cht-body">
                          <div class="chatBox p-3">
                              <div class="d-flex justify-content-end ChatUser">
                                  <p>
                                      test 
                                      <span class="text-muted">15:00</span>
                                  </p>
                              </div>
                              <div class="d-flex justify-content-start ChatCus">
                                  <p>
                                      iya
                                      <span class="text-muted">15:10</span>
                                  </p>
                              </div>
                              <div class="d-flex justify-content-end ChatUser">
                                  <p>
                                      test 
                                      <span class="text-muted">15:20</span>
                                  </p>
                              </div>
                              <div class="d-flex justify-content-start ChatCus">
                                  <p>
                                      iya
                                      <span class="text-muted">15:30</span>
                                  </p>
                              </div>
                          </div>
                          <div class="chatInput d-flex justify-content-between p-3">
                              <form action="">
                                  <input type="text" placeholder="Tulis pesan..">
                              </form>
                              <div class="btn"><i class="fa-solid fa-paper-plane"></i></div>
                          </div>
                      </div>
                  </div>
                  <div id="FAQnih" class="FAQnih">
                      <div class="chatNav">
                          <div class="row p-3">
                              <div class="col d-flex justify-content-between">
                                  <div class="d-flex">
                                      <div class="d-flex bag-chat">
                                          <img src="{{asset('frontend/img/dummy/profil.svg')}}" alt="">
                                      </div>
                                      <div class="ps-3 my-auto">
                                          <h5>FAQ</h5>
                                      </div>
                                  </div>
                                  <div class="btn my-auto"><i class="fa-solid fa-ellipsis-vertical fa-2x"></i></div>
                              </div>
                          </div>    
                      </div>
                      <div class="p-2">
                          <div class="accordion accordion-flush" id="accordionFlushExample">
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    1. Apa itu Master Bagasi?  
                                  </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">
                                    <p></p>
                                    <p>Master Bagasi adalah e-commerce&nbsp;pertama&nbsp;karya anak bangsa&nbsp;yang&nbsp;menyediakan&nbsp;produk-produk asli buatan Indonesia untuk di-supply ke mancanegara.&nbsp;</p>
                                    <p>Melalui 3 layanan utamanya yaitu Marketplace, On-Demand Services, dan Logistic, kami membantu meng-etalase-kan&nbsp;produk-produk tersebut dan mengirimkannya ke seluruh penjuru dunia dengan harga terjangkau, proses yang&nbsp;mudah, dan pengiriman yang&nbsp;cepat.</p>
                                    <p></p>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    2. Bagaimana Cara Kerja Master Bagasi?
                                  </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">
                                    <p></p>
                                    <p>Cara kerja kami sangat lah sederhana, yaitu:</p>
                                    <ol>
                                      <li>Anda bisa langsung&nbsp;memilih produk&nbsp;yang anda inginkan pada&nbsp;etalase Master Bagasi, lalu hubungi Tim Komunikasi kami untuk konfirmasi terkait ketersediannya. Jika produk yang anda inginkan tidak tersedia, beri catatan pada tim Komunikasi kami agar dibantu untuk dicarikan sesuai dengan yang anda inginkan, dan atau jika anda memiliki&nbsp;barang atau paket yang siap dikirimkan, silahkan antar paket/barang&nbsp;tersebut ke alamat kami.</li>
                                      <li>Setelah barang yang anda inginkan lengkap, Tim Warehouse kami akan melakukan packing terhadap barang anda dengan sangat rapi dan teliti sehingga dapat meminimalisir kerusakan dalam proses pengiriman nantinya.</li>
                                      <li>Setelah barang anda siap untuk dikirim, Tim Office kami akan membuatkan anda AWB pengiriman dan barang pun kami serahkan kepada mitra logistik kami yang terpercaya, barang pun terbang ke negara tujuan anda aman.</li>
                                      <li>Setelah barang sampai di negara tujuan, terdapat kemungkinan barang&nbsp;diperiksa oleh pihak custom setempat. Selama proses ini, mitra logistik kami akan membantu&nbsp;proses custom clearance hingga selesai dan mengantarkan&nbsp;barang anda sampai tepat di depan pintu rumah anda.</li>
                                      <li>Dengan mengusung slogan "Bringing Happiness Into Your Table", Master Bagasi akan selalu berusaha memberikan pelayanan terbaik kepada anda, karena kebahagiaan anda adalah tujuan kami berkarya.&nbsp;&nbsp;</li>
                                    </ol>
                                    <p>&nbsp;</p>
                                    <p></p>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    3. Barang Apa Saja yang Tidak Bisa di Kirim?
                                  </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">
                                    <p></p>
                                    <p>Barang-barang terlarang seperti Senjata Tajam, Narkotika, Alkohol, dan Sejenisnya. Kemudian barang-barang pecah belah maupun barang dengan tingkat keawetan rendah tidak disarankan untuk dikirim. Karena Master Bagasi&nbsp;tidak bertanggung jawab atas kerusakan terkait pengiriman tersebut.</p>
                                    <p></p>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingfour">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                    4. Metode Pembayaran Apa Saja Yang Tersedia?
                                  </button>
                                </h2>
                                <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">
                                    <p></p>
                                    <p>Anda bisa membayar melalui Transfer Bank, PayPal, Wise, dan pembayaran lainya yang telah terlebih dahulu disepakati bersama.</p>
                                    <p></p>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingfive">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                    5. Berapa Lama Proses Pengirimanya?
                                  </button>
                                </h2>
                                <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">
                                    <p></p>
                                    <p>Estimasi pengiriman adalah 3 sampai 7 hari kerja terhitung sejak&nbsp;barang dikirim. Lama waktu pengiriman sangat mungkin lebih cepat atau lebih lambat, tergantung&nbsp;keadaan atau kondisi tertentu pada saat pengiriman ke&nbsp;negara destinasi. Diantara kondisi tertentu tersebut adalah faktor&nbsp;cuaca, faktor gangguang penerbangan, faktor custom clearance, dan sebagainya.</p>
                                    <p></p>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingsix">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsesix" aria-expanded="false" aria-controls="flush-collapsesix">
                                    6. Apakah Harga Sudah All in?
                                  </button>
                                </h2>
                                <div id="flush-collapsesix" class="accordion-collapse collapse" aria-labelledby="flush-headingsix" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">
                                    <p></p>
                                    <p>Harga yang di berikan di luar pajak&nbsp;di negara tujuan. Regulasi dan kondisi di setiap negara berbeda beda. Adapun untuk pemberitahuan perihal pajak&nbsp;akan di informasikan secara langsung melalui e-mail anda oleh mitra logistik terkait atau dibantu oleh&nbsp;Tim Komunikasi kami.&nbsp;</p>
                                    <p></p>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingseven">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseseven" aria-expanded="false" aria-controls="flush-collapseseven">
                                    7. Bagaimana cara menghitung volume kardus?
                                  </button>
                                </h2>
                                <div id="flush-collapseseven" class="accordion-collapse collapse" aria-labelledby="flush-headingseven" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">
                                    <p></p>
                                    <p>Rumus menghitung volume kardus adalah&nbsp;Panjang&nbsp;x&nbsp;Lebar&nbsp;x Tinggi dibagi 5.000.&nbsp;Jika hasil volume kardus&nbsp;lebih besar dari berat barang&nbsp;maka yang menjadi tolak ukur adalah angka tertinggi di antara keduanya.&nbsp;</p>
                                    <p></p>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingeight">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseeight" aria-expanded="false" aria-controls="flush-collapseeight">
                                    8. Apakah ada minimal pengiriman?
                                  </button>
                                </h2>
                                <div id="flush-collapseeight" class="accordion-collapse collapse" aria-labelledby="flush-headingeight" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">
                                    <p></p>
                                    <p>Minimal pengiriman adalah 1 kilogram. Untuk barang dengan berat di bawah 1 kilogram akan tetap terhitung 1 kilogram. Berlaku untuk setiap jenis barang lain nya.</p>
                                    <p></p>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingnine">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsenine" aria-expanded="false" aria-controls="flush-collapsenine">
                                    9. Berapa harga untuk mengirim barang di Master Bagasi?
                                  </button>
                                </h2>
                                <div id="flush-collapsenine" class="accordion-collapse collapse" aria-labelledby="flush-headingnine" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">
                                    <p></p>
                                    <p>Untuk informasi mengenai&nbsp;biaya pengiriman,&nbsp;bisa didapatkan melalui wesite kami di https://masterbagasi.com/cargo atau bisa berkonsultasi langsung melalui&nbsp;Tim Komunikasi&nbsp;kami langsung melalui&nbsp;https://masterbagasi.com/contactus untuk informasi lebih lanjut.&nbsp;</p>
                                    <p></p>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingten">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseten" aria-expanded="false" aria-controls="flush-collapseten">
                                    10. Bagaimana Melacak Paket Saya?
                                  </button>
                                </h2>
                                <div id="flush-collapseten" class="accordion-collapse collapse" aria-labelledby="flush-headingten" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">
                                    <p></p>
                                    <p>Setelah pembayaran dilakukan, Tim Komunikasi&nbsp;kami akan memberikan nomor AWB pengiriman yang nantinya bisa digunakan untuk melacak paket anda. Tapi tenang, tanpa anda minta, Tim Komunikasi kami juga&nbsp;akan secara rutin menginformasikan perihal posisi paket anda setiap harinya.</p>
                                    <p></p>
                                  </div>
                                </div>
                              </div>
                            </div>
                      </div>
                  </div>
              </div>
          </div>
            {{-- <div class="container px-0" style="border: 1px solid rgba(221, 221, 221, 0.466); border-radius: 10px;">
                <div class="p-4">
                    <div class="profile-header">
                        <h6>Chat</h6>
                    </div>
                    <div class="profil-body">
                        <img class="prof-pembayaran" src="{{asset('frontend/img/dummy/berita2.jpg')}}" alt="">

                        <h5>Belum ada</h5>
                        <p>Yuk, mulai belanja dan penuhi berbagai kebutuhanmu di Tokopedia.</p>
                    </div>

                </div>

        
            </div> --}}
        </div>
    </div>
</div>

@endsection