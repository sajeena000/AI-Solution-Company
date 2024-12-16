@extends('frontend.layouts.main')
@section('content')

<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Our blog</span>
          <h1 class="text-capitalize mb-4 text-lg">Blog articles</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="{{ route('frontend.home') }}" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item text-white-50">Our blog</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section blog-wrap bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 mb-5">
				<div class="blog-item">
					<img loading="lazy" src="{{ asset('frontend/images/blog/1.jpg')}}" alt="blog" class="img-fluid rounded">

					<div class="blog-item-content bg-white p-5">
						<div class="blog-item-meta bg-gray pt-2 pb-1 px-3">
							<span class="text-muted text-capitalize d-inline-block mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span>
							<span class="text-muted text-capitalize d-inline-block mr-3"><i class="ti-comment mr-2"></i>5 Comments</span>
							<span class="text-black text-capitalize d-inline-block mr-3"><i class="ti-time mr-1"></i> 28th January</span>
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
					<img loading="lazy" src="{{ asset('frontend/images/blog/2.jpg')}}" alt="blog" class="img-fluid rounded">


					<div class="blog-item-content bg-white p-5">
						<div class="blog-item-meta bg-gray pt-2 pb-1 px-3">
							<span class="text-muted text-capitalize d-inline-block mr-3"><i class="ti-pencil-alt mr-2"></i>Design</span>
							<span class="text-muted text-capitalize d-inline-block mr-3"><i class="ti-comment mr-2"></i>5 Comments</span>
							<span class="text-black text-capitalize d-inline-block mr-3"><i class="ti-time mr-1"></i> 28th January</span>
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
					<img loading="lazy" src="{{ asset('frontend/images/blog/3.jpg')}}" alt="blog" class="img-fluid rounded">


					<div class="blog-item-content bg-white p-5">
						<div class="blog-item-meta bg-gray pt-2 pb-1 px-3">
							<span class="text-muted text-capitalize d-inline-block mr-3"><i class="ti-pencil-alt mr-2"></i>Community</span>
							<span class="text-muted text-capitalize d-inline-block mr-3"><i class="ti-comment mr-2"></i>5 Comments</span>
							<span class="text-black text-capitalize d-inline-block mr-3"><i class="ti-time mr-1"></i> 28th January</span>
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
					<img loading="lazy" src="{{ asset('frontend/images/blog/4.jpg')}}" alt="blog" class="img-fluid rounded">


					<div class="blog-item-content bg-white p-5">
						<div class="blog-item-meta bg-gray pt-2 pb-1 px-3">
							<span class="text-muted text-capitalize d-inline-block mr-3"><i class="ti-pencil-alt mr-2"></i>Marketing</span>
							<span class="text-muted text-capitalize d-inline-block mr-3"><i class="ti-comment mr-2"></i>5 Comments</span>
							<span class="text-black text-capitalize d-inline-block mr-3"><i class="ti-time mr-1"></i> 28th January</span>
						</div>

						<h3 class="mt-3 mb-3"><a href="blog-single.html">Marketing Strategy to bring more affect</a></h3>
						<p class="mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium
							pariatur repudiandae!</p>

						<a href="blog-single.html" class="btn btn-small btn-main btn-round-full">Learn More</a>
					</div>
				</div>
			</div>
		</div>

		<div class="row justify-content-center mt-5">
			<div class="col-lg-6 text-center">
				<nav class="navigation pagination d-inline-block">
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
</section>

@endsection