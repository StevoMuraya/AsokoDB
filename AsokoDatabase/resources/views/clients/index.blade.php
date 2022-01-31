@extends('dash-format')

@section('content-holder')
<div class="container-fluid">
    <div class="row pt-2">
        <div class="card shadow mb-4 col-md-12">
            <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
                <h6 class="m-0 font-weight-bold text-primary">
                    Clients
                </h6>
                <div>
                    <a href="{{ route('clients.create') }}"
                        class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                        New Client
                    </a>
                    <a href="{{ route('deleted-clients') }}"
                        class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                        Deleted Clients
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive" style="overflow-x: unset">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Acc. No.</th>
                                <th>Asset Desc</th>
                                <th>Acc. Bal.</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Acc. No.</th>
                                <th>Asset Desc</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($astrackClients as $astrackClient)
                            <tr>
                                <td>{{ $astrackClient->firstname }} {{ $astrackClient->lastname }}</td>
                                <td>{{ $astrackClient->phone }}</td>
                                <td>{{ $astrackClient->email }}</td>
                                <td>{{ $astrackClient->accnumber }}</td>
                                <td>{{ $astrackClient->assetdescr }}</td>
                                <td>Kshs {{ $astrackClient->accbal }}</td>
                                <td class="bg-info text-gray-100 text-center" style="cursor: pointer;"
                                    onclick="document.location='{{ route('clients.edit',$astrackClient->ID) }}'">Edit
                                </td>
                                <td class="bg-danger text-gray-100" style="cursor: pointer">
                                    <form action="{{ route('clients.destroy',$astrackClient->ID) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="text" name="delete_task" hidden value="delete"
                                            style="display: none">
                                        <button type="submit"
                                            style="background:#e74a3b;width:100%;border:none;color:white;height:100%;display: flex;justify-content: center;align-items: center"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection