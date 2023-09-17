	<!-- footer section  -->
	<footer class="text-lg-start pt-3 pb-3">
	  <div class="container-main  text-md-start">
	    <div class="row">
	      <div class="col-xl-3 col-lg-3 col-md-6 logo-div">
	        <a class="logo-footer" href="{{ route('index') }}"><img src="{{ asset('home/images/logo-white.png') }}" alt=""></a> <br>
	        <div class="footer-icons">
	          <a href="https://www.instagram.com/learnwise_official/" target="_blank"><i class="ri-instagram-line"></i></a>
	          <a href="https://www.youtube.com/@LearnwiseApp" target="_blank"><i class="ri-youtube-line"></i></a>
	          <a href="https://wa.me/+917594939297" target="_blank"><i class="ri-whatsapp-line"></i></a>
	          <a href="https://www.linkedin.com/company/learnwise-ug-pg/" target="_blank"> <i class="ri-linkedin-box-line"></i></a>
	          <a href="https://www.facebook.com/learnwiseapp/" target="_blank"><i class="ri-facebook-circle-line"></i></a>
	        </div>
	        <p class="text-white">© 2024 - 2025 Learnwise.</p>
	        <div class="downld-app-icons">
	          <a href="https://apps.apple.com/in/app/myinstitute/id1472483563"><img class="app-icon" src="/home/images/appstore.png" alt=""></a>
	          <a href="https://play.google.com/store/apps/details?id=co.lynde.iciap"><img class="app-icon ml-3" src="/home/images/google-play.png" alt=""></a>
	        </div>
	      </div>
	      <div class="col-lg-3 col-md-6 col-6  mx-auto mb-4 information-div">
	        <h3 class="fw-bold footer-head">UG Programs</h3>
	        <p><a href="https://iciap.courses.store/188064" class="grey-text">BA (H) Psychology [BAPCH]</a></p>
	        <p><a href="https://iciap.courses.store/188055" class="grey-text">BA (H) English [BAEGH]</a></p>
	        <p><a href="https://iciap.courses.store/342407" class="grey-text">BA (H) Sociology [BASOH]</a></p>
	        <p><a href="https://iciap.courses.store/342578" class="grey-text">BA (H) History [BAHIH]</a></p>

	        <p><a href="https://iciap.courses.store/188068" class="grey-text">BCOMG </a></p>
	        <p><a href="https://iciap.courses.store/366445" class="grey-text">BBA</a></p>
	        </p>
	      </div>
	      <div class="col-lg-3 col-md-6 col-6 mx-auto mb-4 services-div">
	        <h3 class="fw-bold footer-head">PG Programs</h3>
	        <p><a href="https://iciap.courses.store/188109" class="grey-text">MA Psychology [MAPC]</a></p>
	        <p><a href="https://iciap.courses.store/342581" class="grey-text">MA English [MEG] </a></p>
	        <p><a href="https://iciap.courses.store/342587" class="grey-text">MA Sociology [MSO]</a></p>
	        <p><a href="https://iciap.courses.store/265255" class="grey-text">MBA </a></p>
	        <p><a href="https://iciap.courses.store/188748" class="grey-text">MCOM  </a></p>
	      </div>
	      <div class="col-lg-3 col-xl-3 col-md-6 mx-auto mb-md-0 mb-4 icon-contact">
	        <h3 class="fw-bold footer-head">Quick Links</h3>
	        <p><a href="{{ route('blogpage') }}" class="grey-text">IGNOUPEDIA</a></p>
	        <p><a href="{{ route('terms') }}" class="grey-text">Terms & Conditions</a></p>
	        <p><a href="{{ route('privacy') }}" class="grey-text">Privacy Policy</a></p>
	        <p><a href="{{ route('refund') }}" class="grey-text">Refund Policy</a></p>

	      </div>
	    </div>
	  </div>
	</footer>
	<!-- footer end  -->
	<!-- bootstrap scripts  -->
	<script>
	  function toggleCartt() {
	    document.querySelector('.sidebar').classList.toggle('open-cart');
	  }
	</script>
	<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}
    <script type="text/javascript"  src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" ></script>

</body>

	</html>

	<script>
  $('#fbt').addClass('active-course-btn');

</script>

