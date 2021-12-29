@php
    $setting = \App\Http\Controllers\HomeController::getSetting()
@endphp

<!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('home')}}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('aboutus')}}">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('references')}}">References</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
                {{$setting->address}}<br><br>

              <strong>Phone:</strong> {{$setting->phone}}<br>
               <strong>Fax:</strong> {{$setting->fax}}<br>
              <strong>Email:</strong> {{$setting->email}}<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About Moderna</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
                @if($setting->twitter!=null)
                    <a href="{{$setting->twitter}}" class="twitter" target="_blank"><i class="bx bxl-twitter" ></i></a>
                @endif
                @if($setting->facebook!=null)
                    <a href="{{$setting->facebook}}" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
                @endif
                @if($setting->instagram!=null)
                    <a href="{{$setting->instagram}}" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
                @endif

            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Designed by <strong><span>{{$setting->company}}</span></strong>
</div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->

      </div>
    </div>
  </footer><!-- End Footer -->
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('assets')}}/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('assets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="{{asset('assets')}}/vendor/php-email-form/validate.js"></script>
<script src="{{asset('assets')}}/vendor/venobox/venobox.min.js"></script>
<script src="{{asset('assets')}}/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="{{asset('assets')}}/vendor/counterup/counterup.min.js"></script>
<script src="{{asset('assets')}}/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{asset('assets')}}/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
