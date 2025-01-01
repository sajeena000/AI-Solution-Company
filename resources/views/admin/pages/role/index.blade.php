@extends('admin.layouts.main')

@section('content')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <div class="d-flex justify-content-between mb-4">
                        <h6>Roles</h6>
                        <a href="{{ route('admin.role.create') }}" class="btn btn-primary">Add Role</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Permissions</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($roles as $role)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $role->name }}</td>
                                    <td> @foreach($role->permissions as $permission){{ $permission->name }} @unless($loop->last) {{", "}} @endunless @endforeach</td>
                                    <td>    
                                        <div class="d-flex gap-2">

                                            <a href="{{ route('admin.role.edit', $role->id) }}" class="text-primary">Edit</a>
                                            <form  method="POST" action="{{ route('admin.role.delete', $role->id) }}">
                                                @method('DELETE')
                                                @csrf
                                                <span onclick="handleDeleteConfirm(this.closest('form'))" class="text-danger" style="cursor:pointer">Delete</span>
                                            </form>
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

@endsection