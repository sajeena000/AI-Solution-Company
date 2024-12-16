@extends('frontend.layouts.main')
@section('content')

<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Our services</span>
          <h1 class="text-capitalize mb-4 text-lg">What We Offer</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="{{ route('frontend.home') }}" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item text-white-50">Our services</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!--  Section Services Start -->
<section class="section service border-top pb-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<span class="h6 text-color">Our Expertise</span>
					<h2 class="mt-3 content-title">AI-Powered Solutions for Digital Transformation</h2>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-5">
					<i class="ti-desktop"></i>
					<h4 class="mb-3">AI Virtual Assistant</h4>
					<p>Streamline workplace efficiency with our intelligent assistant, designed to address inquiries and boost employee productivity in real-time.</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-5">
					<i class="ti-layers"></i>
					<h4 class="mb-3">Data Analytics & Insights</h4>
					<p>Leverage AI to analyze employee data, uncover trends, and improve the overall digital employee experience with actionable insights.</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-5">
					<i class="ti-bar-chart"></i>
					<h4 class="mb-3">Innovative AI Solutions</h4>
					<p>Tailored AI software designed to solve specific challenges in digital transformation across various industries.</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-5">
					<i class="ti-vector"></i>
					<h4 class="mb-3">Innovative AI Solutions</h4>
					<p>Tailored AI software designed to solve specific challenges in digital transformation across various industries.</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-5">
					<i class="ti-android"></i>
					<h4 class="mb-3">Custom Software Development</h4>
					<p>Build AI-integrated tools and platforms to transform your workplace, empowering employees with modern digital solutions.</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-5">
					<i class="ti-pencil-alt"></i>
					<h4 class="mb-3">AI-Enhanced Content Creation</h4>
        <p>Leverage AI-powered tools to generate engaging, precise, and impactful content that resonates with your workforce and customers, tailored for digital platforms.</p>
    </div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-5">
					<i class="ti-layers"></i>
					<h4 class="mb-3">AI-Based Prototyping</h4>
					<p>Quickly create and test innovative solutions with our affordable AI-powered prototyping tools, reducing development time and costs.</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-5">
					<i class="ti-bar-chart"></i>
					<h4 class="mb-3">Cloud-Based AI Platforms</h4>
					<p>Secure and scalable AI solutions hosted on the cloud, ensuring flexibility and seamless integration for global businesses.</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-5">
					<i class="ti-vector"></i>
					<h4 class="mb-3">AI-Powered Branding Solutions</h4>
        <p>Transform your brand identity with AI-driven insights and designs that enhance recognition, connect with your workforce, and resonate across global audiences.</p>
    </div>
			</div>
		</div>
	</div>
</section>
<!--  Section Services End -->

<section class="cta-2">
	<div class="container">
		<div class="cta-block p-5 rounded">
			<div class="row justify-content-center align-items-center ">
				<div class="col-lg-7 text-center text-lg-left">
					<span class="text-color">Transforming the Workplace</span>
					<h2 class="mt-2 text-white">Partner with AI-Solutions to Revolutionize Digital Employee Experiences</h2>
				</div>
				<div class="col-lg-4 text-center text-lg-right mt-4 mt-lg-0">
					<a href="{{ route('frontend.contact') }}" class="btn btn-main btn-round-full">Contact Us</a>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection