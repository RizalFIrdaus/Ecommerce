@extends('layouts.login.app')

@section('content')


{{-- <section class="vh-100" style="background-color: #FEF9F3;">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="{{ asset('image/caption.png') }}" class="img-fluid" alt="Phone image">
            </div>

            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <form method="POST" action="{{ route('register') }}">
                    <h3 class="mb-5 text-center">Register Master Bagasi</h3>
                    @csrf
                    <div class="form-outline mb-4">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="off" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label class="form-label" for="name">Name</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="off">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label class="form-label" for="email">Email</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label class="form-label" for="email">Password</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                            autocomplete="new-password">
                        <label class="form-label" for="email">Confirm Password</label>
                    </div>

                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-start mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                        <label class="form-check-label" for="form1Example3"> Remember password </label>
                    </div>

                    <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>


                    <a class="btn btn-lg btn-block btn-primary" href="{{ route('login') }}"
                        style="background-color: #dd4b39;" type="submit"> Sign
                        In</a>
                    <hr class="my-4">
                </form>
            </div>
            </div>
            </div>
            </section> --}}




{{-- <section class="bgg1">
    <div class="container py-5 h-100 background-color: #FEF9F3">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="{{ asset('image/caption.png') }}" class="img-fluid" alt="Phone image">
            </div>
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card text-black" style="border-radius: 1rem;">
                    <div class="card-body px-5 text-center">
                        <div class="mb-md-5 mt-md-4 pb-5">
                            <h3 class="fw-bold mb-2 text-uppercase">Daftar Sekarang</h3>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-floating form-white my-4">
                                    <input type="name" id="name" name="name"
                                        class="form-control form-control-lg @error('name') is-invalid @enderror"
                                        placeholder="Name" value="{{ old('name') }}" autocomplete="off"/>
                                        <label for="name">Name</label>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-floating form-white mb-4">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}"
                                        placeholder="Email" />
                                        <label for="email">Email</label>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-floating form-white mb-4">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password" placeholder="Password"/>
                                        <label for="password">Password</label>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-floating form-white mb-4">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                                    autocomplete="new-password" placeholder="Confirm Password" />
                                    <label for="password_confirmation">Confirm Password</label>
                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <button class="button_slide slide_right fw-bold text-white w-100" type="submit"
                                    style="background-color: #FF4200;"><i
                                        class="fas fa-users me-2"></i>Register</button><br>
                            </form>
                            <hr>
                            <p class="small mb-3 pb-lg-2"><a class="text-black-50" href="login">
                                    <h5>Sudah Punya akun?</h5>
                                </a></p>
                            <a class="button_slide slide_right fw-bold btn text-white w-100" type="submit"
                                style="background-color: #ee2a23;" type="submit"><i
                                    class="fab fa-google me-2"></i>Sign in with Google</a>
                            <a class="button_slide slide_right btn fw-bold text-white w-100" type="submit"
                                style="background-color: #216ab9;" type="submit"><i
                                    class="fab fa-facebook-f me-2"></i>Sign in with facebook</a>
                            <br>
                            <br>
                            <p class="fw-bold">Dengan mendaftar, saya menyetujui
                                Syarat dan Ketentuan serta Kebijakan Privasi</p>
                        </div>
                        <footer>
                            <p class="fw-bold mb-3">©Masterbagasi Team IT 2022</p>
                        </footer>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section class="register-page">
    <div class="container py-3">
        <a href="/">
            <img src="{{ asset('frontend/img/ico/default/Logo.svg') }}" width="140px;">
        </a>

        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="position-relative w-100 h-100 pt-3">
                    <br>
                    <div class="d-flex flex-column justify-content-center">
                        <img src="{{ asset('frontend/img/maskot/earth-plane.png') }}" alt="" style="width: 50%; display: block; margin: 0 auto;">
                        <img src=" {{ asset('frontend/img/maskot/splash-circle.png') }}" alt="" class="position-absolute splash-circle" style="width: 45%; top: 1%; left: 29%">
                        <img src=" {{ asset('frontend/img/maskot/splash-bagas1.png') }}" alt="" class="position-absolute splash-bagas" style="width: 90px; top: 29%; left: 38%">
                        <img src=" {{ asset('frontend/img/maskot/splash-masta1.png') }}" alt="" class="position-absolute splash-masta" style="width: 90px; top: 24%; left: 58%">
    
                        <div class="px-3" style="margin-top: 20%">
                            <h1 class="fw-bold text-center">Selamat Datang di Master Bagasi</h1>
                            <h3 class=" text-center">E-Commerce pertama di Indonesia yang telah menjangkau lebih dari 70 Negara di Dunia</h3>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="pt-1">
                    <div class="border border-2 w-100 mx-auto py-4 px-5 shadow">
                        <h4 class="fw-bold text-center">Daftar Sekarang</h4>
                        <h5 class="text-center mb-3">Sudah punya akun Masterbagasi? <a href="/login" class="text-decoration-none" style="color: #FF4200"> Masuk</a></h5>
                        <a class="button_slide slide_right fw-bold btn text-white w-100" type="submit" style="background-color: #ee2a23;" type="submit"><i class="fab fa-google me-2"></i>Lanjutkan dengan Google</a>
                        <a class="button_slide slide_right btn fw-bold text-white w-100" type="submit" style="background-color: #216ab9;" type="submit"><i class="fab fa-facebook-f me-2"></i>Lanjutkan dengan Facebook</a>
                        <div class="d-flex justify-content-between mt-3">
                            <svg class="dash" viewBox="-10 0 50 1"><line x1="-9" x2="39"></line></svg>
                            <h5 class="text-center">atau daftar dengan</h5>
                            <svg class="dash" viewBox="-10 0 50 1"><line x1="-9" x2="39"></line></svg>
                        </div>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-floating form-white my-3">
                                <input type="name" id="name" name="name"
                                    class="form-control form-control-lg @error('name') is-invalid @enderror"
                                    placeholder="Name" value="{{ old('name') }}" autocomplete="off"/>
                                    <label class="text-black-50" for="name">Name</label>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-floating form-white mb-3">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}"
                                    placeholder="Email" />
                                    <label class="text-black-50" for="email">Email</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-floating form-white mb-3">
                                <input id="password-popRegister" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password" placeholder="Password"/>
                                <span toggle="#password-popRegister" class="eyeshow field-icon toggle-password"></span>
                                    <label class="text-black-50" for="password">Password</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-floating form-white mb-3">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                                autocomplete="new-password" placeholder="Confirm Password" />
                                <label class="text-black-50" for="password_confirmation">Confirm Password</label>
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <button class="button_slide slide_right fw-bold text-white w-100" type="submit"style="background-color: #FF4200;">Daftar</button>
                        </form>

                        <h5 class="text-center mt-3 text-black-50">Dengan mendaftar, saya menyetujui</h5>
                        <h5 class="text-center text-black-50"><a href="#" class="text-decoration-none" style="color: #FF4200">Syarat dan Ketentuan</a> serta <a href="#" class="text-decoration-none" style="color: #FF4200">Kebijakan Privasi</a></h5>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="text-center mt-5">Ⓒmasterbagasi 2021-2023, PT. Bumi Hijau Khatulistiwa    |   <a href="#" class="text-decoration-none" style="color: #FF4200">Masterbagasi Afiliasi</a></h5>
    </div>
</section>





{{-- 
<section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <h3 class="mb-5">Sign Up</h3>
                        <form method="POST" action="{{ route('register') }}">
@csrf
<div class="form-outline mb-4">
    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
        value="{{ old('name') }}" required autocomplete="off" autofocus>

    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <label class="form-label" for="name">Name</label>
</div>

<div class="form-outline mb-4">
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
        value="{{ old('email') }}" required autocomplete="off">

    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <label class="form-label" for="email">Email</label>
</div>
<div class="form-outline mb-4">
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
        required autocomplete="new-password">

    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <label class="form-label" for="email">Password</label>
</div>
<div class="form-outline mb-4">
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
        autocomplete="new-password">
    <label class="form-label" for="email">Confirm Password</label>
</div>

<!-- Checkbox -->
<div class="form-check d-flex justify-content-start mb-4">
    <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
    <label class="form-check-label" for="form1Example3"> Remember password </label>
</div>

<button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>


<a class="btn btn-lg btn-block btn-primary" href="{{ route('login') }}"
    style="background-color: #dd4b39;" type="submit">
    Sign
    In</a>
<hr class="my-4">
</form>
</div>
</div>
</div>
</div>
</div>
</section> --}}


@endsection