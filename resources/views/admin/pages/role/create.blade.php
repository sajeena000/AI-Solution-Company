@extends('admin.layouts.main')

@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <br/>
        
        <div class="bg-light row g-4">
            <div class="col-sm-12 col-xl-4">
                <div class="rounded h-100 p-4">
                    <h6 class="mb-4">Create Project</h6>
                    <form action="{{ route('admin.role.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

         
                        <div class="mb-3">
                            <label for="name" class="form-label">Role Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                            
                            @error('name')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>


                        <div class="mb-3">
                            @foreach($permissions as $permission)
                            
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{$permission->id}}" name="permissions[]" id="permissionCheck_{{$permission->id}}">
                                <label class="form-check-label" for="permissionCheck_{{$permission->id}}">
                                  {{Str::title(str_replace("_", " ", $permission->name)) }}
                                </label>
                              </div>

                            @endforeach 
                        </div>

                       

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- Form End -->
@endsection
