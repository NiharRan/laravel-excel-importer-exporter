@extends('layouts.app')

@section('content')



    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <li class="nav-item">
            <a href="{{ route('users.create') }}" class="nav-link active">
                <span>Create New</span>
            </a>
        </li>
    </ul>
    <div class="row ">
        <div class="col-md-12">
            <div class="main-card mb-3 card ">
                <div class="card-body table-responsive">

                    @if ($records->count() > 0)
                        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0"
                            width="100%">
                            <thead>
                                <tr>
                                    <th class="th-sm">S.No</th>
                                    <th class="th-sm">Name</th>
                                    <th class="th-sm">E-mail</th>
                                    <th class="th-sm">Role</th>
                                    <th class="th-sm">Edit</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($records as $row)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->email }}</td>
                                        <td>{{ $row->role_id == 1 ? 'Admin' : 'Employee' }}</td>

                                        <td><a href="{{ route('users.edit', $row->id) }}"
                                                class="mt-1 btn btn-success">Edit</a></td>
                                    </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="th-sm">S.No</th>
                                    <th class="th-sm">Name</th>
                                    <th class="th-sm">E-mail</th>
                                    <th class="th-sm">Role</th>
                                    <th class="th-sm">Edit</th>
                                </tr>
                            </tfoot>
                        </table>

                        {{ $records->links() }}
                    @endif

                </div>
            </div>

        </div>
    </div>
@endsection
