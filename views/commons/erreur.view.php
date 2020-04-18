<?php
ob_start();
?>
<section>
      <div class="">
        <img src="https://mdbootstrap.com/img/Photos/Others/nature4.jpg" style="width: 100%">
      </div>
</section>
<!-- Main Layout -->
<main>

<div class="container-fluid mt-md-0 mt-5 mb-5">

  <!-- Grid row -->
  <div class="row" style="margin-top: -100px;">

    <!-- Grid column -->
    <div class="col-md-12 px-lg-5 mt-4">
      <!-- Card -->
      <div class="card pb-5 mx-md-3">
        <div class="card-body">

          <div class="container">

            <div class="row pt-lg-5 pt-3">

              <!-- Grid column -->
              <div class="col-md-12 col-xl-12 ">

                          <div class="alert alert-danger text-center" role="alert">
                          <strong><?= $errorMessage ?></strong>
                          </div>


                  <hr class="mt-5 mb-5">

                  
              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
      <!-- Card -->
    </div>
    <!-- Grid column -->
  </div>
  <!-- Grid row -->
</div>

</main>
<!-- Main Layout -->
<?php
$content = ob_get_clean();
require_once"views/commons/template.php";
?>