@extends('frontend.layouts.main')
@section('content')

<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <h1 class="text-capitalize mb-4 text-lg">{{ $event->title }}</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="{{ route('frontend.home') }}" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="{{ route('frontend.events') }}" class="text-white">Events</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item text-white-50">{{ $event->title }}</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section blog-wrap bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="single-event-item">
          <img loading="lazy" 
               src="{{ $event->image ? Storage::url('events/' . $event->image) : asset('images/default-event.jpg') }}" 
               alt="{{ $event->title }}" 
               class="img-fluid rounded mb-4">
          
          <div class="event-meta mb-4">
            <span class="text-muted d-block mb-2"><i class="ti-calendar"></i> {{ \Carbon\Carbon::parse($event->date)->format('F d, Y') }}</span>
            <span class="text-muted d-block"><i class="ti-location-pin"></i> {{ $event->location }}</span>
          </div>

          <h2 class="mb-4">{{ $event->title }}</h2>
          <p>{!! nl2br(e($event->description)) !!}</p>
        </div>
      </div>

      <!-- Sidebar -->
      {{-- <div class="col-lg-4">
        <div class="sidebar-wrap">
          <div class="sidebar-widget latest-post card border-0 p-4 mb-3">
            <h5>Upcoming Events</h5>
            @foreach($upcomingEvents as $upcomingEvent)
            <div class="media border-bottom py-3">
              <a href="{{ route('frontend.events.detail', $upcomingEvent->slug ?? $upcomingEvent->id) }}">
                <img src="{{ $upcomingEvent->image ? Storage::url('events/' . $upcomingEvent->image) : asset('images/default-event.jpg') }}" 
                     class="mr-4" 
                     style="width: 80px; height: 80px;" 
                     alt="{{ $upcomingEvent->title }}">
              </a>
              <div class="media-body">
                <h6 class="my-2"><a href="{{ route('frontend.events.detail', $upcomingEvent->slug ?? $upcomingEvent->id) }}">{{ $upcomingEvent->title }}</a></h6>
                <span class="text-sm text-muted">{{ \Carbon\Carbon::parse($upcomingEvent->date)->format('M d, Y') }}</span>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div> --}}
    </div>
  </div>
</section>

@endsection
