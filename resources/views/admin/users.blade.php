@extends('layouts.adminUI')

@section('pageName')
Users
@endsection

@section('content')
<div class="row mt-5 pb-5 mx-3">
    <h2><b>Registered Users</b></h2>
    <hr>
    <div class="row table-responsive">
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Is Admin</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            @if ($user->status == false)
                                <span class="badge badge-danger rounded-pill d-inline">Inactive</span>
                            @else
                                <span class="badge badge-success rounded-pill d-inline">Active</span>
                            @endif
                        </td>
                        <td>
                            @if ($user->is_admin == false)
                                <span class="badge badge-danger rounded-pill d-inline">No</span>
                            @else
                                <span class="badge badge-success rounded-pill d-inline">Yes</span>
                            @endif
                        </td>
                        <td>
                            @if (auth()->user()->id != $user->id)
                                @if ($user->is_admin == false)
                                    <a href="{{ route('user.makeAdmin', $user->id)}}">
                                        <button type="button" class="btn btn-success btn-rounded btn-sm fw-bold"
                                            data-mdb-ripple-color="dark">
                                            Make Admin
                                        </button>
                                    </a>
                                @else
                                    <a href="{{ route('user.revokeAdmin', $user->id)}}">
                                        <button type="button" class="btn btn-warning btn-rounded btn-sm fw-bold"
                                            data-mdb-ripple-color="dark">
                                            Revoke Admin
                                        </button>
                                    </a>
                                @endif                             @else
                                <span class="badge badge-success rounded-pill d-inline">You</span>
                            @endif                      
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>there are no users Registered.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection