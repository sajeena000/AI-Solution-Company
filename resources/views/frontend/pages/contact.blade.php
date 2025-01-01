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
					@csrf <!-- CSRF Token for security -->
				
					<h3 class="text-md mb-2">Contact Form</h3>
				
					<a href="#" data-bs-toggle="modal" data-bs-target="#feedbackForm" class="text-primary">Give us your feedback</a>
				
					<br/><br/>
				
					<!-- Name -->
					<div class="form-group mb-3">
						<label for="name" class="form-label">Name</label>
						<input id="name" name="name" type="text" class="form-control" placeholder="Your Name" value="{{ old('name') }}" aria-label="Name">
						@error('name')
						<span class="text-danger small">{{ $message }}</span>
						@enderror
					</div>
				
					<!-- Email -->
					<div class="form-group mb-3">
						<label for="email" class="form-label">Email</label>
						<input id="email" name="email" type="email" class="form-control" placeholder="Enter your email address" value="{{ old('email') }}" aria-label="Email">
						@error('email')
						<span class="text-danger small">{{ $message }}</span>
						@enderror
					</div>
				
					<!-- Phone -->
					<div class="form-group mb-3">
						<label for="phone" class="form-label">Phone Number</label>
						<input id="phone" name="phone" type="text" class="form-control" placeholder="Phone Number" value="{{ old('phone') }}" aria-label="Phone">
						@error('phone')
						<span class="text-danger small">{{ $message }}</span>
						@enderror
					</div>
				
					<!-- Company Name -->
					<div class="form-group mb-3">
						<label for="company" class="form-label">Company Name</label>
						<input id="company" name="company" type="text" class="form-control" placeholder="Company Name" value="{{ old('company') }}" aria-label="Company Name">
						@error('company')
						<span class="text-danger small">{{ $message }}</span>
						@enderror
					</div>
				
					<!-- Country -->
					<div class="form-group mb-3">
						<label for="country" class="form-label">Country</label>
						<input id="country" name="country" type="text" class="form-control" placeholder="Country" value="{{ old('country') }}" aria-label="Country">
						@error('country')
						<span class="text-danger small">{{ $message }}</span>
						@enderror
					</div>
				
					<!-- Job Title -->
					<div class="form-group mb-3">
						<label for="job_title" class="form-label">Job Title</label>
						<input id="job_title" name="job_title" type="text" class="form-control" placeholder="Job Title" value="{{ old('job_title') }}" aria-label="Job Title">
						@error('job_title')
						<span class="text-danger small">{{ $message }}</span>
						@enderror
					</div>
				
					<!-- Job Details -->
					<div class="form-group mb-3">
						<label for="job_details" class="form-label">Job Details</label>
						<textarea id="job_details" name="job_details" class="form-control" rows="4" placeholder="Enter job details" aria-label="Job Details">{{ old('job_details') }}</textarea>
						@error('job_details')
						<span class="text-danger small">{{ $message }}</span>
						@enderror
					</div>
				
					<!-- Message -->
					<div class="form-group mb-4">
						<label for="message" class="form-label">Your Message</label>
						<textarea id="message" name="message" class="form-control" rows="4" placeholder="Your Message" aria-label="Message">{{ old('message') }}</textarea>
						@error('message')
						<span class="text-danger small">{{ $message }}</span>
						@enderror
					</div>
				
					<button class="btn btn-main" type="submit">Send Message</button>
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