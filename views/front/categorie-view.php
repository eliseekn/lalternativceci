    <?php
    ob_start();
    ?>
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
<br><br><br><br><br><br>
<body class="postpage-v1">
  <!-- Main layout -->
  <main>
    <!-- Intro -->
    <!-- <section>
      <div class="container-fluid">
        <h1 class="text-center dark-grey-text pb-2 mt-3">
          <strong > titre categorie</strong></h1>
        <p class="grey-text text-center mb-4 text-uppercase spacing">Bienvenue </p>
        
      </div>
    </section> -->
    <!-- Intro -->
    <!-- Blog section -->
    <section>
      <div class="container-fluid grey lighten-4">
        <hr class="my-5">
        <div class="container">
          <!-- Blog -->
          <div class="row mt-5 pt-3">
            <!-- Main listing -->
            <div class="col-lg-8 col-12 mt-1 mx-lg-4">
              <!-- Section: Blog v.3 -->
              <section class="pb-5 text-lg-left">
                <!-- Grid row -->
                <div class="row mb-4">
                
                  <!-- Grid column -->
                  <div id="" class="col-md-12">
                        <?php foreach ($categorie as $post) { ?>
                            <div  class="col-md-12 mb-4">
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
                                        <?= $post['title']['rendered'] ?></a>
                                        </h5>

                                        <hr class="mx-4 red title-hr">

                                        <p class="dark-grey-text mb-3">
                                            <?= mb_strimwidth($post['content']['rendered'], 0, 300, '...') ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                  </div>
                  <!-- Grid column -->
                </div>
                <!-- Grid row -->
              </section>
              <!-- Section: Blog v.3 -->
            </div>
            <!-- Main listing -->
            <!-- Sidebar -->
            <div class="col-lg-3 col-12 mt-1">
            <!--  Card -->
            <div class="card card-body pb-0">
                <div class="single-post">
                    <p class="font-weight-bold dark-grey-text text-center spacing red py-2 mb-4">
                        <strong>ACTUALITES</strong>
                    </p>
                    <!-- Grid row -->
                    <div id="" class="row mb-2">
                    <?php foreach ($actualite as $post) { ?>

                        <div  class="col-5">
                            <div class="view overlay">
                                <a href="<?= 'article?id='. $post['id'] ?>"> 
                                <img 
                                    src="<?php isset($post['featured_image_url']) ? print($post['featured_image_url']) : print('images/img1_webysee.jpg') ?>"
                                    class="card-img-top img-thumbnail">
                                </a>
                            </div>
                        </div>

                        <div class="col-7">
                            <h6 class="mt-0 font-small">
                            <a href="<?= 'article?id='. $post['id'] ?>">
                            <?= mb_strimwidth($post['title']['rendered'], 0, 50, '...') ?></a>
                            </h6>
                        </div>

                        <?php } ?>
                    </div>
                </div>
            </div>
              <!-- Section: Categories -->
              <section class="section my-5">
                                <!--  Card -->
                <div class="card card-body mt-3">
                    <div class="single-post">
                        <p class="font-weight-bold dark-grey-text text-center spacing red py-2 mb-4">
                            <strong>CATEGORIES</strong>
                        </p>
                        <ul class="list-group my-4">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a class="perso_textBleuLire" href="categorie?id=2">
                                    <p class="mb-0">A la une</p>
                                </a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a class="perso_textBleuLire" href="categorie?id=3">
                                    <p class="mb-0">Communiqué</p>
                                </a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="<?= URL ?>mouvement?id=46" class="perso_textBleuLire">
                                    <p class="mb-0">Notre vision</p>
                                </a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="adhere" class="perso_textBleuLire">
                                    <p class="mb-0">Adhérer</p>
                                </a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a class="perso_textBleuLire">
                                    <p class="mb-0">Agenda national</p>
                                </a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a class="perso_textBleuLire">
                                    <p class="mb-0">Diaspora</p>
                                </a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a class="perso_textBleuLire">
                                    <p class="mb-0">Donner</p>
                                </a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="esprit" class="perso_textBleuLire">
                                    <p class="mb-0">L'exprit l'Alternative CI</p>
                                </a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a class="perso_textBleuLire">
                                    <p class="mb-0">Chroniqueurs</p>
                                </a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a class="perso_textBleuLire">
                                    <p class="mb-0">Photos</p>
                                </a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a class="perso_textBleuLire">
                                    <p class="mb-0">L'AlternativeTV</p>
                                </a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a class="perso_textBleuLire">
                                    <p class="mb-0">L'Alternative YOUTUBE</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- Section: Categories -->
            </div>
            <!-- Sidebar -->
          </div>
          <!-- Blog -->
        </div>
    </section>
    <!-- Blog section -->
    
  </main>
  <!-- Main layout -->
  <?php
$content = ob_get_clean();
require_once"views/commons/template.php";
?>