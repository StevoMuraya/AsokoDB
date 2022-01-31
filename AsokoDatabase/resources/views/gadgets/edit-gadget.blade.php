@extends('dash-format')

@section('content-holder')
<div class="container-fluid">
    <div class="row pt-2">
        <div class="card shadow mb-4 col-md-12">
            <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
                <h6 class="m-0 font-weight-bold text-primary">
                    Gadget {{ $gadget->Account }} Edit Details
                </h6>

            </div>
            <div class="card-body col-md-12">
                <form class="user" method="POST" action="{{ route('gadgets.update',$gadget->ID) }}">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="form-group col-sm-3 mb-3">
                            <label for="firstname">Account</label>
                            <input id="account" type="text"
                                class="form-control form-control-user @error('account') is-invalid @enderror"
                                name="account" value="{{ $gadget->Account }}" required autocomplete="account" autofocus
                                placeholder="Account">

                            @error('account')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 mb-3">
                            <label for="firstname">Phone number</label>
                            <input id="phone" type="tel"
                                class="form-control form-control-user @error('phone') is-invalid @enderror" name="phone"
                                value="{{ $gadget->gPhone }}" required autocomplete="lastname" autofocus
                                placeholder="Phone number">

                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6 mb-3">
                            <label for="firstname">Command 1</label>
                            <input id="command1" type="text"
                                class="form-control form-control-user @error('command1') is-invalid @enderror"
                                name="command1" value="{{ $gadget->Command1 }}" required autocomplete="command1"
                                autofocus placeholder="Command 1">

                            @error('command1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 mb-3">
                            <label for="firstname">Command 2</label>
                            <input id="command2" type="text"
                                class="form-control form-control-user @error('command2') is-invalid @enderror"
                                name="command2" value="{{ $gadget->Command1 }}" required placeholder="Command 2">
                            @error('command2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 mb-3">
                            <label for="firstname">Narration</label>
                            <input id="narration" type="text"
                                class="form-control form-control-user @error('narration') is-invalid @enderror"
                                name="narration" value="{{ $gadget->Command1 }}" required autocomplete="lastname"
                                autofocus placeholder="Narration">

                            @error('narration')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 mb-3">
                            <label for="count">Count</label>
                            <input id="count" type="number"
                                class="form-control form-control-user @error('count') is-invalid @enderror" name="count"
                                value="{{ $gadget->Count }}" required autocomplete="count" autofocus
                                placeholder="Count">

                            @error('count')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 mb-3">
                            <label for="firstname">Offer Command</label>
                            <input id="offerCmd" type="text"
                                class="form-control form-control-user @error('offerCmd') is-invalid @enderror"
                                name="offerCmd" value="{{ $gadget->OfferCmd }}" required autocomplete="offerCmd"
                                autofocus placeholder="Offer Command">

                            @error('offerCmd')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-4 mb-3">
                            <label for="firstname">Account Amount</label>
                            <input id="AccAmount" type="number"
                                class="form-control form-control-user @error('AccAmount') is-invalid @enderror"
                                name="AccAmount" value="{{ $gadget->AccAmount }}" required autocomplete="AccAmount"
                                autofocus placeholder="Account Amount">

                            @error('AccAmount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-8 mb-3">
                            <label for="firstname">Manager</label>
                            <input id="manager" type="number"
                                class="form-control form-control-user @error('manager') is-invalid @enderror"
                                name="manager" value="{{ $gadget->Manager }}" placeholder="Manager">

                            @error('manager')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>
                    <button class="btn btn-primary btn-user text-center">
                        Update Gadget
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection