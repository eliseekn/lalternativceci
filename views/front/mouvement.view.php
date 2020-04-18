<?php
ob_start();
?>
<?php
    if(isset($_GET['id'])):
        $id_curr = $_GET['id'];
    else:
        $id_curr = 1;
    endif;
?>
<script>
    var currId = <?php  echo $id_curr; ?>
</script>
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
            <!-- Grid row -->
            <div class="row pt-lg-5 pt-3">
              <!-- Grid column -->
              <div class="col-md-12 col-xl-12">
                  <!-- Grid row -->
                  <div id="" class="row mt-3">
                    <div  class=" col-md-12 mb-4">
                      <div class="mx-4">
                          <h1 class="text-center perso_textBleu1">
                          <a href="<?= 'article?id='. $mouvement[0]['id'] ?>">
                                          <?= $mouvement[0]['title']['rendered'] ?></a>
                        </h1>
                        <hr class="mx-4 red title-hr">
                        <p class="dark-grey-text "><?= $mouvement[0]['content']['rendered'] ?></p>
                        </div>
                      </div>
                  </div>
                  <!-- Posts -->
                  <section class="text-left mt-4">
                  <div id=""  class="row">
                        <?php foreach ($bas_page as $post) { ?>
                          <div  class="col-md-4 mb-4">
                              <div  class="card">
                                  <div class="view overlay">
                                      <a href="<?= 'article?id='. $post['id'] ?>"> 
                                      <img 
                                          src="<?php isset($post['featured_image_url']) ? print($post['featured_image_url']) : print('images/img1_webysee.jpg') ?>" 
                                          class="card-img-top img-thumbnail">
                                      </a>
                                  </div>

                                  <div class="mx-1">
                                      <h5 class="text-center perso_textBleu1"><a href="<?= 'article?id='. $post['id'] ?>">
                                      <?= $post['title']['rendered'] ?> </a></h5>
                                      </div>
                                  </div>
                              </div>
                      <?php } ?>

                  </div>
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
