@extends('admin.layouts.main')

@section('content')
    <!-- Edit Blog Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-lg-8 mx-auto">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Edit Blog "{{ $blog->title }}"</h6>
                    
                    <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter blog title" value="{{ old('title', $blog->title) }}">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <input type="text" class="form-control" id="category" name="category" placeholder="Enter blog category" value="{{ old('category', $blog->category) }}">
                            @error('category')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="author" class="form-label">Author</label>
                            <input type="text" class="form-control" id="author" name="author" placeholder="Enter author name" value="{{ old('author', $blog->author) }}">
                            @error('author')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="thumbnail" class="form-label">Thumbnail</label>
                            @if($blog->thumbnail)
                                <img src="{{ asset('storage/' . $blog->thumbnail) }}" alt="Thumbnail" class="mb-2" style="height:100px;">
                            @endif
                            <input type="file" class="form-control" id="thumbnail" name="thumbnail" accept="image/*">
                            @error('thumbnail')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" id="content" name="content" rows="5" placeholder="Enter blog content">{{ old('content', $blog->content) }}</textarea>
                            @error('content')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="1" {{ old('status', $blog->status) == '1' ? 'selected' : '' }}>Published</option>
                                <option value="0" {{ old('status', $blog->status) == '0' ? 'selected' : '' }}>Draft</option>
                            </select>
                            @error('status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        CKEDITOR.replace( 'content', {
            toolbar: [
            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike'] },
            { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
            { name: 'insert', items: ['Link'] },
            { name: 'styles', items: ['Format'] },
            { name: 'colors', items: ['TextColor', 'BGColor'] },
            { name: 'undo', items: ['Undo', 'Redo'] }
        ],
            height: 300
        } );
    </script>
@endsection
