<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="zxx">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>AI-Solution Company</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Agency HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Html5 Agency Template v1.0">
  
  <!-- theme meta -->
  <meta name="theme-name" content="megakit" />


  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ asset('frontend/plugins/bootstrap/bootstrap.min.css')}}">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="{{ asset('frontend/plugins/themify/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/plugins/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/plugins/magnific-popup/magnific-popup.css')}}">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="{{ asset('frontend/plugins/slick/slick.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/plugins/slick/slick-theme.css')}}">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{  asset('frontend/css/style.css') }}">
  
  <!--Favicon-->
  <link rel="icon" href="images/favicon.png" type="image/x-icon">

</head>

<body>

<!-- Header Start -->
<header class="navigation">
  <div class="header-top ">
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-2 col-md-4">
          <div class="header-top-socials text-center text-lg-left text-md-left">
            <a href="https://www.facebook.com/themefisher" aria-label="facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/themefisher" aria-label="twitter"><i class="fab fa-twitter"></i></a>
            <a href="https://github.com/themefisher/" aria-label="github"><i class="fab fa-github"></i></a>
          </div>
        </div>
        <div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
          <div class="header-top-info mb-2 mb-md-0">
            <a href="tel:+23-345-67890">Call Us : <span>9817183924</span></a>
            <a href="mailto:support@gmail.com"><i class="fas fa-envelope mr-2"></i><span>innovation@ai-solution.com</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="navbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg px-0 py-4">
            <a class="navbar-brand" href="/">
              AI<span>-Solution.</span>
            </a>
      
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09"
              aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
              <span class="fa fa-bars"></span>
            </button>
      
            <div class="collapse navbar-collapse text-center" id="navbarsExample09">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item dropdown @@about">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About <i class="fas fa-chevron-down small"></i></a>
                  <ul class="dropdown-menu" aria-labelledby="dropdown03">
                    <li><a class="dropdown-item @@company" href="{{ route('frontend.about') }}">Our company</a></li>
                    <li><a class="dropdown-item @@pricing" href="{{ route('frontend.pricing')}}">Pricing</a></li>

                    
                    <li class="dropdown dropdown-submenu dropright">
                      {{-- <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a> --}}
            
                      {{-- <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                        <li><a class="dropdown-item" href="/">Submenu 01</a></li>
                        <li><a class="dropdown-item" href="/">Submenu 02</a></li>
                      </ul> --}}
                    </li>
                  </ul>
                </li>
                <li class="nav-item @@service"><a class="nav-link" href="{{ route('frontend.service')}}">Services</a></li>
                <li class="nav-item @@galley"><a class="nav-link" href="{{ route('frontend.gallery')}}">Gallery</a></li>


                <li class="nav-item @@project"><a class="nav-link" href="{{ route('frontend.project')}}">Portfolio</a></li>
                <li class="nav-item dropdown @@blog">
                  {{-- <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog <i class="fas fa-chevron-down small"></i></a> --}}
                  <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">News & Events <i class="fas fa-chevron-down small"></i></a>

                  <ul class="dropdown-menu" aria-labelledby="dropdown05">
                    <li><a class="dropdown-item @@blogGrid" href="{{ route('frontend.blogs')}}">Latest Blogs</a></li>
                    <li><a class="dropdown-item @@blogSidebar" href="{{ route('frontend.events')}}">Event Highlights</a></li>
                    {{-- <li><a class="dropdown-item @@blogSingle" href="{{ route('frontend.blog-single')}}">Upcoming Events</a></li> --}}
      
                    {{-- <li class="dropdown dropdown-submenu dropleft">
                      <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>
            
                      <ul class="dropdown-menu" aria-labelledby="dropdown0501">
                        <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                        <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                      </ul>
                    </li> --}}
                  </ul>
                </li>
                <li class="nav-item @@contact"><a class="nav-link" href="{{ route('frontend.contact')}}">Contact</a></li>
              </ul>
              <div class="my-2 my-md-0 ml-lg-4 text-center">
                <a href="{{ route('frontend.contact')}}" class="btn btn-solid-border btn-round-full">Get a Quote</a>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Header Close -->