@extends('admin.layouts.main')

@section('content')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">

                    <div class="d-flex justify-content-between mb-4">
                        <h6>Events</h6>
                        <a href="{{ route('admin.events.create') }}" class="btn btn-primary">Add Event</a>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($events as $event)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $event->title }}</td>
                                    <td>{{ $event->date }}</td>
                                    <td>{{ $event->location }}</td>
                                    <td>
                                        @if($event->image)
                                        <img src="{{ Storage::url('events/'.$event->image) }}" style="height:100px;" alt="Event Image"/> 
                                        @else
                                        <span class="text-muted">No Image</span>
                                        @endif
                                    </td>
                                    <td>
                                        
                                        <div class="d-flex gap-2">
                                            <a href="{{ route('admin.events.edit', $event->id) }}">Edit</a>
                                            <form  method="POST" action="{{ route('admin.events.delete', $event->id) }}">
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
