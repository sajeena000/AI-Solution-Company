@extends('frontend.layouts.main')
@section('content')

<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Our pricing</span>
          <h1 class="text-capitalize mb-4 text-lg">AI Solutions Pricing</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="{{ route('frontend.home') }}" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item text-white-50">Pricing</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section Intro Start -->
<section class="section intro">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-5">
				<div class="section-title pt-5">
					<span class="h6 text-color ">>We Empower Your Business</span>
					<h2 class="mt-3">AI Solutions for a Seamless Digital Employee Experience</h2>
				</div>
			</div>

			<div class="col-lg-6 ml-auto">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="intro-item mb-4 mb-lg-0">
							<i class="ti-wand text-color"></i>
							<h4 class="mt-4">AI-Powered Innovation</h4>
				<p>Leverage our cutting-edge AI technology to drive innovation and efficiency in your business, improving employee experiences and boosting productivity.</p>
			</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="intro-item mb-4 mb-lg-0">
							<i class="ti-medall text-color"></i>
							<h4 class="mt-4">Certified AI Solutions Provider</h4>
				<p>We are a licensed and certified provider of AI-based solutions, ensuring you receive trusted and compliant technology to transform your digital employee experience.</p>
			</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Section Intro END -->

<!-- Section Pricing Start -->
<section class="section pricing bg-gray position-relative">
	<div class="hero-img bg-overlay h70"></div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<span class="h6 text-white">AI-Solutions Pricing</span>
					<h2 class="mt-3 content-title text-white">Affordable and Scalable AI Solutions for Your Team</h2>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-md-4">
				<div class="card text-center mb-md-0 mb-3">
					<div class="card-body py-5">
						<div class="pricing-header mb-5">
							<h5 class="font-weight-normal mb-3">Starter</h5>
							<h1>$0</h1>
							<p class="text-muted">Per User / Month</p>
						</div>
						<strong>Includes:</strong>
						<ul class="list-unstyled lh-45 mt-3 text-black">
							<li>- Up to 1 User</li>
							<li>- Basic AI-powered virtual assistant</li>
							<li>- Max 100 Queries</li>
							<li>- Basic Support</li>
						</ul>
						<a href="#" class="btn btn-small btn-solid-border mt-3 btn-round-full">Download Now</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card text-center mb-md-0 mb-3">
					<div class="card-body py-5">
						<div class="pricing-header mb-5">
							<h5 class="font-weight-normal mb-3">Pro</h5>
							<h1>$25</h1>
							<p class="text-muted">Per User / Month</p>
						</div>
						<strong>Includes:</strong>
						<ul class="list-unstyled lh-45 mt-3 text-black">
							<li>- Up to 5 Users</li>
							<li>- Advanced AI-powered virtual assistant</li>
							<li>- 1,000 Queries</li>
							<li>- AI-based prototyping tools</li>
							<li>- Priority Support</li>
						</ul>
						<a href="#" class="btn btn-small btn-main mt-3 btn-round-full">Signup Now</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card text-center mb-md-0 mb-3">
					<div class="card-body py-5">
						<div class="pricing-header mb-5">
							<h5 class="font-weight-normal mb-3">Enterprise</h5>
							<h1>$99</h1>
							<p class="text-muted">Per User / Month</p>
						</div>
						<strong>Includes:</strong>
						<ul class="list-unstyled lh-45 mt-3 text-black">
							<li>- Unlimited Users</li>
							<li>- Full access to AI-powered virtual assistant</li>
							<li>- Unlimited Queries</li>
							<li>- Customizable AI Prototyping Solutions</li>
							<li>- Dedicated Support</li>
						</ul>
						<a href="#" class="btn btn-small btn-solid-border mt-3 btn-round-full">Download Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="cta-block mt-5 p-5 rounded">
			<div class="row justify-content-center align-items-center ">
				<div class="col-lg-7 text-center text-lg-left">
					<span class="text-color">For Every Business Type</span>
					<h2 class="mt-2 text-white">Transform Your Digital Employee Experience with AI Solutions</h2>
				</div>
				<div class="col-lg-4 text-center text-lg-right mt-4 mt-lg-0">
					<a href="contact.html" class="btn btn-main btn-round-full">Contact Us</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Section Pricing End -->

@endsection