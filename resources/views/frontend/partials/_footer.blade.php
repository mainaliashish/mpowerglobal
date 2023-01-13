  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Mpower Services</h3>
            <p>
              {{ $about->address }}<br>
              {{ $about->address_one }}<br>
              <br><br>
              <strong>Phone:</strong> {{ $about->contact_number_one }}, {{ $about->contact_number_one }}<br>
              <strong>Email:</strong> {{ $about->email_one }}, {{ $about->email_two }}<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              @foreach($services as $service)
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $service->service_name }}</a></li>
              @endforeach
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>OnePage</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="{{ $about->twitter }}" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="{{ $about->facebook }}" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="{{ $about->instagram }}" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('frontend/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend/js/main.js') }}"></script>
