@extends('dash-format')

@section('content-holder')
<div class="container-fluid">
    <div class="row pt-2">
        <div class="card shadow mb-4 col-md-12">
            <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
                <h6 class="m-0 font-weight-bold text-primary">
                    Agents
                </h6>
                <div>
                    <a href="{{ route('agents.index') }}"
                        class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                        Back to Agents
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive" style="overflow-x: unset">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Phone</th>
                                <th>Location</th>
                                <th>Percent</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Phone</th>
                                <th>Location</th>
                                <th>Percent</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($agents as $agent)
                            <tr>
                                <td>{{ $agent->A_FirstName }} {{ $agent->A_OtherNames }}</td>
                                <td>{{ $agent->A_Code }}</td>
                                <td>{{ $agent->A_PhoneNumber }}</td>
                                <td>{{ $agent->A_Location }}</td>
                                <td>{{ $agent->A_Percentage }}%</td>
                                <td class="bg-danger text-gray-100" style="cursor: pointer">
                                    <form action="{{ route('agents.destroy',$agent->ID) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="text" name="delete_task" hidden value="restore"
                                            style="display: none">
                                        <button type="submit"
                                            style="background:#e74a3b;width:100%;border:none;color:white;height:100%;display: flex;justify-content: center;align-items: center"
                                            onclick="return confirm('Are you sure?')">Restore to Database</button>
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