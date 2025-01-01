@extends('admin.layouts.main')

@section('content')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">

                    <div class="d-flex justify-content-between mb-4">
                        <h6>users</h6>
                        <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Add user</a>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <form action="{{ route('admin.role.user-role', $user->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <select class="form-control" name="role_id"
                                                    onchange="this.closest('form').submit()">
                                                    <option value="">--select--</option>
                                                    @foreach ($roles as $role)
                                                        <option value="{{ $role->id }}" @selected($user->role_id === $role->id)>{{ $role->name }}</option>
                                                    @endforeach
                                                </select>
                                            </form>


                                        </td>
                                        <td>{{ $user->created_at ? date('M d, Y', strtotime($user->created_at)) : '-' }}
                                        </td>
                                        <td>

                                            <div class="d-flex gap-2">
                                                <a href="{{ route('admin.users.edit', $user->id) }}">Edit</a>
                                                @if ($user->role != 'superadmin')
                                                    <form method="POST"
                                                        action="{{ route('admin.users.delete', $user->id) }}">
                                                        @method('DELETE')
                                                        @csrf
                                                        <span onclick="handleDeleteConfirm(this.closest('form'))"
                                                            class="text-danger" style="cursor:pointer">Delete</span>
                                                    </form>
                                                @endif
                                            </div>
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
    <!-- Table End -->

    <script></script>
@endsection
