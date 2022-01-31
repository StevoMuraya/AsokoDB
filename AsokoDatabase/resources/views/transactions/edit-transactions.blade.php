@extends('dash-format')

@section('content-holder')
<div class="container-fluid">
    <div class="row pt-2">
        <div class="card shadow mb-4 col-md-12">
            <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ $transaction->firstname }} Transaction Details
                </h6>

            </div>
            <div class="card-body col-md-12">
                <form class="user" method="POST" action="{{ route('transactions.update',$transaction->ID) }}">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="form-group col-sm-3 mb-3">
                            <label for="firstname">First name</label>
                            <input id="firstname" type="text"
                                class="form-control form-control-user @error('firstname') is-invalid @enderror"
                                name="firstname" value="{{ $transaction->firstname }}" required autocomplete="firstname"
                                autofocus placeholder="First name" disabled>

                            @error('firstname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 mb-3">
                            <label for="lastname">Last name</label>
                            <input id="lastname" type="text"
                                class="form-control form-control-user @error('lastname') is-invalid @enderror"
                                name="lastname" value="{{ $transaction->lastname }}" required autocomplete="lastname"
                                autofocus placeholder="Last name" disabled>

                            @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6 mb-3">
                            <label for="phone">Phone number</label>
                            <input id="phone" type="tel"
                                class="form-control form-control-user @error('phone') is-invalid @enderror" name="phone"
                                value="{{ $transaction->phone }}" required autocomplete="lastname" autofocus
                                placeholder="Phone number" disabled>

                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-4 mb-3">
                            <label for="accnumber">Acc. No.</label>
                            <input id="accnumber" type="text"
                                class="form-control form-control-user @error('accnumber') is-invalid @enderror"
                                name="accnumber" value="{{ $transaction->accnumber }}" required autocomplete="accnumber"
                                autofocus placeholder="Account Number">

                            @error('accnumber')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 mb-3">
                            <label for="amount">Amount(Kshs)</label>
                            <input id="amount" type="number"
                                class="form-control form-control-user @error('amount') is-invalid @enderror"
                                name="amount" value="{{ $transaction->amount }}" required placeholder="Amount">
                            @error('amount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-5 mb-3">
                            <label for="transdate">Transaction date</label>
                            <input id="transdate" type="text" disabled
                                class="form-control form-control-user @error('transdate') is-invalid @enderror"
                                name="transdate" value="{{ $transaction->transdate }}" required autocomplete="transdate"
                                autofocus placeholder="transdate">

                            @error('transdate')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>
                    <button class="btn btn-primary btn-user text-center">
                        Update transaction
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection