@extends('frontend.layouts.main')
@section('content')

<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Events</span>
          <h1 class="text-capitalize mb-4 text-lg">Event Highlights</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="{{ route('frontend.home') }}" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item text-white-50">Event Highlights</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Upcoming Events Section -->
<section class="section bg-white">
	<div class="container">
	  <div class="row justify-content-center mb-4">
		<div class="col-lg-8 text-center">
		  <div class="section-title">
			<h2 class="mt-3 content-title">Upcoming Events</h2>
			<p>Don't miss out on our upcoming events!</p>
		  </div>
		</div>
	  </div>
  
	  <div class="row">
		@if($events->isEmpty())
			<p class="text-center w-100">No upcoming events at the moment.</p>
		@else
			@foreach($events as $upcomingEvent)
			<div class="col-lg-4 col-md-6 mb-5">
			  <div class="event-item">
				<img loading="lazy" 
                 src="{{ Storage::url('events/' . $upcomingEvent->image) }}" 
                  alt="{{ $upcomingEvent->title }}" 
                  class="img-fluid rounded">

				<div class="event-item-content bg-white">
				  <div class="event-item-meta py-1 px-2">
					<span class="text-muted text-capitalize mr-3">
					  <i class="ti-calendar mr-2"></i>{{ \Carbon\Carbon::parse($upcomingEvent->date)->format('F d, Y') }}
					</span>
					<span class="text-muted text-capitalize">
					  <i class="ti-location-pin mr-2"></i>{{ $upcomingEvent->location }}
					</span>
				  </div>
				  <h5 class="mt-3 mb-3">
					<a href="{{ route('frontend.events.detail', $upcomingEvent->slug ?? $upcomingEvent->id) }}">{{ $upcomingEvent->title }}</a>
				  </h5>
				  <p class="mb-4">{{ Str::limit($upcomingEvent->description, 100) }}</p>
				  <a href="{{ route('frontend.events.detail', $upcomingEvent->slug ?? $upcomingEvent->id) }}" class="btn btn-small btn-main btn-round-full">Learn More</a>
				</div>
			  </div>
			</div>
			@endforeach
		@endif
	  </div>
	</div>
</section>

<section class="section bg-white" style="padding:32px 0">
	<div class="container">
	  <div class="row justify-content-center mb-4">
		<div class="col-lg-8 text-center">
		  <div class="section-title">
			<h2 class="mt-3 content-title">Our Past Events</h2>
                    <p>Explore the highlights and memories from our successful past events!</p>
                </div>
		</div>
	  </div>
  
	  <div class="row">
		@if($pastEvents->isEmpty())
			<p class="text-center w-100">No past pastEvents at the moment.</p>
		@else
			@foreach($pastEvents as $pastEvent)
			<div class="col-lg-4 col-md-6 mb-5">
			  <div class="event-item">
				<img loading="lazy" 
                 src="{{ Storage::url('events/' . $pastEvent->image) }}" 
                  alt="{{ $pastEvent->title }}" 
                  class="img-fluid rounded">

				<div class="event-item-content bg-white">
				  <div class="event-item-meta py-1 px-2">
					<span class="text-muted text-capitalize mr-3">
					  <i class="ti-calendar mr-2"></i>{{ \Carbon\Carbon::parse($pastEvent->date)->format('F d, Y') }}
					</span>
					<span class="text-muted text-capitalize">
					  <i class="ti-location-pin mr-2"></i>{{ $pastEvent->location }}
					</span>
				  </div>
				  <h5 class="mt-3 mb-3">
					<a href="{{ route('frontend.events.detail', $pastEvent->slug ?? $pastEvent->id) }}">{{ $pastEvent->title }}</a>
				  </h5>
				  <p class="mb-4">{{ Str::limit($pastEvent->description, 100) }}</p>
				  <a href="{{ route('frontend.events.detail', $pastEvent->slug ?? $pastEvent->id) }}" class="btn btn-small btn-main btn-round-full">Learn More</a>
				</div>
			  </div>
			</div>
			@endforeach
		@endif
	  </div>
	</div>
</section>

<!-- All Events Section -->
{{-- <section class="section blog-wrap bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="row">
					@if($events->isEmpty())
						<p class="text-center w-100">No events available.</p>
					@else
						@foreach($events as $event)
						<div class="col-lg-6 col-md-6 mb-5">
							<div class="event-item">
								<img loading="lazy" 
                                     src="{{ $event->image ? Storage::url('events/' . $event->image) : asset('images/default-event.jpg') }}" 
                                     alt="{{ $event->title }}" 
                                     class="img-fluid rounded">
								<div class="event-item-content bg-white p-4">
									<div class="event-item-meta py-1 px-2">
										<span class="text-muted text-capitalize mr-3">
											<i class="ti-calendar mr-2"></i>{{ \Carbon\Carbon::parse($event->date)->format('F d, Y') }}
										</span>
										<span class="text-muted text-capitalize">
											<i class="ti-location-pin mr-2"></i>{{ $event->location }}
										</span>
									</div>
									<h3 class="mt-3 mb-3">
										<a href="{{ route('frontend.events.detail', $event->slug ?? $event->id) }}">{{ $event->title }}</a>
									</h3>
									<p class="mb-4">{{ Str::limit($event->description, 100) }}</p>
									<a href="{{ route('frontend.events.detail', $event->slug ?? $event->id) }}" class="btn btn-small btn-main btn-round-full">Learn More</a>
								</div>
							</div>
						</div>
						@endforeach
					@endif
				</div>
				
				<div class="col-lg-12 mt-3">
					<nav class="navigation pagination py-2 d-inline-block">
						<div class="nav-links">
							{{ $events->links() }} 
						</div>
					</nav>
				</div>
			</div>
	
			<!-- Sidebar -->
			{{-- <div class="col-lg-4 mt-5 mt-lg-0">
				<div class="sidebar-wrap">
					<div class="sidebar-widget search card p-4 mb-3 border-0">
						<input type="text" class="form-control" placeholder="Search">
						<a href="#" class="btn btn-main btn-small d-block mt-2">Search</a>
					</div>
	
					<div class="sidebar-widget latest-post card border-0 p-4 mb-3">
						<h5>Latest Events</h5>
						@foreach($latestEvents as $latestEvent)
						<div class="media border-bottom py-3">
							<a href="{{ route('frontend.events.detail', $latestEvent->slug ?? $latestEvent->id) }}">
								<img loading="lazy" 
                                     class="mr-4" 
                                     src="{{ $latestEvent->image ? Storage::url('events/' . $latestEvent->image) : asset('images/default-event.jpg') }}" 
                                     alt="{{ $latestEvent->title }}" 
                                     style="width: 80px; height: 80px;">
							</a>
							<div class="media-body">
								<h6 class="my-2">
									<a href="{{ route('frontend.events.detail', $latestEvent->slug ?? $latestEvent->id) }}">{{ $latestEvent->title }}</a>
								</h6>
								<span class="text-sm text-muted">{{ \Carbon\Carbon::parse($latestEvent->date)->format('M d, Y') }}</span>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div> --}}
		{{-- </div>
	</div>
</section>  --}}

@endsection
