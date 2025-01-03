@extends('admin.layouts.main')

@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <br/>
        <div class="bg-light row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="rounded h-100 p-4">
                    <h6 class="mb-4">Edit user</h6>
                    <form action="{{ route('admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') ?? $user->name }}">
                            
                            @error('name')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') ?? $user->email }}">
                            
                            @error('email')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}">
                            
                            @error('password')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}">
                            
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <select class="form-control" name="role_id">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" 
                                        {{ $role->id == $user->role_id ? "selected" : "" }}
                                        >{{ $role->name }}
                                    </option>
                                @endforeach
                            </select>
                            
                            @error('role_id')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>

                    


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
