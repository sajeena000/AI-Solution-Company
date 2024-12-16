@extends('admin.layouts.main')

@section('content')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">

                    <div class="d-flex justify-content-between mb-4">
                        <h6>Projects</h6>
                        <a href="{{ route('admin.project.create') }}" class="btn btn-primary">Add Project</a>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Thumbnail</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Year</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($projects as $project)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $project->title }}</td>
                                    <td>
                                        @if($project->thumbnail)
                                        <img src="{{ Storage::url('projects/'.$project->thumbnail) }}" style="height:100px;"/> 
                                        @endif
                                    </td>
                                    <td>
                                        @if($project->image)
                                        <img src="{{ Storage::url('projects/'.$project->image) }}" style="height:100px;"/> 
                                        @endif
                                    </td>
                                    <td>{{ $project->category }}</td>
                                    <td>{{ $project->year }}</td>
                                    <td>
                                        
                                        <div class="d-flex gap-2">
                                            <a href="{{ route('admin.project.edit', $project->id) }}">Edit</a>


                                            <form  method="POST" action="{{ route('admin.project.delete', $project->id) }}">
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
    <!-- Table End -->

<script>

</script>
@endsection
