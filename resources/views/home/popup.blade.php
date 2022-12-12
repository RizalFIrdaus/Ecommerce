
   {{-- popup lokasi --}}
   <div class="bg-popContainer" id="popUpDelivery">
    <div class="pop-box">
      <div class="card-header">
        Pilih Negara Tujuan
      </div>
      <div class="d-flex flex-column box-body">
          <div class="mb_maskot d-flex">
            <div class="popup-bagas"></div>
            <div class="popup-mastah"></div>
          </div>
            <div class="btn-group pop-dd mb-3">
              <div class="btn btn-outline-secondary d-flex justify-content-between" data-bs-toggle="dropdown" aria-expanded="false">
                <span>Daftar Negara Tujuan</span>
                <i class="fa-sharp fa-solid fa-caret-down"></i>
              </div>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><button class="dropdown-item" type="button">Indonesia</button></li>
                <li><button class="dropdown-item" type="button">Indonesia</button></li>
                <li><button class="dropdown-item" type="button">Indonesia</button></li>
                <li><button class="dropdown-item" type="button">Indonesia</button></li>
                <li><button class="dropdown-item" type="button">Indonesia</button></li>
                <li><button class="dropdown-item" type="button">Indonesia</button></li>
              </ul>
            </div>
            <div class="d-flex justify-content-end">
              <button type="button" class="btn btn-danger">Done</button>
            </div>
      </div>
     

      <div id="btn-exit" class="btn x-btn" onclick="closePopUpDelivery()">x</div>
    </div>
  </div>


  
  {{-- popup login --}}
  <div class="bg-popContainer" id="popUpLogin">
    <section class="vh-80">
      <div class="container py-5">
        <div style="width:500px;">
          <div class="row d-flex justify-content-center align-items-center">
            <div class="col-10 col-md-11">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                  <h2 class="mb-2"><b>Halo</b></h2>
                  <h6 class="mb-3">Masuk ke Masterbagasi atau <a class="font-color:blue;" onclick="popUpRegister()">Daftar</a></h6>
                  <div class="form-outline mb-2">
                    <form class="container">
                      <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="Email Atau Username">
                        <label for="floatingInput"> Email Atau Username</label>
                      </div>
                      <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                      </div>
                      <hr class="my-3">
                      <div class="pb-2">
                        <button class="button_slide slide_right" style="width:100%; background-color: #e52c2c;"
                        type="submit"><i class="fab fa-google me-2"></i> Lanjut Dengan Google</button>
                      </div>
                      <div class="pb-2">
                        <button class="button_slide slide_right" style="width:100%; background-color: #3b5998;"
                        type="submit"><i class="fab fa-facebook-f me-2"></i> Lanjut Dengan Facebook</button>
                      </div>
                      <div>
                        <button class="button_slide slide_right" style="width:100%; background-color: #09090a;"
                        type="submit"><i class="fab fa-apple me-2"></i> Lanjut Dengan Apple ID</button>
                      </div>
                    </form>
                    {{-- <a href="{{Auth::logout()}}">Logout</a> --}}
                    <div class="col">
                      <!-- Simple link -->
                      <a href="#!">Lupa Password?</a>
                    </div>
                  </div>         
                </div>
                <div id="btn-exit" class="btn x-btn" onclick="closePopUpLogin()"><span style="color: #FF4200">X</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  {{-- popup register --}}
  <div class="bg-popContainer" id="popUpRegister">
    <section class="vh-80">
      <div class="container py-5">
        <div style="width:500px;">
          <div class="row d-flex justify-content-center align-items-center">
            <div class="col-10 col-md-11">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                  <h2 class="mb-2"><b>Halo</b></h2>
                  <h6 class="mb-3">Masuk ke Masterbagasi atau <a href="#">Daftar</a></h6>
                  <div class="form-outline mb-2">
                    <form class="container">
                      <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="Email Atau Username">
                        <label for="floatingInput"> Email Atau Username</label>
                      </div>
                      <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                      </div>
                      <div>
                        <button class="button_slide slide_right" style="width:100%; background-color: #216fe2cd;"
                        type="submit"><i class="fab fa fa-user me-2"></i>Masuk</button>
                      </div>
                    </form>
                    <div class="col">
                      <!-- Simple link -->
                      <a href="#!">Lupa Password?</a>
                    </div>
                  </div>         
                </div>
                <div id="btn-exit" class="btn x-btn" onclick="closePopUpRegister()"><span style="color: #FF4200">X</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  {{-- popup peta --}}
  <div class="bg-popContainer" id="popUpPeta">
      <div class="container py-5">
          <div class="row d-flex justify-content-center align-items-center">
            <div class="col-10 col-md-11">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="carddd pt-4">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="pup-line mt-1">
                        <h4>Produk Dari <span style="color: red" id="produk-daerah"></span></h4>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body p-5 d-flex gap-4 flex-wrap overflow-auto" style="max-height: 40em">
                  <div class="card card-product">
                    <img src="{{ asset('frontend/img/product/produk1.jpg') }}" class="card-img-top card-img-product" alt="product">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="">
                          <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
                          <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                          <p class="price">Rp 7.500,-</p>
                          <div class="d-flex align-items-center discount">
                            <div class="discount-percentage">50%</div>
                            <div class="discount-price text-muted">Rp 15.000,-</div>
                          </div>
                          <div class="d-flex align-items-center conclusion-product">
                            <i class="bi bi-star-fill text-warning"></i>
                            <p class="rating-text text-muted">4.5</p>
                            |
                            <p class="rating-text text-muted sold">terjual 1260</p>
                          </div>
                        </div>
      
                        <div class="d-flex flex-column align-items-center justify-content-between">
                          <p class="weight-product">500g</p>
                          <div class="d-flex flex-column product-card-icon">
                            <div>
                              <img src="{{ asset('frontend/img/ico/wishlist/wishlist-off.svg') }}" alt=""
                              onclick="toggleWishlist(this)"
                              onmouseover="hoverWishlist(this)"
                              onmouseout="outWishlist(this)"
                              >
                            </div>
                            <div>
                              <img src="{{ asset('frontend/img/ico/addcart/addcart-off.svg') }}" alt="" 
                              onclick="toggleCart(this)"
                              onmouseover="hoverCart(this)"
                              onmouseout="outCart(this)"
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card card-product">
                    <img src="{{ asset('frontend/img/product/produk1.jpg') }}" class="card-img-top card-img-product" alt="product">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="">
                          <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
                          <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                          <p class="price">Rp 7.500,-</p>
                          <div class="d-flex align-items-center discount">
                            <div class="discount-percentage">50%</div>
                            <div class="discount-price text-muted">Rp 15.000,-</div>
                          </div>
                          <div class="d-flex align-items-center conclusion-product">
                            <i class="bi bi-star-fill text-warning"></i>
                            <p class="rating-text text-muted">4.5</p>
                            |
                            <p class="rating-text text-muted sold">terjual 1260</p>
                          </div>
                        </div>
      
                        <div class="d-flex flex-column align-items-center justify-content-between">
                          <p class="weight-product">500g</p>
                          <div class="d-flex flex-column product-card-icon">
                            <div>
                              <img src="{{ asset('frontend/img/ico/wishlist/wishlist-off.svg') }}" alt=""
                              onclick="toggleWishlist(this)"
                              onmouseover="hoverWishlist(this)"
                              onmouseout="outWishlist(this)"
                              >
                            </div>
                            <div>
                              <img src="{{ asset('frontend/img/ico/addcart/addcart-off.svg') }}" alt="" 
                              onclick="toggleCart(this)"
                              onmouseover="hoverCart(this)"
                              onmouseout="outCart(this)"
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card card-product">
                    <img src="{{ asset('frontend/img/product/produk1.jpg') }}" class="card-img-top card-img-product" alt="product">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="">
                          <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
                          <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                          <p class="price">Rp 7.500,-</p>
                          <div class="d-flex align-items-center discount">
                            <div class="discount-percentage">50%</div>
                            <div class="discount-price text-muted">Rp 15.000,-</div>
                          </div>
                          <div class="d-flex align-items-center conclusion-product">
                            <i class="bi bi-star-fill text-warning"></i>
                            <p class="rating-text text-muted">4.5</p>
                            |
                            <p class="rating-text text-muted sold">terjual 1260</p>
                          </div>
                        </div>
      
                        <div class="d-flex flex-column align-items-center justify-content-between">
                          <p class="weight-product">500g</p>
                          <div class="d-flex flex-column product-card-icon">
                            <div>
                              <img src="{{ asset('frontend/img/ico/wishlist/wishlist-off.svg') }}" alt=""
                              onclick="toggleWishlist(this)"
                              onmouseover="hoverWishlist(this)"
                              onmouseout="outWishlist(this)"
                              >
                            </div>
                            <div>
                              <img src="{{ asset('frontend/img/ico/addcart/addcart-off.svg') }}" alt="" 
                              onclick="toggleCart(this)"
                              onmouseover="hoverCart(this)"
                              onmouseout="outCart(this)"
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card card-product">
                    <img src="{{ asset('frontend/img/product/produk1.jpg') }}" class="card-img-top card-img-product" alt="product">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="">
                          <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
                          <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                          <p class="price">Rp 7.500,-</p>
                          <div class="d-flex align-items-center discount">
                            <div class="discount-percentage">50%</div>
                            <div class="discount-price text-muted">Rp 15.000,-</div>
                          </div>
                          <div class="d-flex align-items-center conclusion-product">
                            <i class="bi bi-star-fill text-warning"></i>
                            <p class="rating-text text-muted">4.5</p>
                            |
                            <p class="rating-text text-muted sold">terjual 1260</p>
                          </div>
                        </div>
      
                        <div class="d-flex flex-column align-items-center justify-content-between">
                          <p class="weight-product">500g</p>
                          <div class="d-flex flex-column product-card-icon">
                            <div>
                              <img src="{{ asset('frontend/img/ico/wishlist/wishlist-off.svg') }}" alt=""
                              onclick="toggleWishlist(this)"
                              onmouseover="hoverWishlist(this)"
                              onmouseout="outWishlist(this)"
                              >
                            </div>
                            <div>
                              <img src="{{ asset('frontend/img/ico/addcart/addcart-off.svg') }}" alt="" 
                              onclick="toggleCart(this)"
                              onmouseover="hoverCart(this)"
                              onmouseout="outCart(this)"
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card card-product">
                    <img src="{{ asset('frontend/img/product/produk1.jpg') }}" class="card-img-top card-img-product" alt="product">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="">
                          <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
                          <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                          <p class="price">Rp 7.500,-</p>
                          <div class="d-flex align-items-center discount">
                            <div class="discount-percentage">50%</div>
                            <div class="discount-price text-muted">Rp 15.000,-</div>
                          </div>
                          <div class="d-flex align-items-center conclusion-product">
                            <i class="bi bi-star-fill text-warning"></i>
                            <p class="rating-text text-muted">4.5</p>
                            |
                            <p class="rating-text text-muted sold">terjual 1260</p>
                          </div>
                        </div>
      
                        <div class="d-flex flex-column align-items-center justify-content-between">
                          <p class="weight-product">500g</p>
                          <div class="d-flex flex-column product-card-icon">
                            <div>
                              <img src="{{ asset('frontend/img/ico/wishlist/wishlist-off.svg') }}" alt=""
                              onclick="toggleWishlist(this)"
                              onmouseover="hoverWishlist(this)"
                              onmouseout="outWishlist(this)"
                              >
                            </div>
                            <div>
                              <img src="{{ asset('frontend/img/ico/addcart/addcart-off.svg') }}" alt="" 
                              onclick="toggleCart(this)"
                              onmouseover="hoverCart(this)"
                              onmouseout="outCart(this)"
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card card-product">
                    <img src="{{ asset('frontend/img/product/produk1.jpg') }}" class="card-img-top card-img-product" alt="product">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="">
                          <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
                          <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                          <p class="price">Rp 7.500,-</p>
                          <div class="d-flex align-items-center discount">
                            <div class="discount-percentage">50%</div>
                            <div class="discount-price text-muted">Rp 15.000,-</div>
                          </div>
                          <div class="d-flex align-items-center conclusion-product">
                            <i class="bi bi-star-fill text-warning"></i>
                            <p class="rating-text text-muted">4.5</p>
                            |
                            <p class="rating-text text-muted sold">terjual 1260</p>
                          </div>
                        </div>
      
                        <div class="d-flex flex-column align-items-center justify-content-between">
                          <p class="weight-product">500g</p>
                          <div class="d-flex flex-column product-card-icon">
                            <div>
                              <img src="{{ asset('frontend/img/ico/wishlist/wishlist-off.svg') }}" alt=""
                              onclick="toggleWishlist(this)"
                              onmouseover="hoverWishlist(this)"
                              onmouseout="outWishlist(this)"
                              >
                            </div>
                            <div>
                              <img src="{{ asset('frontend/img/ico/addcart/addcart-off.svg') }}" alt="" 
                              onclick="toggleCart(this)"
                              onmouseover="hoverCart(this)"
                              onmouseout="outCart(this)"
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card card-product">
                    <img src="{{ asset('frontend/img/product/produk1.jpg') }}" class="card-img-top card-img-product" alt="product">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="">
                          <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
                          <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                          <p class="price">Rp 7.500,-</p>
                          <div class="d-flex align-items-center discount">
                            <div class="discount-percentage">50%</div>
                            <div class="discount-price text-muted">Rp 15.000,-</div>
                          </div>
                          <div class="d-flex align-items-center conclusion-product">
                            <i class="bi bi-star-fill text-warning"></i>
                            <p class="rating-text text-muted">4.5</p>
                            |
                            <p class="rating-text text-muted sold">terjual 1260</p>
                          </div>
                        </div>
      
                        <div class="d-flex flex-column align-items-center justify-content-between">
                          <p class="weight-product">500g</p>
                          <div class="d-flex flex-column product-card-icon">
                            <div>
                              <img src="{{ asset('frontend/img/ico/wishlist/wishlist-off.svg') }}" alt=""
                              onclick="toggleWishlist(this)"
                              onmouseover="hoverWishlist(this)"
                              onmouseout="outWishlist(this)"
                              >
                            </div>
                            <div>
                              <img src="{{ asset('frontend/img/ico/addcart/addcart-off.svg') }}" alt="" 
                              onclick="toggleCart(this)"
                              onmouseover="hoverCart(this)"
                              onmouseout="outCart(this)"
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card card-product">
                    <img src="{{ asset('frontend/img/product/produk1.jpg') }}" class="card-img-top card-img-product" alt="product">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="">
                          <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
                          <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                          <p class="price">Rp 7.500,-</p>
                          <div class="d-flex align-items-center discount">
                            <div class="discount-percentage">50%</div>
                            <div class="discount-price text-muted">Rp 15.000,-</div>
                          </div>
                          <div class="d-flex align-items-center conclusion-product">
                            <i class="bi bi-star-fill text-warning"></i>
                            <p class="rating-text text-muted">4.5</p>
                            |
                            <p class="rating-text text-muted sold">terjual 1260</p>
                          </div>
                        </div>
      
                        <div class="d-flex flex-column align-items-center justify-content-between">
                          <p class="weight-product">500g</p>
                          <div class="d-flex flex-column product-card-icon">
                            <div>
                              <img src="{{ asset('frontend/img/ico/wishlist/wishlist-off.svg') }}" alt=""
                              onclick="toggleWishlist(this)"
                              onmouseover="hoverWishlist(this)"
                              onmouseout="outWishlist(this)"
                              >
                            </div>
                            <div>
                              <img src="{{ asset('frontend/img/ico/addcart/addcart-off.svg') }}" alt="" 
                              onclick="toggleCart(this)"
                              onmouseover="hoverCart(this)"
                              onmouseout="outCart(this)"
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card card-product">
                    <img src="{{ asset('frontend/img/product/produk1.jpg') }}" class="card-img-top card-img-product" alt="product">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="">
                          <p class="card-title product-name">Gudeg Mercon Bu Narti Telor Ayam Suwir</p>
                          <p class="dlv-to text-muted">Dikirim ke United Kingdom</p>
                          <p class="price">Rp 7.500,-</p>
                          <div class="d-flex align-items-center discount">
                            <div class="discount-percentage">50%</div>
                            <div class="discount-price text-muted">Rp 15.000,-</div>
                          </div>
                          <div class="d-flex align-items-center conclusion-product">
                            <i class="bi bi-star-fill text-warning"></i>
                            <p class="rating-text text-muted">4.5</p>
                            |
                            <p class="rating-text text-muted sold">terjual 1260</p>
                          </div>
                        </div>
      
                        <div class="d-flex flex-column align-items-center justify-content-between">
                          <p class="weight-product">500g</p>
                          <div class="d-flex flex-column product-card-icon">
                            <div>
                              <img src="{{ asset('frontend/img/ico/wishlist/wishlist-off.svg') }}" alt=""
                              onclick="toggleWishlist(this)"
                              onmouseover="hoverWishlist(this)"
                              onmouseout="outWishlist(this)"
                              >
                            </div>
                            <div>
                              <img src="{{ asset('frontend/img/ico/addcart/addcart-off.svg') }}" alt="" 
                              onclick="toggleCart(this)"
                              onmouseover="hoverCart(this)"
                              onmouseout="outCart(this)"
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="btn-exit" class="btn x-btn" onclick="closePopUpPeta()"><span style="color: #FF4200">X</span></div>
              </div>
            </div>
          </div>
      </div>
  </div>

  {{-- popup alamat --}}
  <div class="bg-popContainer" id="popUpAlamat">
    <div class="pop-Bbox p-5" style="width: 700px;">
      <div class="row">
        <div class="col-12" style="font-size: 20px; font-weight: 700; text-align: center">
          Ubah Alamat
        </div>
      </div>
      <form>
        <div class="form-group py-2">
          <label for="Email" class="judul-alamat">Email</label>
          <input style="width: 100%" type="text" class="form-control" id="Email" placeholder="Email">
        </div>

        <div class="form-group py-2">
          <label for="Nama" class="judul-alamat">Nama lengkap</label>
          <input style="width: 100%" type="text" class="form-control" id="Nama" placeholder="Nama Lengkap">
        </div>

        <div class="form-group py-2">
          <label for="Nomor Hp" class="judul-alamat">Nomor hp</label>
          <input style="width: 100%" type="text" class="form-control" id="Nomor Hp" placeholder="Nomor Hp">
        </div>

        <div class="form-group py-2">
          <label for="Alamat" class="judul-alamat">Alamat</label>
          <textarea style="width: 100%" class="form-control" id="Alamat" rows="3"></textarea>
        </div>

        <div class="row py-2">
          <div class="form-group col-md-4">
            <label for="inputKota" class="judul-alamat">Kota</label>
            <input type="text" class="form-control" id="inputKota">
          </div>
          <div class="form-group col-md-4">
            <p class="m-0 judul-alamat">Negara</p>
            <input type="text" class="form-control" id="inputNegara">
          </div>
          <div class="form-group col-md-4">
            <label for="kodePos" class="judul-alamat">Kode pos</label>
            <input type="text" class="form-control" id="kodePos">
          </div>
        </div>

        <div class="form-group py-2">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Jadikan sebagai alamat utama
            </label>
          </div>
        </div>

        <p class="py-2 judul-alamat">Delivery instrustions (optional)</p>
        <p class="py-2" >Add preferences, notes, access codes and more</p>

        <button class="btn" type="submit" style="background-color: #FF4200; color: white">Sign in</button>
      </form>
    

      <div id="btn-exit" class="btn x-btn" onclick="closepopUpAlamat()">x</div>
    </div>
  </div>

  {{-- popup banjang --}}
  <div class="bg-popContainer" id="popUpBanjang">
    <div class="banjang-pbox">
      <div class="mt-2">
        <h5 style="font-weight: 600">View our delivery options and rates</h5>
      </div>
      <div class="row mt-4 ps-3 pe-3">
        <div class="col-6 ps-0">
          <p class="m-0">Negara Asal</p>
          <div class="btn-banjang" width="100%">
            Indonesia
          </div>
        </div>
        <div class="col-6 pe-0">
          <p class="m-0">Negara Tujuan</p>
          <select class="form-select">
            <option selected>Pilih negara tujuan</option>
            <option value="1">Indonesia</option>
            <option value="2">Indonesia</option>
            <option value="3">Indonesia</option>
          </select>
        </div>
        
        <div id="pop-banjang" class="container pop-banjang" style="color: #fff">
          <div class="row mt-5 pb-3">
            <div class="col-md">
              <div class="card text-center" style="background-color: #ff4200" >
                <div class="card-header">Air Freight/Kg</div>
              </div>
            </div>
          </div>
          <div class="row d-flex flex-row justify-content-center px-3">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Klioan</th>
                    <th scope="col">Perorangan</th>
                    <th scope="col">Bersama</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Rp 123123</td>
                    <td>Rp 321321</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Rp 123123</td>
                    <td>Rp 321321</td>
                  </tr>
                  <tr>
                    <td>3 </td>
                    <td>Rp 123123</td>
                    <td>Rp 321321</td>
                  </tr>
                </tbody>
              </table>
          </div>

        </div>
      </div>

      <div id="btn-exit" class="btn x-btn" style="color: #ff4200 !important" onclick="closePopUpBanjang()">x</div>
    </div>
  </div>
