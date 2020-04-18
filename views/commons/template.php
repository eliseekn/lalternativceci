<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="<?= $description ?>"> 
    <title><?= $title?></title>
    <link rel="shortcut icon" type="image/png" href="<?= URL ?>public/sources/images/logo_laci.png"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="<?= URL ?>public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?= URL ?>public/bootstrap/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom scripts -->
    <link rel="stylesheet" href="<?= URL ?>public/css/style.css">
    </style>
</head>
<body class="homepage-v2">
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v6.0&appId=2940744005970570&autoLogAppEvents=1"></script>
    <!-- Navigation -->
    <header>
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light scrolling-navbar grey ">
            <div class="container-fluid justify-content-center align-items-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
                <a class="rounded border" href="accueil"><img src="<?= URL ?>public/sources/images/logo_laci.png" alt="" height="70">
                </a>
                <div class="collapse navbar-collapse justify-content-center " id="navbarSupportedContent-4">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light font-weight-bold perso_textBleu"  href="accueil" role="tab">
                                <i class="fas fa-home fa-2x"></i>
                                <br> Accueil</a>
                        </li>
                        <li class="nav-item dropdown ml-0  mb-0 pb">
                            <a href="#" class="nav-link dropdown-toggle waves-effect waves-light font-weight-bold perso_textBleu" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-book-open fa-2x"></i>
                                <br> Le mouvement</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink-4">
                                <a href="<?= URL ?>mouvement?id=42" class="dropdown-item waves-effect waves-light perso_textBleu" >Qui somme nous?</a>
                                <a href="<?= URL ?>mouvement?id=46" class="dropdown-item waves-effect waves-light perso_textBleu">Notre vision</a>
                                <a href="<?= URL ?>mouvement?id=44" class="dropdown-item waves-effect waves-light perso_textBleu">Notre programme</a>
                                <a href="<?= URL ?>mouvement?id=48" class="dropdown-item waves-effect waves-light perso_textBleu">Notre organigramme </a>
                                <a href="<?= URL ?>mouvement?id=50" class="dropdown-item waves-effect waves-light perso_textBleu">Pourquoi l’alternative-ci</a>
                                <a href="<?= URL ?>mouvement?id=52" class="dropdown-item waves-effect waves-light perso_textBleu">L’esprit l’alternative-ci</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light font-weight-bold perso_textBleu"  href="adhere" role="tab">
                                <i class="fas fa-sign-in-alt fa-2x"></i>
                                <br> J'adhère</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light font-weight-bold perso_textBleu"  href="contact" role="tab">
                            <i class="far fa-envelope fa-2x"></i>
                                <br> Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light font-weight-bold perso_textBleu"  href="construire" role="tab">
                            <i class="fas fa-tools fa-2x"></i>
                                <br> Construisons ensemble</a>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li class="nav-item">
                        <a href="https://twitter.com/SethKokoc" class="nav-link waves-effect waves-light perso_textBleu">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.facebook.com/sethkokoci/?ref=bookmarks" class="nav-link waves-effect waves-light perso_textBleu">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Navbar -->
    </header>
    <!-- Navigation -->
    <?=$content?>
    <!-- Footer -->
    <footer class="grey text-center text-md-left">
        <!-- Footer Links -->
        <div class="container">
            <!-- Footer links -->
            <!-- a renseigner -->
            <!-- Footer links -->
            <div class="row py-3 d-flex align-items-center">
                <!-- Grid column -->
                <div class="col-md-7 col-lg-8">
                    <!-- Copyright -->
                    <p class="text-center white-text ">
                        © 2020 Copyright  LALTERNATIVE CI  by <a href="https://webysee.com" target="_blank">webysee.com 
                    </a>
                    </p>
                    <!-- Copyright -->
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-5 col-lg-4 ml-lg-0">
                    <!-- Social buttons -->
                    <div class="social-section text-center text-md-left">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item mx-0 ">
                                <a href="https://www.facebook.com/sethkokoci/?ref=bookmarks" class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                                    <i class="fab fa-facebook-f perso_textBleu" ></i>
                                </a>
                            </li>
                            <li class="list-inline-item mx-0">
                                <a href="https://twitter.com/SethKokoc"  class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                                    <i class="fab fa-twitter perso_textBleu"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Social buttons -->
                </div>
                <!-- Grid column -->
            </div>
        </div>
    </footer>
    <!-- Footer -->
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="<?= URL ?>public/bootstrap/js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?= URL ?>public/bootstrap/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?= URL ?>public/bootstrap/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?= URL ?>public/bootstrap/js/mdb.min.js"></script>
    <script src="<?= URL ?>public/js/script.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript">
        // Animation
        new WOW().init();
        // MDB Lightbox Init
        $(function() {
            $("#mdb-lightbox-ui").load("<?= URL ?>public/bootstrap/mdb-addons/mdb-lightbox-ui.html");
        });
    </script>
</body>
</html>