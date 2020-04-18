<?php
ob_start();
?>
<section>
  <div class="view">
    <img src="https://mdbootstrap.com/img/Photos/Others/nature4.jpg" class="img-fluid" alt="placeholder">
      <div class="mask flex-center waves-effect waves-light">
        <h1 class="white-text">Bâtir une Côte d’Ivoire nouvelle, unie et développée</h1>
      </div>
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
            <!-- Section heading -->
            <h1 class="text-center h1 pt-4 mb-3 perso_textBleu1">
              <strong>Nous contacter</strong>
            </h1>
            <!-- Grid row -->
            <div class="row pt-lg-5 pt-3">
              <!-- Grid column -->
              <div class="col-md-12 col-xl-12">
                <form>
                                    <!-- Card -->
                  <div class="card card-cascade wider reverse">
                  <!-- Card image -->
                  <div class="view view-cascade overlay">
                    <img class="card-img-top" src="<?= URL ?>public/sources/images/logo_laci.png" height="400" alt="Card image cap">
                      
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card content -->
                  <div class="card-body card-body-cascade text-center">
                    <ul class="contact-icons text-center list-unstyled">
                        <li>
                          <i class="fab fa-whatsapp-square fa-2x blue-text"></i>
                          <p>+225 88 50 63 83</p>
                        </li>
                        <li>
                        <i class="fas fa-phone fa-2x blue-text"></i>
                          <p>+225 22 46 61 79</p>
                        </li>
                   
                        <li>
                            <i class="fas fa-map-marker-alt fa-2x blue-text"></i>
                            <p>Siège, Cocody, Riviera Bonomain</p>
                            <p>25 BP 5311 Abidjan 25</p>
                        </li>
                        <li>
                          <i class="fas fa-envelope fa-2x blue-text"></i>
                          <p>contact@lalternativeci.org</p>
                        </li>
                        <li>
                          <p><strong> Relation presse :</strong></p>
                          <p>c.lalternativeci@gmail.com</p>
                        </li>
                      </ul>
                    <div class="mt-4">
                    <!-- Twitter -->
                    <a href="https://twitter.com/SethKokoc" class="px-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a>
                    <!-- Dribbble -->
                    <a href="https://www.facebook.com/sethkokoci/?ref=bookmarks" class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a>
                    </div>
                  </div>
                  </div>
                  <!-- Card -->
                    <!-- Posts -->
                    <section class="text-left mt-4">
                    <h4 class="font-weight-bold mt-5 mb-5 text-center">
                      <strong>Nos news</strong>
                    </h4>
                          <!-- Grid row -->
                          <div class="row mb-4 mx-1">
                            <!-- Grid column -->
                          </div>
                          <!-- Grid row -->
                          <!-- Grid row -->
                          <div id="blog-basPage" class="row mb-4 mx-1">
                          </div>
                          <!-- Grid row -->
                    </section>
                    <!-- Posts -->
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