
<footer class="footer section">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="widget">
            <h4 class="text-capitalize mb-4">Company</h4>
  
            <ul class="list-unstyled footer-menu lh-35">
              <li><a href="{{ route('frontend.about') }}">Terms & Conditions</a></li>
              <li><a href="{{ route('frontend.about') }}">Privacy Policy</a></li>
              <li><a href="{{ route('frontend.contact') }}">Support</a></li>
              <li><a href="{{ route('frontend.contact') }}">FAQ</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="widget">
            <h4 class="text-capitalize mb-4">Quick Links</h4>
  
            <ul class="list-unstyled footer-menu lh-35">
              <li><a href="{{ route('frontend.about') }}">About</a></li>

              <li><a href="{{ route('frontend.service')}}">Services</a></li>
              

              <li><a href="blog-grid.html">Our Blog</a></li>
              <li><a href="{{ route('frontend.contact') }}">Contact Us</a></li>
              <li><a href="#" data-bs-toggle="modal" data-bs-target="#feedbackForm">Feedback</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mx-auto">
          <div class="widget">
            <h4 class="text-capitalize mb-4">Subscribe Us</h4>
            <p>Subscribe to get latest updates, resources, and AI industry insights. </p>
  
            <form action="#" class="sub-form">
              <input type="text" class="form-control mb-3" placeholder="Subscribe Now ...">
              <a href="#" class="btn btn-main btn-small">subscribe</a>
            </form>
          </div>
        </div>
  
        <div class="col-lg-3 col-sm-6">
          <div class="widget">
            <div class="logo mb-4">
              <h3>AI<span>-Solution.</span></h3>
            </div>
            <h6><a href="mailto:support@gmail.com">innovation@ai-solution.com</a></h6>
            <a href="tel:+23-345-67890"><span class="text-color h4">+977 9817183924</span></a>
          </div>
        </div>
      </div>
  
      <div class="footer-btm pt-4">
        <div class="row">
          <div class="col-lg-6">
            <div class="copyright">
              Copyright &copy; 2024, Designed &amp; Developed by <a href="https://themefisher.com/"
                >AI-Solution</a>
            </div>
          </div>
          <div class="col-lg-6 text-left text-lg-right">
            <ul class="list-inline footer-socials">
              <li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i class="fab fa-facebook-f mr-2"></i>Facebook</a></li>
              <li class="list-inline-item"><a href="https://twitter.com/themefisher"><i class="fab fa-twitter mr-2"></i>Twitter</a></li>
              <li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i class="fab fa-pinterest-p mr-2 "></i>Pinterest</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  <!--Scroll to top-->
  <div id="scroll-to-top" class="scroll-to-top">
    <span class="icon fa fa-angle-up"></span>
  </div>
  
  
  <!-- 
  Essential Scripts
  =====================================-->
  <!-- Main jQuery -->
  <script src="{{  asset('frontend/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4.3.1 -->
  <script src="{{  asset('frontend/plugins/bootstrap/bootstrap.min.js')}}"></script>
  <!--  Magnific Popup-->
  <script src="{{  asset('frontend/plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
  <!-- Slick Slider -->
  <script src="{{  asset('frontend/plugins/slick/slick.min.js')}}"></script>
  <!-- Counterup -->
  <script src="{{  asset('frontend/plugins/counterup/jquery.waypoints.min.js')}}"></script>
  <script src="{{  asset('frontend/plugins/counterup/jquery.counterup.min.js')}}"></script>
  
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <script src="{{  asset('frontend/plugins/google-map/map.js')}}" defer></script>
  
  <script src="{{ asset('frontend/js/script.js')}}"></script>
  
  </body>
  
  </html>
  