@extends('frontend.layouts.main')


@section('content')
<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">About Us</span>
          <h1 class="text-capitalize mb-4 text-lg">Our Company</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="{{ route('frontend.home') }}" class="text-white">Home</a></li>

            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item text-white-50">About Us</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section About Start -->
<section class="section about-2 position-relative">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="about-item pr-3 mb-5 mb-lg-0">
					<span class="h6 text-color">What We Do</span>
					<h2 class="mt-3 mb-4 position-relative content-title">We are an AI-driven start-up transforming digital employee experiences</h2>
					<p class="mb-5">AI-Solutions leverages advanced AI to assist industries by addressing issues impacting the digital employee experience. Our software solutions expedite design, engineering, and innovation. With our AI-powered virtual assistant and affordable prototyping solutions, we are revolutionizing the way businesses operate and support their people at work.</p>

					<a href="contact.html" class="btn btn-main btn-round-full">Get started</a>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="about-item-img">
					<img loading="lazy" src="{{ asset('frontend/images/blog/1.jpg')}}" alt="about-image" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Section About End -->
 
<section class="about-info section pt-0">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="about-info-item mb-4 mb-lg-0">
					<h3 class="mb-3"><span class="text-color mr-2 text-md ">01.</span>Our Mission</h3>
					<p>Our mission is to innovate, promote, and deliver the future of the digital employee experience by integrating AI technologies that empower individuals and organizations to work smarter, faster, and more efficiently.</p>
				</div>			
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="about-info-item mb-4 mb-lg-0">
					<h3 class="mb-3"><span class="text-color mr-2 text-md">02.</span>Our Vision</h3>
					<p>We envision a world where AI seamlessly integrates into the workplace to accelerate innovation, enhance productivity, and foster a positive, empowering digital environment for employees globally.</p>
				</div>		
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="about-info-item mb-4 mb-lg-0">
					<h3 class="mb-3"><span class="text-color mr-2 text-md">03.</span>Our Approach</h3>
					<p>We focus on building AI solutions that prioritize the user experience. By offering AI-based, affordable prototyping solutions and a virtual assistant, we help companies address challenges proactively and stay ahead of the curve in the digital workplace.</p>
				</div>			
			</div>
		</div>
	</div>
</section>

<!-- section Counter Start -->
<section class="section counter bg-counter">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item text-center mb-5 mb-lg-0">
					<i class="ti-check color-one text-md"></i>
					<h3 class="mt-2 mb-0 text-white"><span class="counter-stat font-weight-bold">1730</span> +</h3>
					<p class="text-white-50">AI Projects Completed</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item text-center mb-5 mb-lg-0">
					<i class="ti-flag color-one text-md"></i>
					<h3 class="mt-2 mb-0 text-white"><span class="counter-stat font-weight-bold">50 </span>+ </h3>
					<p class="text-white-50">Countries Served</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item text-center mb-5 mb-lg-0">
					<i class="ti-layers color-one text-md"></i>
					<h3 class="mt-2 mb-0 text-white"><span class="counter-stat font-weight-bold">100</span></h3>
					<p class="text-white-50">Companies Empowered</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item text-center">
					<i class="ti-medall color-one  text-md"></i>
					<h3 class="mt-2 mb-0 text-white"><span class="counter-stat font-weight-bold">14</span></h3>
					<p class="text-white-50">Awards Received </p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- section Counter End  -->

<!--  Section Services Start -->
<section class="section team">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<span class="h6 text-color">Our Team</span>
					<h2 class="mt-3 content-title">Meet the Innovators Behind AI-Solutions</h2>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="team-item-wrap mb-5">
					<div class="team-item position-relative">
						<img loading="lazy" src="{{ asset('frontend/images/team/team-1.jpg')}}" alt="team" class="img-fluid w-100">
						<div class="team-img-hover">
							<ul class="team-social list-inline">
								<li class="list-inline-item">
									<a href="https://www.facebook.com/themefisher" class="facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="https://twitter.com/themefisher" class="twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="https://www.instagram.com/themefisher/" class="instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="https://themefisher.com/" class="linkedin"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="team-item-content">
						<h4 class="mt-3 mb-0 text-capitalize">Sambriddhi Thapa</h4>
						<p>Founder & CEO</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="team-item-wrap mb-5">
					<div class="team-item position-relative">
						<img loading="lazy" src="{{ asset('frontend/images/team/team-2.jpg')}}" alt="team" class="img-fluid w-100">
						<div class="team-img-hover">
							<ul class="team-social list-inline">
								<li class="list-inline-item">
									<a href="https://www.facebook.com/themefisher" class="facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="https://twitter.com/themefisher" class="twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="https://www.instagram.com/themefisher/" class="instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="https://themefisher.com/" class="linkedin"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="team-item-content">
						<h4 class="mt-3 mb-0 text-capitalize">Prashant Gurung</h4>
						<p>Chief Technology Officer</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="team-item-wrap mb-5 ">
					<div class="team-item position-relative">
						<img loading="lazy" src="{{ asset('frontend/images/team/team-3.jpg')}}" alt="team" class="img-fluid w-100">
						<div class="team-img-hover">
							<ul class="team-social list-inline">
								<li class="list-inline-item">
									<a href="https://www.facebook.com/themefisher" class="facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="https://twitter.com/themefisher" class="twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="https://www.instagram.com/themefisher/" class="instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="https://themefisher.com/" class="linkedin"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="team-item-content">
						<h4 class="mt-3 mb-0 text-capitalize">Himal Malla</h4>
						<p>Head of Product Development</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="team-item-wrap mb-5 mb-lg-0">
					<div class="team-item position-relative">
						<img loading="lazy" src="{{ asset('frontend/images/team/team-4.jpg')}}" alt="team" class="img-fluid w-100">
						<div class="team-img-hover">
							<ul class="team-social list-inline">
								<li class="list-inline-item">
									<a href="https://www.facebook.com/themefisher" class="facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="https://twitter.com/themefisher" class="twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="https://www.instagram.com/themefisher/" class="instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="https://themefisher.com/" class="linkedin"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="team-item-content">
						<h4 class="mt-3 mb-0 text-capitalize">Tapendra Malla</h4>
						<p>Senior Marketer</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="team-item-wrap mb-5 mb-lg-0">
					<div class="team-item position-relative">
						<img loading="lazy" src="{{ asset('frontend/images/team/team-6.jpg')}}" alt="team" class="img-fluid w-100">
						<div class="team-img-hover">
							<ul class="team-social list-inline">
								<li class="list-inline-item">
									<a href="https://www.facebook.com/themefisher" class="facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="https://twitter.com/themefisher" class="twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="https://www.instagram.com/themefisher/" class="instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="https://themefisher.com/" class="linkedin"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="team-item-content">
						<h4 class="mt-3 mb-0 text-capitalize">Sudarshan Malla</h4>
						<p>AI Specialist</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="team-item-wrap mb-5 mb-lg-0 ">
					<div class="team-item position-relative">
						<img loading="lazy" src="{{ asset('frontend/images/team/team-5.jpg')}}" alt="team }}" class="img-fluid w-100">
						<div class="team-img-hover">
							<ul class="team-social list-inline">
								<li class="list-inline-item">
									<a href="https://www.facebook.com/themefisher" class="facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="https://twitter.com/themefisher" class="twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="https://www.instagram.com/themefisher/" class="instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="https://themefisher.com/" class="linkedin"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="team-item-content">
						<h4 class="mt-3 mb-0 text-capitalize">Binita Gurung</h4>
						<p>Project Manager</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--  Section Services End -->
<!-- Section Testimonial Start -->
<section class="section testimonial bg-gray">
	<div class="container">
	  <div class="row justify-content-center">
		<div class="col-lg-7 text-center">
		  <div class="section-title">
			<span class="h6 text-color">Client Testimonials</span>
			<h2 class="mt-3 content-title">What Our Clients Say</h2>
		  </div>
		</div>
	  </div>
	  <div class="row">
		<!-- Testimonial 1 -->
		<div class="col-lg-4">
		  <div class="testimonial-item">
			<div class="testimonial-author">

			  <img src="{{ asset('frontend/images/team/client1.jpg')}}" alt="Client 1" class="img-fluid rounded-circle">
			  <h5 class="mb-0">Robert John Downey Jr.</h5>
			  <p>Managing Director, NLPRC</p>
			</div>
			<p>AI-Solutions has revolutionized our workplace by integrating cutting-edge AI technologies. Their virtual assistant and affordable prototyping services have significantly enhanced our team’s productivity and efficiency.</p>
			<div class="testimonial-rating">
			  <span>⭐⭐⭐⭐⭐</span>
			</div>
		  </div>
		</div>
		<!-- Testimonial 2 -->
		<div class="col-lg-4">
		  <div class="testimonial-item">
			<div class="testimonial-author">
				<img src="{{ asset('frontend/images/team/client2.jpg')}}" alt="Client 1" class="img-fluid rounded-circle">

			  <h5 class="mb-0">Lily Collins</h5>
			  <p>Chairman, NIMS Group Clinic Pvt. Ltd.</p>
			</div>
			<p>Thanks to AI-Solutions, we were able to prototype and implement AI solutions faster than we ever expected. Their team is dedicated to providing innovative solutions that truly meet the needs of modern businesses.</p>
			<div class="testimonial-rating">
			  <span>⭐⭐⭐⭐⭐</span>
			</div>
		  </div>
		</div>
		<!-- Testimonial 3 -->
		<div class="col-lg-4">
		  <div class="testimonial-item">
			<div class="testimonial-author">
				<img src="{{ asset('frontend/images/team/client3.jpg')}}" alt="Client 1" class="img-fluid rounded-circle">

			  <h5 class="mb-0">Chris Hemsworth</h5>
			  <p>Founder/CEO, Parichaya</p>
			</div>
			<p>Working with AI-Solutions has enhanced our efficiency and user experience. The affordable AI prototypes helped us scale our operations quickly.</p>
			<div class="testimonial-rating">
			  <span>⭐⭐⭐⭐⭐</span>
			</div>
		  </div>
		</div>
	  </div>
	  <div class="row">
		<!-- Testimonial 4 -->
		<div class="col-lg-4">
		  <div class="testimonial-item">
			<div class="testimonial-author">
				<img src="{{ asset('frontend/images/team/client4.jpg')}}" alt="Client 1" class="img-fluid rounded-circle">

			  <h5 class="mb-0">Chris Evans</h5>
			  <p>CEO, Tech Innovators</p>
			</div>
			<p>AI-Solutions has revolutionized our workplace by integrating cutting-edge AI technologies. Their virtual assistant and affordable prototyping services have significantly enhanced our team’s productivity...</p>
			<div class="testimonial-rating">
			  <span>⭐⭐⭐⭐⭐</span>
			</div>
		  </div>
		</div>
		<!-- Testimonial 5 -->
		<div class="col-lg-4">
		  <div class="testimonial-item">
			<div class="testimonial-author">
				<img src="{{ asset('frontend/images/team/client5.jpg')}}" alt="Client 1" class="img-fluid rounded-circle">

			  <h5 class="mb-0">Cillian Murphy</h5>
			  <p>CTO, Digital Enterprises</p>
			</div>
			<p>Thanks to AI-Solutions, we were able to prototype and implement AI solutions faster than we ever expected...</p>
			<div class="testimonial-rating">
			  <span>⭐⭐⭐⭐⭐</span>
			</div>
		  </div>
		</div>
		<!-- Testimonial 6 -->
		<div class="col-lg-4">
		  <div class="testimonial-item">
			<div class="testimonial-author">
				<img src="{{ asset('frontend/images/team/client6.jpg')}}" alt="Client 1" class="img-fluid rounded-circle">

			  <h5 class="mb-0">Andrew Garfield</h5>
			  <p>CEO, Tech Innovators</p>
			</div>
			<p>AI-Solutions transformed our digital work environment. Their AI-powered virtual assistant and prototyping tools have been game-changers for us...</p>
			<div class="testimonial-rating">
			  <span>⭐⭐⭐⭐⭐</span>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  
  <style>
	.testimonial-item {
	  background: #fff;
	  border: 1px solid #eaeaea;
	  padding: 20px;
	  margin: 10px;
	  border-radius: 10px;
	  text-align: center;
	  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
	}
	.testimonial-author img {
	  width: 80px;
	  height: 80px;
	  margin-bottom: 10px;
	  border-radius: 50%;
	}
	.testimonial-rating span {
	  color: #ffc107;
	  font-size: 1.2em;
	}
	.bg-gray {
	  background-color: #f9f9f9;
	  padding: 60px 0;
	}
  </style>
  
@endsection