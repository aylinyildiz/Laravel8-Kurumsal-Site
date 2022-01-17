@php
    $setting = \App\Http\Controllers\HomeController::getSetting()
@endphp

<!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Linkler</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('home')}}">Anasayfa</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('aboutus')}}">Hakkımızda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('references')}}">Referanslar</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>İletişim</h4>
            <p>
                {{$setting->address}}<br><br>

              <strong>Telefon:</strong> {{$setting->phone}}<br>
               <strong>Fax:</strong> {{$setting->fax}}<br>
              <strong>Email:</strong> {{$setting->email}}<br>
            </p>

          </div>

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>Sosyal Medya</h3>
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
