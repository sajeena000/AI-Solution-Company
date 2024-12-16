@extends('admin.layouts.main')

@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <br/>
        
        <div class="bg-light row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="rounded h-100 p-4">
                    <h6 class="mb-4">Edit Project "{{ $project->title }}"</h6>
                    <form action="{{ route('admin.project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Enter Project Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}">
                            
                            @error('title')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <input type="text" class="form-control" id="category" name="category" value="{{ $project->category }}">
                            
                            @error('category')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="thumbnail" class="form-label">Thumbnail</label>
                            <input type="file" class="form-control" id="thumbnail" name="thumbnail" />
                            
                            @error('thumbnail')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                            @error('image')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="year" class="form-label">Year</label>
                            <input type="number" class="form-control" id="year" name="year" value="{{ $project->year }}">
                            @error('year')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Project Description</label>
                            <textarea class="form-control" id="description" name="description">{{ $project->description }}</textarea>
                            
                            @error('description')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- Form End -->
@endsection
