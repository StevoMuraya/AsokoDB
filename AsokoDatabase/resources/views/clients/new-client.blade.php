@extends('dash-format')

@section('content-holder')
<div class="container-fluid">
    <div class="row pt-2">
        <div class="card shadow mb-4 col-md-12">
            <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
                <h6 class="m-0 font-weight-bold text-primary">
                    New Clients
                </h6>

            </div>
            <div class="card-body col-md-12">
                <form class="user" method="POST" action="{{ route('clients.store') }}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-sm-3 mb-3">
                            <input id="firstname" type="text"
                                class="form-control form-control-user @error('firstname') is-invalid @enderror"
                                name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname"
                                autofocus placeholder="First name">

                            @error('firstname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 mb-3">
                            <input id="lastname" type="text"
                                class="form-control form-control-user @error('lastname') is-invalid @enderror"
                                name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus
                                placeholder="Last name">

                            @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6 mb-3">
                            <input id="email" type="email"
                                class="form-control form-control-user @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="lastname" autofocus
                                placeholder="Email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-4 mb-3">
                            <input id="phone" type="tel"
                                class="form-control form-control-user @error('phone') is-invalid @enderror" name="phone"
                                value="{{ old('phone') }}" required autocomplete="lastname" autofocus
                                placeholder="Phone number">

                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-4 mb-3">
                            <input id="account_number" type="text"
                                class="form-control form-control-user @error('account_number') is-invalid @enderror"
                                name="account_number" value="{{ old('account_number') }}" required
                                autocomplete="account_number" autofocus placeholder="Account number">

                            @error('account_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-4 mb-3">
                            <input id="referrername" type="text"
                                class="form-control form-control-user @error('referrername') is-invalid @enderror"
                                name="referrername" value="{{ old('referrername') }}" autocomplete="referrername"
                                autofocus placeholder="Referrer name">

                            @error('referrername')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6 mb-3">
                            <input id="referrerphone" type="tel"
                                class="form-control form-control-user @error('referrerphone') is-invalid @enderror"
                                name="referrerphone" value="{{ old('referrerphone') }}" autocomplete="referrerphone"
                                autofocus placeholder="Referrer phone">

                            @error('referrerphone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6 mb-3">
                            <input id="datestarted" type="text" onblur="this.type='text'" onfocus="this.type='date'"
                                class="form-control form-control-user @error('datestarted') is-invalid @enderror"
                                name="datestarted" value="{{ old('datestarted') }}" autocomplete="datestarted" autofocus
                                placeholder="Date Started">

                            @error('datestarted')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-12 mb-3">
                            <textarea name="assetdescr" id="" cols="30" rows="5"
                                class="form-control form-control-user @error('assetdescr') is-invalid @enderror"
                                placeholder="Asset Description"
                                style="border-radius: 1em">{{ old('assetdescr') }}</textarea>
                            @error('assetdescr')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <button class="btn btn-primary btn-user text-center">
                        Register Client
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection