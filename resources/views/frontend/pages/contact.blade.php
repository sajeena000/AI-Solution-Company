@extends('frontend.layouts.main')
@section('content')

<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Contact Us</span>
          <h1 class="text-capitalize mb-4 text-lg">Get in Touch</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="{{ route('frontend.home') }}" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item text-white-50">Contact Us</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- contact form start -->
<section class="contact-form-wrap section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12">
				<form id="contact-form" class="contact__form" method="POST" action="{{ route('frontend.contact') }}">
					@csrf  <!-- CSRF Token for security -->
				
					<h3 class="text-md mb-4">Contact Form</h3>
				
					<!-- Display Validation Errors -->
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
				
					<!-- Name -->
					<div class="form-group">
						<input name="name" type="text" class="form-control" placeholder="Your Name" value="{{ old('name') }}" >
					</div>
				
					<!-- Email -->
					<div class="form-group">
						<input name="email" type="email" class="form-control" placeholder="Email Address" value="{{ old('email') }}" >
					</div>
				
					<!-- Phone -->
					<div class="form-group">
						<input name="phone" type="text" class="form-control" placeholder="Phone Number (optional)" value="{{ old('phone') }}">
					</div>
				
					<!-- Company Name -->
					<div class="form-group">
						<input name="company" type="text" class="form-control" placeholder="Company Name (optional)" value="{{ old('company') }}">
					</div>
				
					<!-- Country -->
					<div class="form-group">
						<input name="country" type="text" class="form-control" placeholder="Country (optional)" value="{{ old('country') }}">
					</div>
				
					<!-- Job Title -->
					<div class="form-group">
						<input name="job_title" type="text" class="form-control" placeholder="Job Title (optional)" value="{{ old('job_title') }}">
					</div>
				
					<!-- Job Details -->
					<div class="form-group-2 mb-4">
						<textarea name="job_details" class="form-control" rows="4" placeholder="Job Details (optional)">{{ old('job_details') }}</textarea>
					</div>
				
					<!-- Message -->
					<div class="form-group-2 mb-4">
						<textarea name="message" class="form-control" rows="4" placeholder="Your Message" >{{ old('message') }}</textarea>
					</div>
				
					<button class="btn btn-main" name="submit" type="submit">Send Message</button>
				</form>
				
			</div>

			<div class="col-lg-5 col-sm-12">
				<div class="contact-content pl-lg-5 mt-5 mt-lg-0">
					<span class="text-muted">We are Professionals</span>
					<h2 class="mb-5 mt-2">Don’t Hesitate to contact with us for any kind of information</h2>

					<ul class="address-block list-unstyled">
						<li>
							<i class="ti-direction mr-3"></i>Pokhara, Nepal
						</li>
						<li>
							<i class="ti-email mr-3"></i>Email: innovation@ai-solution.com
						</li>
						<li>
							<i class="ti-mobile mr-3"></i>Phone:+977-9817183924
						</li>
					</ul>

					<ul class="social-icons list-inline mt-5">
						<li class="list-inline-item">
							<a href="http://www.themefisher.com"><i class="fab fa-facebook-f"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="http://www.themefisher.com"><i class="fab fa-twitter"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="http://www.themefisher.com"><i class="fab fa-linkedin-in"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="google-map">
	<div id="map" data-latitude="28.2096" data-longitude="83.9856" data-marker="images/marker.png" data-marker-name="Pokhara, Nepal"></div>
</div>

@endsection