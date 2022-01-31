@extends('dash-format')

@section('content-holder')
<div class="container-fluid">
    <div class="row pt-2">
        <div class="card shadow mb-4 col-md-12">
            <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
                <h6 class="m-0 font-weight-bold text-primary">
                    New Gaget Registration
                </h6>

            </div>
            <div class="card-body col-md-12">
                <form class="user" method="POST" action="{{ route('gadgets.store') }}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-sm-3 mb-3">
                            <input id="account" type="text"
                                class="form-control form-control-user @error('account') is-invalid @enderror"
                                name="account" value="{{ old('account') }}" required autocomplete="account" autofocus
                                placeholder="Account">

                            @error('account')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 mb-3">
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
                        <div class="form-group col-sm-6 mb-3">
                            <input id="command1" type="text"
                                class="form-control form-control-user @error('command1') is-invalid @enderror"
                                name="command1" value="{{ old('command1') }}" required autocomplete="command1" autofocus
                                placeholder="Command 1">

                            @error('command1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 mb-3">
                            <input id="command2" type="text"
                                class="form-control form-control-user @error('command2') is-invalid @enderror"
                                name="command2" value="{{ old('command2') }}" required placeholder="Command 2">

                            @error('command2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 mb-3">
                            <input id="narration" type="text"
                                class="form-control form-control-user @error('narration') is-invalid @enderror"
                                name="narration" value="{{ old('narration') }}" required autocomplete="lastname"
                                autofocus placeholder="Narration">

                            @error('narration')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 mb-3">
                            <input id="count" type="number"
                                class="form-control form-control-user @error('count') is-invalid @enderror" name="count"
                                value="{{ old('count') }}" required autocomplete="count" autofocus placeholder="Count">

                            @error('count')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 mb-3">
                            <input id="offerCmd" type="text"
                                class="form-control form-control-user @error('offerCmd') is-invalid @enderror"
                                name="offerCmd" value="{{ old('offerCmd') }}" required autocomplete="offerCmd" autofocus
                                placeholder="Offer Command">

                            @error('offerCmd')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-4 mb-3">
                            <input id="AccAmount" type="number"
                                class="form-control form-control-user @error('AccAmount') is-invalid @enderror"
                                name="AccAmount" value="{{ old('AccAmount') }}" required autocomplete="AccAmount"
                                autofocus placeholder="Account Amount">

                            @error('AccAmount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-4 mb-3">
                            <input id="manager" type="number"
                                class="form-control form-control-user @error('manager') is-invalid @enderror"
                                name="manager" value="{{ old('manager') }}" placeholder="Manager">

                            @error('manager')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-4 mb-3">
                            <input id="password" type="password"
                                class="form-control form-control-user @error('password') is-invalid @enderror"
                                name="password" value="" required autocomplete="password" autofocus
                                placeholder="Password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <button class="btn btn-primary btn-user text-center">
                        Register Gadget
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection