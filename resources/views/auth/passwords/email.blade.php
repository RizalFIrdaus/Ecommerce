@extends('layouts.login.app')

@section('content')
<section style="background-color: #FEF9F3;" class="vh-100">
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 d-flex justify-content-center align-content-center">
                <div class="card" style="width: 500px;">
                    <div class="card-body p-5">
                        @if(session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="container">
                            <div class="row text-center">
                                <h2 >Forgot Password?</h2>
                                <p>You can reset your password here.</p>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            
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
                            <div class="row mb-0">
                                <div class="col-md-6 w-100">
                                    <button class="button_slide slide_right fw-bold text-white w-100" type="submit"
                                    style="background-color: #FF4200;"><i class=" fa fa-sign-in me-2"></i>{{ __('Send Password Reset Link') }}</button><br>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection