
  <?php include "./include/head.php"?>
    <title>Intern</title>
    
   </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		  <? include "./include/nav.php" ?>
	  </nav>
    <!-- END nav -->
    <!-- start of font -->
    <div class="hero-wrap js-fullheight" style="background-image: url('');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-xl-10 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Sign Up and Share<br><span>To Win</span></h1>
            <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Result Display After</p>
            <div id="timer" class="d-flex mb-3">
						  <div class="time" id="days"></div>
						  <div class="time pl-4" id="hours"></div>
						  <div class="time pl-4" id="minutes"></div>
						  <div class="time pl-4" id="seconds"></div>
						</div>
          </div>
        </div>
      </div>
    </div>
 <!-- End of font -->
     <section class="ftco-section services-section bg-light">
		<?include "./include/products.php"?>	 
	</section>
   	
    <section class="ftco-counter img" id="section-counter">
    	<?php include "./include/winner.php"?>
    </section>

    <section class="ftco-section">
    	<? include "./include/bestproducts.php" ?>
	</section>
	<section id="form"class="ftco-section services-section bg-light">
		<? include "./include/form.php"?>
	</section>
      
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <? include "./include/footer.php" ?>
    </footer>
  <script src="js/copy.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script> 
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> 
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  </body>
</html>