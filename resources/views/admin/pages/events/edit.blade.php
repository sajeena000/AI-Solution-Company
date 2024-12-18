@extends('admin.layouts.main')

@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <br/>
        
        <div class="bg-light row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="rounded h-100 p-4">
                    <h6 class="mb-4">Edit Event"{{ $event->title }}"</h6>
                    <form action="{{ route('admin.events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Event Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $event->title }}">
                            
                            @error('title')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" class="form-control" id="date" name="date" value="{{ $event->date }}">
                            
                            @error('date')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control" id="location" name="location" value="{{ $event->location }}">
                            
                            @error('location')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Event Image</label>
                            @if($event->image)
                                <img src="{{ Storage::url('events/' . $event->image) }}" alt="Event Image" class="mb-2" style="height:100px;">
                            @endif
                            <input type="file" class="form-control" id="image" name="image">
                            @error('image')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Event Description</label>
                            <textarea class="form-control" id="description" name="description">{{ $event->description }}</textarea>
                            
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

@endsection
