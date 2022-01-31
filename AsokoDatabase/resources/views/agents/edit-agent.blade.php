@extends('dash-format')

@section('content-holder')
<div class="container-fluid">
    <div class="row pt-2">
        <div class="card shadow mb-4 col-md-12">
            <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ $agent->A_FirstName }} Edit Details
                </h6>

            </div>
            <div class="card-body col-md-12">
                <form class="user" method="POST" action="{{ route('agents.update',$agent->ID) }}">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="form-group col-sm-3 mb-3">
                            <label for="firstname">Agent Code</label>
                            <input id="agent_code" type="text"
                                class="form-control form-control-user @error('agent_code') is-invalid @enderror"
                                name="agent_code" value="{{ $agent->A_Code }}" required autocomplete="agent_code"
                                autofocus placeholder="Agent Code">

                            @error('agent_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 mb-3">
                            <label for="firstname">First Name</label>
                            <input id="firstname" type="text"
                                class="form-control form-control-user @error('firstname') is-invalid @enderror"
                                name="firstname" value="{{ $agent->A_FirstName }}" required autocomplete="firstname"
                                autofocus placeholder="First name">

                            @error('firstname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6 mb-3">
                            <label for="firstname">Other names</label>
                            <input id="othernames" type="text"
                                class="form-control form-control-user @error('othernames') is-invalid @enderror"
                                name="othernames" value="{{ $agent->A_OtherNames }}" required autocomplete="othernames"
                                autofocus placeholder="Other names">

                            @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 mb-3">
                            <label for="firstname">ID number</label>
                            <input id="id_num" type="number"
                                class="form-control form-control-user @error('id_num') is-invalid @enderror"
                                name="id_num" value="{{ $agent->A_IDNumber }}" required autocomplete="lastname"
                                autofocus placeholder="ID number">

                            @error('id_num')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 mb-3">
                            <label for="firstname">Phone number</label>
                            <input id="phone" type="tel"
                                class="form-control form-control-user @error('phone') is-invalid @enderror" name="phone"
                                value="{{ $agent->A_PhoneNumber }}" required autocomplete="lastname" autofocus
                                placeholder="Phone number">

                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 mb-3">
                            <label for="firstname">Agent percent</label>
                            <input id="percent" type="number"
                                class="form-control form-control-user @error('percent') is-invalid @enderror"
                                name="percent" value="{{ $agent->A_Percentage }}" required autocomplete="percent"
                                autofocus placeholder="Agent percent">

                            @error('percent')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 mb-3">
                            <label for="firstname">Agent balance</label>
                            <input id="balance" type="number"
                                class="form-control form-control-user @error('balance') is-invalid @enderror"
                                name="balance" value="{{ $agent->A_balance }}" required autocomplete="balance" autofocus
                                placeholder="Agent balance">

                            @error('balance')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-4 mb-3">
                            <label for="firstname">Location</label>
                            <input id="location" type="text"
                                class="form-control form-control-user @error('location') is-invalid @enderror"
                                name="location" value="{{ $agent->A_Location }}" required autocomplete="location"
                                autofocus placeholder="Location">

                            @error('location')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-4 mb-3">
                            <label for="firstname">Date Started</label>
                            <input id="datestarted" type="text" onblur="this.type='text'" onfocus="this.type='date'"
                                class="form-control form-control-user @error('datestarted') is-invalid @enderror"
                                name="datestarted" value="{{ $agent->DateStarted }}" autocomplete="datestarted"
                                autofocus placeholder="Date Started">

                            @error('datestarted')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <button class="btn btn-primary btn-user text-center">
                        Upadate Details
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection