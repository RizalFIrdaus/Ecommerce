<a class="nav-link pe-2" style="color: black;" href="/login" data-bs-toggle="modal" data-bs-target="#login">
    <Span style="font-weight:bold; font-size:14px; width: 100px" id="akun-span" class="btn btn-lihat btn-sm">Masuk</Span>
</a>

<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 pop-login-header">
                                <h1 class="fw-bold mb-2 text-uppercase">Halo</h1>
                                <p class="mb-3">Masuk ke Masterbagasi atau <a href="register"
                                        class=" fw-bold" style="color:#FF4200">Daftar</a>
                                </p>
                                <form method="POST" class="my-4" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                            name="email" placeholder="name@example.com" autocomplete="on" @if(Cookie::has('mbu')) value="{{ Cookie::get('mbu') }}" @endif>
                                        <label for="email">Email address</label>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            id="password-popLogin" placeholder="Password" name="password"
                                            autocomplete="current-password" @if(Cookie::has('mbp')) value="{{ Cookie::get('mbp') }}" @endif>
                                        <span toggle="#password-popLogin" class="eyeshow field-icon toggle-password"></span>
                                        <label for="password">Password</label>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-check d-flex mt-4 align-items-center" style="margin-left: 20px;">
                                        <input class="form-check-input my-auto" type="checkbox" name="remember_me" id="remember_me" @if(Cookie::has('mbu')) checked @endif/>
                                        <label class="form-check-label mx-2 my-auto" for="remember_me" >Remember password </label>
                                    </div>
                                    <div class="form-floating mt-4">
                                        <button class="button_slide slide_right fw-bold text-white w-100" type="submit"
                                            style="background-color: #FF4200;"><i class=" fa fa-sign-in me-2"></i>Login
                                            Masterbagasi</button><br>
                                    </div>
                                </form>
                                <hr>
                                <p class="small mb-3 pb-lg-2"><a class="text-black-50" href="{{url('/password/reset')}}">
                                        <h5>Lupa Password?</h5>
                                    </a></p>
                                <a class="button_slide slide_right btn fw-bold text-white w-100"
                                    style="background-color: #ee2a23;" href="{{route('auth.google')}}" ><i class="fab fa-google me-2"></i>Sign in
                                    with Google</a>
                                <a class="button_slide slide_right btn fw-bold text-white w-100 my-2" 
                                    style="background-color: #216ab9;" href="{{route('auth.facebook')}}" ><i class="fab fa-facebook-f me-2"></i>Sign
                                    in with facebook</a>
                            </div>
                            <footer>
                                <p class="fw-bold">©Masterbagasi MB Build 2022</p>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>