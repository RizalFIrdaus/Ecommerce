@extends('layouts.login.app')

@section('content')

<section class="register-page">
    <div class="container py-3">
        <a href="/">
            <img src="{{ asset('frontend/img/ico/default/logo.svg') }}" width="140px;">
        </a>

        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="position-relative w-100 h-100 pt-3">
                    <img src="{{ asset('frontend/img/maskot/earth-plane.png') }}" alt="" style="width: 50%; display: block; margin: 0 auto;">
                    <img src=" {{ asset('frontend/img/maskot/splash-circle.png') }}" alt="" class="position-absolute splash-circle" style="width: 45%; top: 1%; left: 29%">
                    <img src=" {{ asset('frontend/img/maskot/splash-bagas1.png') }}" alt="" class="position-absolute splash-bagas" style="width: 90px; top: 29%; left: 38%">
                    <img src=" {{ asset('frontend/img/maskot/splash-masta1.png') }}" alt="" class="position-absolute splash-masta" style="width: 90px; top: 24%; left: 58%">

                    <div class="px-3" style="margin-top: 20%">
                        <h1 class="fw-bold text-center">Selamat Datang di Master Bagasi</h1>
                        <h3 class=" text-center">E-Commerce pertama di Indonesia yang telah menjangkau lebih dari 70 Negara di Dunia</h2>
                    </div>
                    
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="pt-1">
                    <div class="border border-2 w-100 mx-auto py-4 px-5 shadow">
                        <h4 class="fw-bold text-center">Masuk ke Masterbagasi</h4>
                        <h5 class="text-center mb-3">Belum punya akun Masterbagasi? <a href="/register" class="text-decoration-none" style="color: #FF4200"> Ayo Daftar</a></h5>
                        <a class="button_slide slide_right fw-bold btn text-white w-100" type="submit" style="background-color: #ee2a23;" type="submit"><i class="fab fa-google me-2"></i>Lanjutkan dengan Google</a>
                        <a class="button_slide slide_right btn fw-bold text-white w-100" type="submit" style="background-color: #216ab9;" type="submit"><i class="fab fa-facebook-f me-2"></i>Lanjutkan dengan Facebook</a>
                        <div class="d-flex justify-content-between mt-3">
                            <svg class="dash" viewBox="-10 0 50 1"><line x1="-9" x2="39"></line></svg>
                            <h5 class="text-center">Master Bagasi</h5>
                            <svg class="dash" viewBox="-10 0 50 1"><line x1="-9" x2="39"></line></svg>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-floating form-white my-3">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" placeholder="name@example.com" autocomplete="on" @if(Cookie::has('mbu')) value="{{ Cookie::get('mbu') }}" @endif>
                            <label class="text-black-50" for="email">Email address</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-floating form-white mb-3">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password-popLogin2" placeholder="Password" name="password"
                                autocomplete="current-password" @if(Cookie::has('mbp')) value="{{ Cookie::get('mbp') }}" @endif>
                                <span toggle="#password-popLogin2" class="eyeshow field-icon toggle-password"></span>
                                <label class="text-black-50" for="password">Password</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-check d-flex justify-content-start ms-4 my-2">
                                <input class="form-check-input my-auto" type="checkbox" name="remember_me" id="remember_me" @if(Cookie::has('mbu')) checked @endif/>
                                <label class="form-check-label my-auto mx-2" for="remember_me" >Remember password </label>
                            </div>
                            {{-- <div class="login">
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
                                        id="password" placeholder="Password" name="password"
                                        autocomplete="current-password" @if(Cookie::has('mbp')) value="{{ Cookie::get('mbp') }}" @endif>
                                    <label for="password">Password</label>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-check d-flex justify-content-start mt-4">
                                    <input class="form-check-input" type="checkbox" name="remember_me" id="remember_me" @if(Cookie::has('mbu')) checked @endif/>
                                    <label class="form-check-label mx-2" for="remember_me" >Remember password </label>
                                </div>
                                <div class="form-floating mt-4">
                                    <button class="button_slide slide_right fw-bold text-white w-100" type="submit"
                                        style="background-color: #FF4200;"><i class=" fa fa-sign-in me-2"></i>Login
                                        Masterbagasi</button><br>
                                </div>
                            </div> --}}

                            <button class="button_slide slide_right fw-bold text-white w-100" type="submit"style="background-color: #FF4200;">Login</button>
                        </form>

                        <h5 class="text-center mt-3 text-black-50">Dengan ini, saya menyetujui</h5>
                        <h5 class="text-center text-black-50"><a href="#" class="text-decoration-none" style="color: #FF4200">Syarat dan Ketentuan</a> serta <a href="#" class="text-decoration-none" style="color: #FF4200">Kebijakan Privasi</a></h5>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="text-center mt-5">Ⓒmasterbagasi 2021-2023, PT. Bumi Hijau Khatulistiwa    |   <a href="#" class="text-decoration-none" style="color: #FF4200">Masterbagasi Afiliasi</a></h5>
    </div>
</section>

@endsection