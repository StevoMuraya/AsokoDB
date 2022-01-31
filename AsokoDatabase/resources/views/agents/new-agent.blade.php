@extends('dash-format')

@section('content-holder')
<div class="container-fluid">
    <div class="row pt-2">
        <div class="card shadow mb-4 col-md-12">
            <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
                <h6 class="m-0 font-weight-bold text-primary">
                    New Agent Registration
                </h6>

            </div>
            <div class="card-body col-md-12">
                <form class="user" method="POST" action="{{ route('agents.store') }}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-sm-3 mb-3">
                            <input id="agent_code" type="text"
                                class="form-control form-control-user @error('agent_code') is-invalid @enderror"
                                name="agent_code" value="{{ old('agent_code') }}" required autocomplete="agent_code"
                                autofocus placeholder="Agent Code">

                            @error('agent_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
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
                        <div class="form-group col-sm-6 mb-3">
                            <input id="othernames" type="text"
                                class="form-control form-control-user @error('othernames') is-invalid @enderror"
                                name="othernames" value="{{ old('othernames') }}" required autocomplete="othernames"
                                autofocus placeholder="Other names">

                            @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 mb-3">
                            <input id="id_num" type="number"
                                class="form-control form-control-user @error('id_num') is-invalid @enderror"
                                name="id_num" value="{{ old('id_num') }}" required autocomplete="lastname" autofocus
                                placeholder="ID number">

                            @error('id_num')
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
                        <div class="form-group col-sm-3 mb-3">
                            <input id="percent" type="number"
                                class="form-control form-control-user @error('percent') is-invalid @enderror"
                                name="percent" value="{{ old('percent') }}" required autocomplete="percent" autofocus
                                placeholder="Agent percent">

                            @error('percent')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 mb-3">
                            <input id="balance" type="number"
                                class="form-control form-control-user @error('balance') is-invalid @enderror"
                                name="balance" value="{{ old('balance') }}" required autocomplete="balance" autofocus
                                placeholder="Agent balance">

                            @error('balance')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-4 mb-3">
                            <input id="location" type="text"
                                class="form-control form-control-user @error('location') is-invalid @enderror"
                                name="location" value="{{ old('location') }}" required autocomplete="location" autofocus
                                placeholder="Location">

                            @error('location')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-4 mb-3">
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
                        Register Agent
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection