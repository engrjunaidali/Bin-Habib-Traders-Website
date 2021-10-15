<link rel="stylesheet" href="css/style.css">
<!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-light py-3" id="aboutus" style="background-color: var(--themeColor) !important;">
  <!-- Section: Social media -->
 

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4 text-light border-bottom pb-2">
            <i class="fas fa-gem me-3"></i> BIN HABIB TRADERS
          </h6>
          <p>
          Everything we do is about you. We prioritize what you ned to get on your way. We strive to keep you at your best, and remain loyal to you, and your time. That's what Bin Habib organized for.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 text-light border-bottom pb-2">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Pure H<sub>2</sub>O</a>
          </p>
          <!-- <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p> -->
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 text-light border-bottom pb-2">
            Useful links
          </h6>
          <p>
            <a href="#products" class="text-reset">Products</a>
          </p>
          <p>
            <a href="#plans" class="text-reset">Plans</a>
          </p>
          <p>
            <a href="#team" class="text-reset">Team</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 text-light border-bottom pb-2">
            Contact
          </h6>
          <p class="float-left"><i class="fas fa-home me-3"></i> <?php echo $portfolio['address'];?></p>
          <p class="float-left"><i class="fas fa-envelope me-3"></i> <?php echo $portfolio['email'];?></p>
          <p class="float-left"><i class="fas fa-phone me-3"></i> <?php echo $portfolio['contact-1'];?></p>
          <p class="float-left"><i class="fas fa-phone me-3"></i> <?php echo $portfolio['contact-2'];?></p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © <?php echo date('Y');?> Copyright:
    <a class="text-reset fw-bold" href="https://binhabibtraders.com/"><?php echo $portfolio['website'];?></a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
<script src='./js/script.js'></script>
<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoiZW5ncmp1bmFpZGFsaTAiLCJhIjoiY2txdzZnYXd6MGxkazJwbzhkcjQwcjVqMyJ9.UhQu8FtdX3vMq_UB9KAMAg';
	var map = new mapboxgl.Map({
	container: 'map',
	style: 'mapbox://styles/mapbox/streets-v11',
	center: [-71.060982, 42.35725],
	zoom: 18,
	});


	</script>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>