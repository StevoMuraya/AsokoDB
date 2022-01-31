@extends('dash-format')

@section('content-holder')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Astrack Clients</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($astrack_clients)
                                }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Astrack Agents</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($agents) }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Astrack Transactions
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        {{ count($astrack_transactions2) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Astrack Gadgets</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ count($gadgets) }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Astrack Mpesa Transactions</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ count($mpesatransc) }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Transaction Contributions</h6>
                </div>
                <div class="card-body">
                    @php
                    $total_cash = 0;
                    $count = 1;
                    @endphp

                    @foreach ($astrack_transactions as $cash)
                    @php
                    $total_cash = $total_cash + $cash->total;
                    @endphp
                    @endforeach
                    @foreach ($astrack_transactions as $astrack_transactions2)
                    <h4 class="small font-weight-bold">
                        {{ $astrack_transactions2->firstname }} ({{ "Kshs ".$astrack_transactions2->total
                        }})
                        <span class="float-right">

                            @php
                            $percent = (($astrack_transactions2->total/$total_cash)*100);
                            $percent = round($percent, 2);
                            $percent2 = round($percent, 0);

                            $style = "bg-success";

                            if ($count == 1) {
                            $style = "bg-success";
                            }elseif ($count == 2) {
                            $style = "bg-info";
                            }elseif ($count == 3) {
                            $style = "bg-primary";
                            }elseif ($count == 4) {
                            $style = "bg-warning";
                            }elseif ($count == 5) {
                            $style = "bg-danger";
                            }
                            $count+=1;

                            @endphp
                            {{ $percent."%" }}

                        </span>
                    </h4>
                    <div class="progress mb-4">
                        <div class="progress-bar {{ $style }}" role="progressbar" style="width: {{ $percent2 }}%"
                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    @endforeach
                    @php
                    unset($count);
                    @endphp

                    <a href="{{ route('transactions.index') }}" class="text-center">View All</a>
                </div>
            </div>


        </div>

        <div class="col-lg-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Jump-In-Tables</h6>
                </div>
                <div class="card-body">

                    <!-- Color System -->
                    <div class="row">
                        <div class="col-lg-6 mb-4" onclick="document.location='{{ route('clients.index') }}'">
                            <div class="card bg-primary text-white shadow">
                                <div class="card-body">
                                    Astrack Clients
                                    <div class="text-white-50 small">Click Here to open</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4" onclick="document.location='{{ route('agents.index') }}'">
                            <div class="card bg-danger text-white shadow">
                                <div class="card-body">
                                    Astrack Agents
                                    <div class="text-white-50 small">Click Here to open</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4" onclick="document.location='{{ route('transactions.index') }}'">
                            <div class="card bg-info text-white shadow">
                                <div class="card-body">
                                    Astrack Transactions
                                    <div class="text-white-50 small">Click Here to open</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4" onclick="document.location='{{ route('gadgets.index') }}'">
                            <div class="card bg-warning text-white shadow">
                                <div class="card-body">
                                    Astrack Gagets
                                    <div class="text-white-50 small">Click Here to open</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4"
                            onclick="document.location='{{ route('mpesa-transactions.index') }}'">
                            <div class="card bg-success text-white shadow">
                                <div class="card-body">
                                    Astrack Mpesa Tranactions
                                    <div class="text-white-50 small">Click Here to open</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<script>

</script>
@endsection