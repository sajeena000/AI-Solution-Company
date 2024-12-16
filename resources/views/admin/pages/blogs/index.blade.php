@extends('admin.layouts.main')

@section('content')
    <!-- Blog Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">

                    <!-- Header Section -->
                    <div class="d-flex justify-content-between mb-4">
                        <h6>Blogs</h6>
                        <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">Add Blog</a>
                    </div>

                    <!-- Blog Table -->
                    <div class="table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Thumbnail</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($blogs as $blog)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ $blog->category }}</td>
                                    <td>{{ $blog->author ?? 'Unknown' }}</td>
                                    <td>
                                        @if($blog->thumbnail)
                                            <img src="{{ Storage::url('blogs/' . $blog->thumbnail) }}" style="height:50px;" alt="Thumbnail">
                                        @else
                                            <span class="text-muted">No Thumbnail</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($blog->status)
                                            <span class="badge bg-success">Published</span>
                                        @else
                                            <span class="badge bg-danger">Draft</span>
                                        @endif
                                    </td>
                                    <td>

                                        <div class="d-flex gap-2">
                                            <a href="{{ route('admin.blogs.edit', $blog->id) }}">Edit</a>
                                        
                                            <form  method="POST" action="{{ route('admin.blogs.delete', $blog->id) }}">
                                                @method('DELETE')
                                                @csrf
                                            <span onclick="handleDeleteConfirm(this.closest('form'))" class="text-danger" style="cursor:pointer">Delete</span>
                                            </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center">No blogs found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-center mt-3">
                        {{ $blogs->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Blog Table End -->
@endsection
