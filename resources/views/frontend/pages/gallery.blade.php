@extends('frontend.layouts.main')
@section('content')

<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Photo Gallery</span>
          <h1 class="text-capitalize mb-4 text-lg">Photo Gallery</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="{{ route('frontend.home') }}" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item text-white-50">Photo Gallery</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section service border-top pb-5">
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <span class="h6 text-color">Our Photo Gallery</span>
                    <h2 class="mt-3 content-title" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                        Discover Our Events, Achievements, and Innovations
                    </h2>
                </div>
            </div>
        </div>
    </div>

    
    
    
    <!-- Page Title -->
    {{-- <div class="container mt-4 text-center"> --}}
        {{-- <h1 class="display-4 text-primary">Photo Gallery</h1> --}}
        {{-- <p class="lead text-muted">Discover Our Events, Achievements, and Innovations</p> --}}
    {{-- </div> --}}

    <!-- Gallery Grid -->
    <div class="container py-5">
        <div class="row">
            <!-- Gallery Item 1 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('frontend/images/gallery/event1.jpg') }}" class="card-img-top" alt="Event 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">AI Conference 2024</h5>
                        <p class="card-text">Showcasing our AI-powered prototyping solutions.</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 2 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('frontend/images/gallery/workshop.jpg') }}" class="card-img-top" alt="Workshop">
                    <div class="card-body text-center">
                        <h5 class="card-title">AI Solutions Workshop</h5>
                        <p class="card-text">Engaging with industries to solve digital challenges.</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 3 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('frontend/images/gallery/team_meet.jpeg') }}" class="card-img-top" alt="Team Event">
                    <div class="card-body text-center">
                        <h5 class="card-title">Team Innovation Meet</h5>
                        <p class="card-text">Our team collaborating to create AI-driven solutions.</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 4 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('frontend/images/gallery/product_demo.png') }}" class="card-img-top" alt="Product Demo">
                    <div class="card-body text-center">
                        <h5 class="card-title">Product Demonstration</h5>
                        <p class="card-text">Live demonstration of our cutting-edge software tools.</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 5 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('frontend/images/gallery/client_meet.jpg') }}" class="card-img-top" alt="Client Meetup">
                    <div class="card-body text-center">
                        <h5 class="card-title">Client Collaboration</h5>
                        <p class="card-text">Building relationships with clients worldwide.</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 6 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('frontend/images/gallery/award_ceremony.jpg') }}" class="card-img-top" alt="Award Ceremony">
                    <div class="card-body text-center">
                        <h5 class="card-title">Award Ceremony</h5>
                        <p class="card-text">Celebrating achievements and innovation in AI.</p>
                    </div>
                </div>
            </div>

            {{-- <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('frontend/images/gallery/event1.jpg') }}" class="card-img-top" alt="Event 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">AI Conference 2024</h5>
                        <p class="card-text">Showcasing our AI-powered prototyping solutions.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('frontend/images/gallery/event1.jpg') }}" class="card-img-top" alt="Event 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">AI Conference 2024</h5>
                        <p class="card-text">Showcasing our AI-powered prototyping solutions.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('frontend/images/gallery/event1.jpg') }}" class="card-img-top" alt="Event 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">AI Conference 2024</h5>
                        <p class="card-text">Showcasing our AI-powered prototyping solutions.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('frontend/images/gallery/event1.jpg') }}" class="card-img-top" alt="Event 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">AI Conference 2024</h5>
                        <p class="card-text">Showcasing our AI-powered prototyping solutions.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('frontend/images/gallery/event1.jpg') }}" class="card-img-top" alt="Event 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">AI Conference 2024</h5>
                        <p class="card-text">Showcasing our AI-powered prototyping solutions.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('frontend/images/gallery/event1.jpg') }}" class="card-img-top" alt="Event 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">AI Conference 2024</h5>
                        <p class="card-text">Showcasing our AI-powered prototyping solutions.</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

    <!-- Footer Text -->
    <div class="container text-center mt-5">
        <p class="text-muted">
            Stay tuned for more updates as we continue to innovate and deliver AI-powered solutions around the globe!
        </p>
    </div>
@endsection


{{-- @media (max-width: 768px) {
    .content-title {
        font-size: 1.2rem; /* Adjust font size for smaller screens */
    }
} --}}