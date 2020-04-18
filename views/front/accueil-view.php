    <?php
    ob_start();
    ?>
    <!-- Main Layout -->
    <main>
                    <!-- Carousel Wrapper -->
            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
            </ol>
            <!-- Indicators -->
            <!-- Slides -->
            <div class="carousel-inner" role="listbox">
            <!-- First slide -->
            <div class="carousel-item active">
                <div class="view h-100">
                <img class="d-block h-100 w-lg-100" src="https://mdbootstrap.com/img/Photos/Others/city11.jpg"
                    alt="First slide">
                <div class="mask rgba-orange-light">
                    <!-- Caption -->
                    <div class="full-bg-img flex-center white-text">
                    <ul class="list-unstyled animated fadeIn col-10">
                        <li>
                        <h1 class="h1-responsive font-weight-bold">La Côte d’Ivoire de demain c’est toi et moi. Rejoins le mouvement 
                        </h1>
                        </li>
                        <li>
                        <a target="_blank" href="adhere"
                            class="btn btn-warning" rel="nofollow">Rejoignez-nous</a>
                        </li>
                    </ul>
                    </div>
                    <!-- Caption -->
                </div>
                </div>
            </div>
            <!-- First slide -->
            <!-- Second slide -->
            <div class="carousel-item h-100">
                <div class="view h-100">
                <img class="d-block h-100 w-lg-100" src="https://mdbootstrap.com/img/Photos/Others/city13.jpg"
                    alt="Second slide">
                <div class="mask rgba-stylish-strong">
                    <!-- Caption -->
                    <div class="full-bg-img flex-center white-text">
                    <ul class="list-unstyled animated fadeIn col-10">
                        <li>
                        <h1 class="h1-responsive font-weight-bold">l’alternative-ci, c’est la naissance d’une Cote d’Ivoire nouvelle, unie et développée </h1>
                        </li>
                        <li>
                        <a target="_blank" href="contact" class="btn btn-light"
                            rel="nofollow">Contactez-nous</a>
                        </li>
                    </ul>
                    </div>
                    <!-- Caption -->
                </div>
                </div>
            </div>
            <!-- Second slide -->
            <!-- Third slide -->
            <div class="carousel-item">
                <div class="view h-100">
                <img class="d-block h-100 w-lg-100" src="https://mdbootstrap.com/img/Photos/Others/city8.jpg"
                    alt="Third slide">
                <div class="mask rgba-green-light">
                    <!-- Caption -->
                    <div class="full-bg-img flex-center white-text">
                    <ul class="list-unstyled animated fadeIn col-md-12">
                        <li>
                        <h1 class="h1-responsive font-weight-bold">Tourner définitivement la page des guerres de l’après Houphouët Boigny 
                        </h1>
                        </li>
                        <li>
                        <a target="_blank" href="construire" class="btn btn-success"
                            rel="nofollow">Construisons-ensemble</a>
                        </li>
                    </ul>
                    </div>
                    <!-- Caption -->
                </div>
                </div>
            </div>
            <!-- Third slide -->
            </div>
            <!-- Slides -->
            <!-- Controls -->
            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
            <!-- Controls -->
            </div>
            <!-- Carousel Wrapper -->
        <!-- Intro -->
        <section>
            <div class="container">
                <!-- Titre -->
                <br>
                <h1 class="text-center dark-grey-text pb-2 pt-2 perso_textBleuLire">
                    L'ALTERNATIVE CI
                </h1>
                <!-- Grid row -->
                <div class="row flex-center">
                    
                    <!-- Grid column -->
                    <div class="col-md-3 flex-center">
                             <img src="public/sources/images/drapeau-cote-d-ivoire.png" height="100" alt="">
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-6 ">
                        <h4 class=" text-center perso_textBleu1">
                             BÂTIR UNE COTE D’IVOIRE SÉCURISEE, RÉCONCILIEE, EN PAIX ET AU TRAVAIL
                        </h4>
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-3 flex-center">
                             <img src="public/sources/images/drapeau-cote-d-ivoire.png" height="100" alt="">
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
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
                            <section class="pb-3 text-center text-lg-left">
                                <!-- Grid row -->
                                <div class="row mb-4">
                                    <!-- Grid column -->
                                    <div id="" class=" col-md-12">
                                        <div  class="col-md-12 mb-4">
                                            <div  class="card">
                                                <div class="view overlay">
                                                    <a href="<?= 'article?id='. $a_la_une1[0]['id'] ?>"> 
                                                    <img 
                                                        src="<?php isset($a_la_une1[0]['featured_image_url']) ? print($a_la_une1[0]['featured_image_url']) : print('images/img1_webysee.jpg') ?>" 
                                                        class="card-img-top img-thumbnail">
                                                    </a>
                                                </div>

                                                <div class="mx-1">
                                                    <h5 class="text-center perso_textBleu1"><a href="<?= 'article?id='. $a_la_une1[0]['id'] ?>">
                                                    <?= $a_la_une1[0]['title']['rendered'] ?> </a></h5>

                                                    <hr class="mx-4 red title-hr">

                                                    <p class="dark-grey-text mb-3">
                                                        <?= mb_strimwidth($a_la_une1[0]['content']['rendered'], 0, 300, '...') ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Grid column -->
                                    
                                </div>
                                <!-- Grid row -->
                                <!-- Grid row -->
                                <div id="" class="row text-center">

                                <?php foreach ($reportage as $post) { ?>
                                    <div  class="col-md-6 mb-4">
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
                                <!-- Grid row -->
                                       <!-- Grid row -->
                                <div class="row mb-4"> 
                                        <!-- Grid column -->
                                    <div id="" class="col-md-12">   

                                        <div  class="col-md-12 mb-4">
                                            <div  class="card">
                                                <div class="view overlay">
                                                    <a href="<?= 'article?id='. $a_la_une2[0]['id'] ?>"> 
                                                    <img 
                                                        src="<?php isset($a_la_une2[0]['featured_image_url']) ? print($a_la_une2[0]['featured_image_url']) : print('images/img1_webysee.jpg') ?>" 
                                                        class="card-img-top img-thumbnail">
                                                    </a>
                                                </div>

                                                <div class="mx-1">
                                                    <h5 class="text-center perso_textBleu1"><a href="<?= 'article?id='. $a_la_une2[0]['id'] ?>">
                                                    <?= $a_la_une2[0]['title']['rendered'] ?> </a></h5>

                                                    <hr class="mx-4 red title-hr">

                                                    <p class="dark-grey-text mb-3">
                                                        <?= mb_strimwidth($a_la_une2[0]['content']['rendered'], 0, 300, '...') ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>                        
                                    </div>
                                        <!-- Grid column -->
                                </div>
                                    <!-- Grid row -->
                                
                                <div class="card px-2 red">
                                    <h5 class="font-weight-bold dark-grey-text text-center spacing red py-3">
                                        <strong>NOTRE  VISION</strong>
                                    </h5>
                                
                                <!-- Grid row -->
                                       <!-- Grid row -->
                                <!-- Grid row -->
                                <div id="" class="row text-center">
                                    <?php foreach ($vision as $post) { ?>

                                        <div  class="col-md-6 mb-4">
                                            <div  class="card">
                                                <div class="view overlay">
                                                    <a href="<?= 'article?id='. $post['id'] ?>"> 
                                                    <img 
                                                        src="<?php isset($post['featured_image_url']) ? print($post['featured_image_url']) : print('images/img1_webysee.jpg') ?>" 
                                                        class="card-img-top img-thumbnail">
                                                    </a>
                                                </div>

                                                <div class="px-1">
                                                    <h5 class="text-center perso_textBleu1"><a href="<?= 'article?id='. $post['id'] ?>">
                                                    <?= $post['title']['rendered'] ?> </a></h5>

                                                    <hr class="mx-4 red title-hr">

                                                    <p class="dark-grey-text mb-3">
                                                        <?= $post['content']['rendered'] ?>
                                                    </p>
                                                </div>     
                                            </div>                 
                                        </div>

                                        <?php } ?>
                                    </div>
                                </div>
                            </section>
                            <!-- Section: Blog v.3 -->
                        </div>
                        <!-- Main listing -->
                        <!-- Sidebar -->
                        <div class="col-lg-3  mt-1">
                            <!-- Section: Featured posts -->
                            <section class="section widget-content mb-5">
                                <!--  Card -->
                                <div class="card card-body pb-3">
                                    <div class="single-post">
                                        <p class="font-weight-bold dark-grey-text text-center spacing red py-2 mb-4">
                                            <strong>EDITORIAL</strong>
                                        </p>
                                        <div id="">
                                            <p class="mt-3 dark-grey-text font-small text-center">
                                                <em>
                                                    <a href="<?= 'article?id='. $edito[0]['id'] ?>">
                                                        <?= mb_strimwidth($edito[0]['content']['rendered'], 0, 278, '[...]') ?>
                                                    </a>
                                                </em>
                                            <p> 
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--  Section: Featured posts -->
                            <!-- Card -->
                            <div class="card">
                                <!-- Card content -->
                                <div class="card-body">
                                    <!-- Title -->
                                    <h5 class="card-title dark-grey-text text-center red py-2">
                                        <strong>Seth KOKO</strong>
                                    </h5>
                                             <!-- Card image -->
                                    <div class="view overlay">
                                        <img src="public/sources/images/leader_5.jpg" class="card-img-top" alt="">
                                    </div>
                                <!-- Card image -->
                                    <!-- Description -->
                                    <p class="mt-3 dark-grey-text font-small text-center">
                                        <em> 
                                        M. Seth KOKO, 43 ans, Social-libéral 
                                        Consultant, Expert en stratégie diplomatique et politique, 
                                        Fondateur du mouvement politique L’ALTERNATIVE-CI
                                        </em>
                                    </p>
                                    <ul class="list-unstyled list-inline-item circle-icons list-unstyled flex-center">
                                        <!-- Facebook -->
                                        <li>
                                            <a href="https://www.facebook.com/sethkokoci/?ref=bookmarks" class="fb-ic">
                                                <i class="fab fa-facebook-f"> </i>
                                            </a>
                                        </li>
                                        <!-- Twitter -->
                                        <li>
                                            <a href="https://twitter.com/SethKokoc" class="tw-ic">
                                                <i class="fab fa-twitter mx-3"> </i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Card content -->
                            </div>
                            <!-- Card -->
                            <!-- Section: Featured posts -->
                            <section class="section widget-content mt-5">
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
                            
                            </section>
                            <!--  Section: Featured posts -->
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
                            <!-- Newsletter -->
                            <section class="my-5">
                                <!--  Card -->
                                <div class="card card-body pb-0">
                                    <div class="single-post">
                                        <p class="font-weight-bold dark-grey-text text-center spacing red py-2 mb-4">
                                            <strong>NEWSLETTER</strong>
                                        </p>
                                        <!-- Grid row -->
                                        <div class="row mt-4">
                                            <!-- Grid column -->
                                            <div class="col-md-12">
                                                <div class="input-group md-form form-sm form-3 pl-0">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text white black-text" id="basic-addon9">@</span>
                                                    </div>
                                                    <input type="text" class="form-control mt-0 black-border rgba-white-strong" placeholder="Username" aria-describedby="basic-addon9">
                                                </div>
                                                <button type="button" class="btn btn-grey btn-block my-4">Nous suivre</button>
                                            </div>
                                            <!-- Grid column -->
                                        </div>
                                        <!-- Grid row -->
                                    </div>
                                </div>
                            </section>
                            <!-- Newsletter -->
                            <!-- facebook -->
                            <section class="my-5">
                                <!--  Card -->
                                <div class="card card-body pb-0">
                                    <div class="single-post">
                                        <p class="font-weight-bold dark-grey-text text-center spacing red py-2 mb-4">
                                        <i class="fab fa-facebook-square fa-2x"></i>
                                            <strong>FACEBOOK</strong>
                                        </p>
                                        <div class="input-group md-form form-sm form-3 pl-0">
                                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsethkokoci%2F&tabs=timeline&width=250&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=2940744005970570" width="250" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Facebook -->
                            <!-- Popular posts -->
                            <section class="mb-4">
                                <!-- Grid row -->
                                <div class="row mt-4">
                                    <!-- Grid column -->
                                    <div class="col-md-12 col-lg-12">
                                            <!--  Card -->
                                    <div class="card card-body pb-2">
                                        <div class="single-post">
                                            <p class="font-weight-bold dark-grey-text text-center spacing red py-2">
                                                <strong>L'alternative TV</strong>
                                            </p>
                                            <div class="mb-3 text-center">
                                            <p>bientôt en ligne</p>
                                        </div>
                                    </div>
                                    </div>
                                    <!-- Grid column -->
                                </div>
                                <!-- Grid row -->
                            </section>
                            <!-- Popular posts -->
                            <!-- Popular posts -->
                            <section class="mb-4">
                                <!-- Grid row -->
                                <div class="row mt-4">
                                    <!-- Grid column -->
                                    <div class="col-md-12 col-lg-12">
                                            <!--  Card -->
                                    <div class="card card-body pb-2">
                                        <div class="single-post">
                                            <p class="font-weight-bold dark-grey-text text-center spacing red py-2 mb-4">
                                                <strong>Vidéos d'archive</strong>
                                            </p>
                                            <div class="embed-responsive embed-responsive-16by9 mb-3">
                                            <a href="https://www.youtube.com/embed/bivgHqIOd9U"> <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/bivgHqIOd9U" allowfullscreen></iframe>
                                            </a>
                                            </div>
                                            <div class="embed-responsive embed-responsive-16by9 mb-3">
                                            <a href="https://www.youtube.com/embed/FEeAqX7SaBg"><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/FEeAqX7SaBg" allowfullscreen></iframe>
                                            </a>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!-- Grid column -->
                                </div>
                                <!-- Grid row -->
                            </section>
                            <!-- Popular posts -->
                            
                        </div>
                        <!-- Sidebar -->
                    </div>
                    <!-- Blog -->
                </div>
            </div>
        </section>
        <!-- Blog section -->
    </main>
    <!-- Main Layout -->
<?php
$content = ob_get_clean();
require_once"views/commons/template.php";
?>