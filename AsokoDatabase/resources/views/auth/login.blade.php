@extends('format')

@section('content-holder')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        {{-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> --}}
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h3 text-gray-900 mb-1">Asoko Database Management</h1>
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                                <form action="{{ route('login') }}" method="POST" class="user">
                                    @csrf
                                    <div class="form-group">
                                        <input id="exampleInputEmail" type="email" class="form-control form-control-user 
                                         @error('email') is-invalid @enderror" aria-describedby=" emailHelp"
                                            name="email" value="{{ old('email') }}" placeholder="Enter Email Address..."
                                            required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input id="exampleInputPassword" type="password"
                                            class="form-control form-control-user @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="current-password"
                                            placeholder="Password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input class="custom-control-input" type="checkbox" name="remember"
                                                id="customCheck" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="custom-control-label" for="customCheck">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <hr>
                                @if (Route::has('password.request'))
                                <div class="text-center">
                                    <a class="small" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                                @endif
                                {{-- <div class="text-center">
                                    <a class="small" href="{{ route('register') }}">Create an Account!</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection