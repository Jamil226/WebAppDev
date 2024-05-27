@extends('backend.layouts.main')
@section('title', 'Team Members List')
@section('main-container')
            <div class="container-fluid"><br>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-info"><a class="text-info" href="{{url('/admin')}}">Main Menu</a> | Team Members List</h6>
                        <a href="{{url('/admin/team-add')}}" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm float-right"><i
                        class="fas fa-plus fa-sm text-white-50"></i>Add New Member</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Designation</th>
                                    <th>Profile</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th width="160px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($team as $team)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $team->id }}</td>
                                    <td>
                                        <a class="text-dark" href="/admin/team-member-details/{{ $team->id }}">
                                            {{ $team->fullname }}
                                        </a>
                                    </td>
                                    <td>{{ $team->designation }}</td>
                                    <td>{{ $team->shortintro }}</td>
                                    <td>
                                        <img src="/backend/images/team/{{$team->image}}" class="rounded-circle" width="50px" height="50px" alt="Image Not Found">
                                    </td>
                                    <td>
                                        @if($team->status == 1)
                                            <a href="">
                                                <span class="badge badge-success p-2">Active</span>
                                            </a>
                                        @else
                                        <a href="">
                                            <span class="badge badge-danger p-2">Disabled</span>
                                        </a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="#">
                                            <a href="/admin/team-edit/{{ $team->id }}" class="btn btn-success btn-circle btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </a>
                                        {{-- <a href="/admin/team-delete/{{ $team->id }}" class="btn btn-danger btn-circle btn-sm" onClick="return confirm('Are you sure you want to Delete Record')"; title="Delete Record">
                                            <i class="fas fa-trash"></i>
                                        </a> --}}
                                        <form method="post" class="d-inline" action="/admin/team-delete/{{ $team->id }}">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-circle btn-sm" onClick="return confirm('Are you sure you want to Delete Record')"; title="Delete Record"><i class="fas fa-trash"></i></button>

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
