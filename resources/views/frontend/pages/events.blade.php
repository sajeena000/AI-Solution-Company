@extends('frontend.layouts.main')
@section('content')

<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">	Events</span>
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
		@foreach($upcomingEvents as $upcomingEvent)
		<div class="col-lg-4 col-md-6 mb-5">
		  <div class="blog-item">
			@if($upcomingEvent->image)
			<img loading="lazy" src="{{ Storage::url('events/' . $upcomingEvent->image) }}" alt="{{ $upcomingEvent->title }}" class="img-fluid rounded">
			@endif
  
			<div class="blog-item-content bg-white p-4">
			  <div class="blog-item-meta py-1 px-2">
				<span class="text-muted text-capitalize mr-3">
				  <i class="ti-calendar mr-2"></i>{{ \Carbon\Carbon::parse($upcomingEvent->date)->format('F d, Y') }}
				</span>
				<span class="text-muted text-capitalize">
				  <i class="ti-location-pin mr-2"></i>{{ $upcomingEvent->location }}
				</span>
			  </div>
			  <h3 class="mt-3 mb-3">{{ $upcomingEvent->title }}</h3>
			  <p class="mb-4">{{ Str::limit($upcomingEvent->description, 100) }}</p>
			  <a href="#" class="btn btn-small btn-main btn-round-full">Learn More</a>
			</div>
		  </div>
		</div>
		@endforeach
	  </div>
	</div>
  </section>

<section class="section blog-wrap bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="row">
					@foreach($events as $event)
					<div class="col-lg-6 col-md-6 mb-5">
						<div class="blog-item">
							<div class="blog-item">
								@if($event->image)
								<img loading="lazy" src="{{ Storage::url('events/' . $event->image) }}" alt="{{ $event->title }}" class="img-fluid rounded">
								@endif

								<div class="blog-item-content bg-white p-4">
									<div class="blog-item-meta py-1 px-2">
										<span class="text-muted text-capitalize mr-3">
											<i class="ti-calendar mr-2"></i>{{ \Carbon\Carbon::parse($event->date)->format('F d, Y') }}
										</span>
										<span class="text-muted text-capitalize">
											<i class="ti-location-pin mr-2"></i>{{ $event->location }}
										</span>
									</div>
	
									<h3 class="mt-3 mb-3">
										<a href="#">{{ $event->title }}</a>
									</h3>
									<p class="mb-4">{{ Str::limit($event->description, 100) }}</p>
	
									<a href="#" class="btn btn-small btn-main btn-round-full">Learn More</a>
								</div>
							</div>
						</div>
						@endforeach
					</div>
	
					
					<div class="col-lg-12 mt-3">
						<nav class="navigation pagination py-2 d-inline-block">
							<div class="nav-links">
								{{ $events->links() }} 
							</div>
						</nav>
					</div>
				</div>
	
				
				<div class="col-lg-4 mt-5 mt-lg-0">
					<div class="sidebar-wrap">
						<div class="sidebar-widget search card p-4 mb-3 border-0">
							<input type="text" class="form-control" placeholder="Search">
							<a href="#" class="btn btn-main btn-small d-block mt-2">Search</a>
						</div>
	
						
						<div class="sidebar-widget latest-post card border-0 p-4 mb-3">
							<h5>Latest Events</h5>
							@foreach($latestEvents as $latestEvent)
							<div class="media border-bottom py-3">
								<a href="#">
									<img loading="lazy" class="mr-4" src="{{ Storage::url('events/' . $latestEvent->image) }}" alt="{{ $latestEvent->title }}" style="width: 80px; height: 80px;">
								</a>
								<div class="media-body">
									<h6 class="my-2"><a href="#">{{ $latestEvent->title }}</a></h6>
									<span class="text-sm text-muted">{{ \Carbon\Carbon::parse($latestEvent->date)->format('M d, Y') }}</span>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	@endsection












{{-- 
							<img loading="lazy" src="{{ asset('frontend/images/blog/1.jpg') }}"alt="blog" class="img-fluid rounded">

							<div class="blog-item-content bg-white p-4">
								<div class="blog-item-meta  py-1 px-2">
									<span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span>
								</div>

								<h3 class="mt-3 mb-3"><a href="blog-single.html">Improve design with typography?</a></h3>
								<p class="mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium
									pariatur repudiandae!</p>

								<a href="blog-single.html" class="btn btn-small btn-main btn-round-full">Learn More</a>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 mb-5">
						<div class="blog-item">
							<img loading="lazy" src="{{ asset('frontend/images/blog/2.jpg') }}" alt="blog" class="img-fluid rounded">

							<div class="blog-item-content bg-white p-4">
								<div class="blog-item-meta py-1 px-2">
									<span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Design</span>
								</div>

								<h3 class="mt-3 mb-3"><a href="blog-single.html">Interactivity connect consumer</a></h3>
								<p class="mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium
									pariatur repudiandae!</p>

								<a href="blog-single.html" class="btn btn-small btn-main btn-round-full">Learn More</a>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 mb-5">
						<div class="blog-item">
							<img loading="lazy" src="{{ asset('frontend/images/blog/3.jpg') }}" alt="blog" class="img-fluid rounded">

							<div class="blog-item-content bg-white p-4">
								<div class="blog-item-meta py-1 px-2">
									<span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Community</span>
								</div>

								<h3 class="mt-3 mb-3"><a href="blog-single.html">Marketing Strategy to bring more affect</a></h3>
								<p class="mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium
									pariatur repudiandae!</p>

								<a href="blog-single.html" class="btn btn-small btn-main btn-round-full">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 mb-5">
						<div class="blog-item">
							<img loading="lazy" src="{{ asset('frontend/images/blog/4.jpg') }}"alt="blog" class="img-fluid rounded">

							<div class="blog-item-content bg-white p-4">
								<div class="blog-item-meta py-1 px-2">
									<span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Marketing</span>
								</div>

								<h3 class="mt-3 mb-3"><a href="blog-single.html">Marketing Strategy to bring more affect</a></h3>
								<p class="mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium
									pariatur repudiandae!</p>

								<a href="blog-single.html" class="btn btn-small btn-main btn-round-full">Learn More</a>
							</div>
						</div>
					</div>

					
					<div class="col-lg-12 mt-3">
						<nav class="navigation pagination py-2 d-inline-block">
							<div class="nav-links">
								<a class="prev page-numbers" href="#">Prev</a>
								<span aria-current="page" class="page-numbers current">1</span>
								<a class="page-numbers" href="#">2</a>
								<a class="next page-numbers" href="#">Next</a>
							</div>
						</nav>
					</div>
				</div>
			</div>
			<div class="col-lg-4 mt-5 mt-lg-0">
				<div class="sidebar-wrap">
					<div class="sidebar-widget search card p-4 mb-3 border-0">
						<input type="text" class="form-control" placeholder="search">
						<a href="#" class="btn btn-mian btn-small d-block mt-2">search</a>
					</div>

					<div class="sidebar-widget card border-0 mb-3">
						<img loading="lazy" src="{{ asset('frontend/images/blog/blog-author.jpg') }}" alt="blog-author" class="img-fluid">
						<div class="card-body p-4 text-center">
							<h5 class="mb-0 mt-4">Arther Conal</h5>
							<p>Digital Marketer</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, dolore.</p>

							<ul class="list-inline author-socials">
								<li class="list-inline-item mr-3">
									<a href="#"><i class="fab fa-facebook-f text-muted"></i></a>
								</li>
								<li class="list-inline-item mr-3">
									<a href="#"><i class="fab fa-twitter text-muted"></i></a>
								</li>
								<li class="list-inline-item mr-3">
									<a href="#"><i class="fab fa-linkedin-in text-muted"></i></a>
								</li>
								<li class="list-inline-item mr-3">
									<a href="#"><i class="fab fa-pinterest text-muted"></i></a>
								</li>
								<li class="list-inline-item mr-3">
									<a href="#"><i class="fab fa-behance text-muted"></i></a>
								</li>
							</ul>
						</div>
					</div>

					<div class="sidebar-widget latest-post card border-0 p-4 mb-3">
						<h5>Latest Posts</h5>

						<div class="media border-bottom py-3">
							<a href="#"><img loading="lazy" class="mr-4" src="{{ asset('frontend/images/blog/bt-3.jpg') }}"alt="blog"></a>
							<div class="media-body">
								<h6 class="my-2"><a href="#">Thoughtful living in los Angeles</a></h6>
								<span class="text-sm text-muted">03 Mar 2018</span>
							</div>
						</div>

						<div class="media border-bottom py-3">
							<a href="#"><img loading="lazy" class="mr-4" src="{{ asset('frontend/images/blog/bt-2.jpg') }}" alt="blog"></a>
							<div class="media-body">
								<h6 class="my-2"><a href="#">Vivamus molestie gravida turpis.</a></h6>
								<span class="text-sm text-muted">03 Mar 2018</span>
							</div>
						</div>

						<div class="media py-3">
							<a href="#"><img loading="lazy" class="mr-4" src="{{ asset('frontend/images/blog/bt-1.jpg') }}" alt="blog"></a>
							<div class="media-body">
								<h6 class="my-2"><a href="#">Fusce lobortis lorem at ipsum semper sagittis</a></h6>
								<span class="text-sm text-muted">03 Mar 2018</span>
							</div>
						</div>
					</div>

					<div class="sidebar-widget bg-white rounded tags p-4 mb-3">
						<h5 class="mb-4">Tags</h5>

						<a href="#">Web</a>
						<a href="#">agency</a>
						<a href="#">company</a>
						<a href="#">creative</a>
						<a href="#">html</a>
						<a href="#">Marketing</a>
						<a href="#">Social Media</a>
						<a href="#">Branding</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection --}}