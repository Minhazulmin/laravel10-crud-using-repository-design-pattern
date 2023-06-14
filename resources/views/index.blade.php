@extends('layouts.app')
@section('title', 'MIN IT')

@section('minhaz')
    <div class="row mt-5">
        <div class="col-lg-3">

        </div>
        <div class="col-lg-6 shadow mt-5 p-5">
            <div class="form-group   d-flex">
                <h5 class="w-50">User List</h5>
                <div class="input-group justify-content-md-end">
                    <a href="{{ route('user.create') }}" class="btn btn-outline-info d-flex"><span
                            class="material-icons fs-6 p-1">
                            group_add
                        </span> Add
                        User </a>
                </div>

            </div>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($users) > 0)
                        @foreach ($users as $key => $user)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <span class="badge rounded-pill text-bg-success">Active</span>
                                </td>
                                <td>
                                    <a href="{{ route('user.show', $user->id) }}"
                                        class="btn btn-outline-info btn-sm">view</a>
                                    <a href="{{ route('user.edit', $user->id) }}"
                                        class="btn btn-outline-primary btn-sm">Edit</a>
                                    <a href="{{ route('user.distroy', $user->id) }}"
                                        class="btn btn-outline-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">
                                <h4 class="p-5 shadow-sm text-center">No Data</h4>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
            <div class=" mt-5">
                {!! $users->links('partials.pagination') !!}
            </div>
        </div>
        <div class="col-lg-3">

        </div>
    </div>

@endsection
