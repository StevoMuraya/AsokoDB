@extends('dash-format')
@section('content-holder')
<div class="container-fluid">
    <div class="row pt-2">
        <form class="user" method="POST" action="{{ route('clients.update',$client->ID) }}">
            @method('PUT')
            @csrf
            <div class="card shadow mb-4 col-md-12">
                <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
                    <h6 class="m-0 font-weight-bold text-primary">
                        {{ $client->firstname }} Personal Details
                    </h6>
                </div>
                <div class="card-body col-md-12">
                    <div class="row">
                        <div class="form-group col-sm-3 mb-3">
                            <label for="firstname">First Name</label>
                            <input id="firstname" type="text"
                                class="form-control form-control-user @error('firstname') is-invalid @enderror"
                                name="firstname" value="{{ $client->firstname }}" required autocomplete="firstname"
                                autofocus placeholder="First name">

                            @error('firstname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 mb-3">
                            <label for="lastname">Last Name</label>
                            <input id="lastname" type="text"
                                class="form-control form-control-user @error('lastname') is-invalid @enderror"
                                name="lastname" value="{{ $client->lastname }}" required autocomplete="lastname"
                                autofocus placeholder="Last name">

                            @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 mb-3">
                            <label for="email">Email</label>
                            <input id="email" type="email"
                                class="form-control form-control-user @error('email') is-invalid @enderror" name="email"
                                value="{{ $client->email }}" required autocomplete="email" autofocus
                                placeholder="Email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 mb-3">
                            <label for="phone">Phone Number</label>
                            <input id="phone" type="tel"
                                class="form-control form-control-user @error('phone') is-invalid @enderror" name="phone"
                                value="{{ $client->phone }}" required autocomplete="phone" autofocus
                                placeholder="Phone number">

                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-4 mb-3">
                            <label for="account_number">Account Number</label>
                            <input id="account_number" type="text" required
                                class="form-control form-control-user @error('account_number') is-invalid @enderror"
                                name="account_number" value="{{ $client->accnumber }}" autocomplete="account_number"
                                autofocus placeholder="Account number">

                            @error('account_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-4 mb-3">
                            <label for="referrername">Referrer Name</label>
                            <input id="referrername" type="text" required
                                class="form-control form-control-user @error('referrername') is-invalid @enderror"
                                name="referrername" value="{{ $client->referrername }}" autocomplete="referrername"
                                autofocus placeholder="Referrer name">

                            @error('referrername')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-4 mb-3">
                            <label for="referrerphone">Referrer Phone Number</label>
                            <input id="referrerphone" type="tel"
                                class="form-control form-control-user @error('referrerphone') is-invalid @enderror"
                                name="referrerphone" value="{{ $client->referrerphone }}" autocomplete="referrerphone"
                                autofocus placeholder="Referrer phone">

                            @error('referrerphone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>


            <div class="card shadow mb-4 col-md-12">
                <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Other Details
                    </h6>

                </div>
                <div class="card-body col-md-12">
                    <div class="row">
                        <div class="form-group col-sm-3 mb-3">
                            <label for="category">Category</label>
                            <select name="category" id="category"
                                class="form-control form-control-user  @error('category') is-invalid @enderror"
                                style="padding: 1em 0 1em 1em; height: 4em">
                                @if ($client->category == 0 || $client->category <0) <option value="0" selected>Select
                                    Category</option>
                                    @else
                                    <option value="{{ $client->category }}">{{ $client->category }}</option>
                                    @endif
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                            </select>

                            @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 mb-3">
                            <label for="cumulativeamt">Cummulative Amount (Kshs)</label>
                            <input id="cumulativeamt" type="number" required
                                class="form-control form-control-user @error('cumulativeamt') is-invalid @enderror"
                                name="cumulativeamt" value="{{ $client->cumulativeamt }}" autocomplete="cumulativeamt"
                                autofocus placeholder="Cummulative Amount">

                            @error('cumulativeamt')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 mb-3">
                            <label for="fullamount">Full Amount (Kshs))</label>
                            <input id="fullamount" type="number" required
                                class="form-control form-control-user @error('fullamount') is-invalid @enderror"
                                name="fullamount" value="{{ $client->fullamount }}" autocomplete="fullamount" autofocus
                                placeholder="Full Amount">

                            @error('fullamount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 mb-3">
                            <label for="baseamount">Base Amount (Kshs)</label>
                            <input id="baseamount" type="tel"
                                class="form-control form-control-user @error('baseamount') is-invalid @enderror"
                                name="baseamount" value="{{ $client->baseamount }}" autocomplete="baseamount" autofocus
                                placeholder="Base Amount">

                            @error('baseamount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-4 mb-3">
                            <label for="datestarted">Date Started</label>
                            <input id="datestarted" type="date" onblur="this.type='text'" onfocus="this.type='date'"
                                class="form-control form-control-user @error('datestarted') is-invalid @enderror"
                                name="datestarted" value="{{ $client->datestarted }}" autocomplete="datestarted"
                                autofocus placeholder="Date Started">

                            @error('datestarted')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-4 mb-3">
                            <label for="trackerIMEI">Tracker IMEI</label>
                            <input id="trackerIMEI" type="text"
                                class="form-control form-control-user @error('trackerIMEI') is-invalid @enderror"
                                name="trackerIMEI" value="{{ $client->trackerIMEI }}" autocomplete="trackerIMEI"
                                autofocus placeholder="Tracker IMEI">

                            @error('trackerIMEI')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-4 mb-3">
                            <label for="trackerphone">Tracker Phone</label>
                            <input id="trackerphone" type="tel"
                                class="form-control form-control-user @error('trackerphone') is-invalid @enderror"
                                name="trackerphone" value="{{ $client->trackerphone }}" autocomplete="trackerphone"
                                autofocus placeholder="Tracker phone">

                            @error('trackerphone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-12 mb-3">
                            <label for="assetdesc">Asset Description</label>
                            <textarea id="assetdesc" name="assetdesc" id="" cols="30" rows="5"
                                class="form-control form-control-user @error('assetdesc') is-invalid @enderror"
                                placeholder="Asset Description"
                                style="border-radius: 1em">{{ $client->assetdescr }}</textarea>

                            @error('assetdesc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary btn-user btn-block">
                Update Details
            </button>
        </form>
    </div>
</div>
@endsection