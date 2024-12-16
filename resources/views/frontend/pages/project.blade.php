@extends('frontend.layouts.main')
@section('content')

<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Latest works</span>
          <h1 class="text-capitalize mb-4 text-lg">Portfolio</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="{{ route('frontend.home') }}" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item text-white-50">Latest works</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- section portfolio start -->
<section class="section portfolio pb-0">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<span class="h6 text-color">Our works</span>
					<h2 class="mt-3 content-title">We have done lots of works, lets check some</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row portfolio-gallery">
			@foreach($projects as $project)
			<div class="col-lg-4 col-md-6">
				<div class="portflio-item position-relative mb-4">

					<a href="{{$project->image ? Storage::url('projects/'.$project->image) : ''}}" class="popup-gallery">
						
						@if($project->thumbnail)
						<img src="{{ Storage::url('projects/'.$project->thumbnail) }}" alt="portfolio" class="img-fluid w-100">
						@endif
						<i class="ti-plus overlay-item"></i>
						<div class="portfolio-item-content">
							<h3 class="mb-0 text-white">{{ $project->title }}</h3>
							<p class="text-white-50">{{ $project->category }}</p>
						</div>
					</a>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
<!-- section portfolio END -->

@endsection