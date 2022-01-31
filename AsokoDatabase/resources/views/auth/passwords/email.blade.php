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
                                    <h1 class="h4 text-gray-900 mb-4">Reset Password!</h1>
                                </div>
                                <form action="{{ route('password.email') }}" method="POST" class="user">
                                    @csrf
                                    <div class="form-group">
                                        <input id="email" type="email"
                                            class="form-control form-control-user @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required autocomplete="email"
                                            autofocus placeholder="Enter Email Address...">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <button class="btn btn-primary btn-user btn-block">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </form>
                                <hr>

                                <div class="text-center">
                                    <a class="small" href="{{ route('login') }}">Back to login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection