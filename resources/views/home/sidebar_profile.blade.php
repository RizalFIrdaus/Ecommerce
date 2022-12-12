<div class="col-3">
    <div class="container shadow" style="height: auto; border: 1px solid rgba(221, 221, 221, 0.466); border-radius: 10px;">
        <div style="border-bottom: 2px solid rgba(221, 221, 221, 0.466);" class="d-flex p-2">
            <div class="px-2">
                <img src="{{asset('frontend/img/dummy/profil.svg')}}" alt="Avatar" class="avatar rounded-circle pl-5">
            </div>
            <div>
                <p class="mb-0 mt-2 fw-bold">Subhan</p>
                <p class="mb-1">Member Gold</p>
            </div>
        </div>

        <div class="p-2" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466)">
            <div class="px-2">  
                <img src="{{asset('frontend/img/dummy/MBpay.svg')}}" width="116px" alt="Avatar" class="avatar pl-5 my-2">
                <div class="d-flex justify-content-between">
                    <p class="my-0">Saldo</p>
                    <p class="my-0 fw-bold">Rp1.000.000</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="my-0">Koin</p>
                    <p class="my-0 fw-bold">1.000.000</p>
                </div>
                <div class="fw-bold memb-gold">
                    Member Gold
                </div>
                <div class="ps-2 memb-gold-child">
                    <p class="my-0">Kumpulkan Koin</p>
                    <p class="my-0">Kupon Promo Saya</p>
                </div>
            </div>
        </div>
        
        <div style="border-bottom: 2px solid rgba(221, 221, 221, 0.466)" class="py-2 side-dd">
            <button class="dropdown-btn" style="font-weight: 700">Kotak Masuk
              </button>
              <div class="dropdown-container">
                <a href="{{ url('/profile/chat') }}">Chat</a>
                <a href="{{ url('/profile/diskusi_produk') }}">Diskusi Produk</a>
                <a href="{{ url('/profile/ulasan') }}">Ulasan Pengiriman</a>
                <a href="{{ url('/profile/update-notif') }}">Pesan Bantuan</a>
              </div>
        </div>
        <div style="border-bottom: 2px solid rgba(221, 221, 221, 0.466)" class="py-2 side-dd">
            <button class="dropdown-btn" style="font-weight: 700">Pembelian
              </button>
              <div class="dropdown-container">
                <a href="{{ url('/profile/menunggu-pembayaran') }}">Menunggu Pembayaran</a>
                <a href="{{ url('/profile/daftar-transaksi') }}">Daftar Transaksi</a>
              </div>
        </div>
        <div style="border-bottom: 2px solid rgba(221, 221, 221, 0.466)" class="py-2 side-dd">
            <button class="dropdown-btn" style="font-weight: 700">Profil Saya
              </button>
              <div class="dropdown-container">
                <a href="{{ url('/wishlist') }}">Wishlist</a>
                <a href="{{ url('#') }}">Merek Favorit</a>
                <a href="{{ url('#') }}">MB Afiliasi Program</a>
                <a href="{{ url('#') }}">MB Mitra UMKM</a>
                <a href="{{ url('/profile/edit') }}">Pengaturan</a>
              </div>
        </div>
        <div class="profile-banner">
            {{-- <img src="{{asset('frontend/img/dummy/banner.png')}}"> --}}
        </div>
    </div>
</div>