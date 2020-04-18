<!DOCTYPE html>
<html lang="en" class="">
<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>L'alternative CI</title>
  <link rel="shortcut icon" type="imdomaine/png" href="<?= URL ?>public/sources/imdomaines/logo_laci.png"/>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?= URL ?>views/front/adherer/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?= URL ?>views/front/adherer/css/mdb.min.css" rel="stylesheet">
    <!-- css -->
  <link rel="stylesheet" href="<?= URL ?>public/css/style.css">
  <style>
    .btn .fas, .btn .fab, .btn .far {
      margin-left: 3px;
    }
    h6 {
      line-height: 1.7;
    }
    footer.pdomaine-footer {
      margin-top: 0px;
      padding-top: 0px;
    }
    body {
      background-color: #eee;
    }
    .btn.peach-gradient {
      color: #fff !important;
    }
    .map-container-section {
      overflow:hidden;
      /* padding-bottom:56.25%; */
      position:relative;
      height:0;
    }
  .map-container-section iframe {
      left:0;
      top:0;
      height:100%;
      width:100%;
      position:absolute;
    }
  </style>
</head>
<body>
  <!--Main Navigation-->
  <header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar peach-gradient">
      <div class="container">
      <a class="navbar-brand" href="<?= URL ?>accueil">
        <img class="rounded  d-block" src="<?= URL ?>views/front/adherer/img/logo_laci.png" height="70" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
          aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?= URL ?>accueil">Accueil
              </a>
            </li>
        </div>
      </div>
    </nav>
    <section>
      <div id="map-container-demo-section" class="z-depth-1-half map-container-section mb-4" style="height: 500px">
        <iframe src="https://maps.google.com/maps?q=Abidjan&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0"></iframe>
      </div>
    </section>
  </header>
  <!--Main Navigation-->
  <!--Main Layout-->
  <main>
    <div class="container-fluid mb-5">
      <!--Grid row-->
      <div class="row mx-3" style="margin-top: -100px;">
        <!--Grid column-->
        <div class="col-md-12">
          <div class="card pb-5 bg">
            <div class="card-body">
              <div class="container">
                <!--Section: Contact v.2-->
                <section class="section">
                  <!--Section heading-->
                  <h2 class="mb-4 pb-4 font-weight-bold h1  perso_textBleuLire">CONSTRUISONS ENSEMBLE</h2>
                  <!--Section description-->
                  <h5 class="mb-2 text-uppercase"><strong>Pour bâtir une Côte d’Ivoire sécurisée et réconciliée, en paix et au travail.</strong></h5>
                  <p class="">
                  Le mouvement fédère déjà plusieurs jeunes leaders aux compétences reconnues dans leurs domaines,
                  des cadres et des doyens de la politique ivoirienne, qui aspirent tous à un changement de la classe
                  politique ivoirienne en 2020.</p>
                  <p class="">
                  Ivoirienne, ivoirien, cher ami (e) de la Côte d’Ivoire, depuis cette position d'intellectuel, de star, de
                  cadre dynamique, d'opérateur économique et même de retraité que tu occupes, tu peux aider ou
                  intégrer la direction du mouvement et devenir une ALTERNATIVE à l’échec de tes devanciers
                  politiques.</p>
                  <p class="">
                  Devient Acteur du changement aux côtés de personnes issues de la société civile, une équipe pouvant
                  transcender tous ces clivages pour permettre ce changement que nous appelons de tous nos vœux
                  depuis nos salons et nos smartphones.</p>
                  <div class="row mt-2">
                  <div class="col-md-8 col-xl-9">
                  <strong><h5 class="text-center blue-text" >J’INTEGRE OU J’AIDE LA DIRECTION </h5></strong>
                  </div>
                    <!--Grid column-->
                    <div class="col-md-8 col-xl-9">
                  <div class="card">
                    <div class="card-body">
                      <form>
                        <!--Grid row-->
                        <form method="POST" action="#" class="p-1">
                            <div class="form-group md-form row no-gutters align-items-center">
                                <input type="text" name="nom" id="nom" class="form-control col" Placeholder = "Nom" required/>
                            </div>
                            <div class="form-group md-form row no-gutters align-items-center">
                                <input type="text" name="prenom" id="prenom" class="form-control col" Placeholder = "Prenom" required/>
                            </div>
                            <div class="form-group md-form row no-gutters align-items-center">
                                <select class='form-control col' id="sexe" name="sexe">
                                    <option value="" disabled selected>Sexe</option>
                                    <option value="Feminin">Feminin</option>
                                    <option value="Masculin">Masculin</option>
                                </select>
                            </div>
                            <div class="form-group md-form row no-gutters align-items-center">
                                <input type="phone" name="telephone" id="telephone" class="form-control col" Placeholder = "Téléphone" required/>
                            </div>
                            <div class="form-group md-form row no-gutters align-items-center">
                                <input type="text" name="domaine" id="domaine" class="form-control col" Placeholder = "Votre domaine de competence" required/>
                            </div>
                            <div class="form-group md-form row no-gutters align-items-center">
                                <input type="email" name="mail" id="mail" class="form-control col" Placeholder = "E-mail" required/>
                            </div>
                            <div class="form-group md-form row no-gutters align-items-center">
                                <select class='form-control col' id="nationalite" name="nationalite" >
                                <option value="" disabled selected>Nationalité</option>
                                <optgroup label="Afrique">
                                <option value="afriqueDuSud">Afrique Du Sud</option>
                                <option value="algerie">Algérie</option>
                                <option value="angola">Angola</option>
                                <option value="benin">Bénin</option>
                                <option value="botswana">Botswana</option>
                                <option value="burkina">Burkina</option>
                                <option value="burundi">Burundi</option>
                                <option value="cameroun">Cameroun</option>
                                <option value="capVert">Cap-Vert</option>
                                <option value="republiqueCentre-Africaine">République Centre-Africaine</option>
                                <option value="comores">Comores</option>
                                <option value="republiqueDemocratiqueDuCongo">République Démocratique Du Congo</option>
                                <option value="congo">Congo</option>
                                <option value="coteIvoire">Côte d'Ivoire</option>
                                <option value="djibouti">Djibouti</option>
                                <option value="egypte">Égypte</option>
                                <option value="ethiopie">Éthiopie</option>
                                <option value="erythrée">Érythrée</option>
                                <option value="gabon">Gabon</option>
                                <option value="gambie">Gambie</option>
                                <option value="ghana">Ghana</option>
                                <option value="guinee">Guinée</option>
                                <option value="guinee-Bisseau">Guinée-Bisseau</option>
                                <option value="guineeEquatoriale">Guinée Équatoriale</option>
                                <option value="kenya">Kenya</option>
                                <option value="lesotho">Lesotho</option>
                                <option value="liberia">Liberia</option>
                                <option value="libye">Libye</option>
                                <option value="madagascar">Madagascar</option>
                                <option value="malawi">Malawi</option>
                                <option value="mali">Mali</option>
                                <option value="maroc">Maroc</option>
                                <option value="maurice">Maurice</option>
                                <option value="mauritanie">Mauritanie</option>
                                <option value="mozambique">Mozambique</option>
                                <option value="namibie">Namibie</option>
                                <option value="niger">Niger</option>
                                <option value="nigeria">Nigeria</option>
                                <option value="ouganda">Ouganda</option>
                                <option value="rwanda">Rwanda</option>
                                <option value="saoTomeEtPrincipe">Sao Tomé-et-Principe</option>
                                <option value="senegal">Séngal</option>
                                <option value="seychelles">Seychelles</option>
                                <option value="sierra">Sierra</option>
                                <option value="somalie">Somalie</option>
                                <option value="soudan">Soudan</option>
                                <option value="swaziland">Swaziland</option>
                                <option value="tanzanie">Tanzanie</option>
                                <option value="tchad">Tchad</option>
                                <option value="togo">Togo</option>
                                <option value="tunisie">Tunisie</option>
                                <option value="zambie">Zambie</option>
                                <option value="zimbabwe">Zimbabwe</option>
                                </optgroup>
                                <optgroup label="Amérique">
                                <option value="antiguaEtBarbuda">Antigua-et-Barbuda</option>
                                <option value="argentine">Argentine</option>
                                <option value="bahamas">Bahamas</option>
                                <option value="barbade">Barbade</option>
                                <option value="belize">Belize</option>
                                <option value="bolivie">Bolivie</option>
                                <option value="bresil">Brésil</option>
                                <option value="canada">Canada</option>
                                <option value="chili">Chili</option>
                                <option value="colombie">Colombie</option>
                                <option value="costaRica">Costa Rica</option>
                                <option value="cuba">Cuba</option>
                                <option value="republiqueDominicaine">République Dominicaine</option>
                                <option value="dominique">Dominique</option>
                                <option value="equateur">Équateur</option>
                                <option value="etatsUnis">États Unis</option>
                                <option value="grenade">Grenade</option>
                                <option value="guatemala">Guatemala</option>
                                <option value="guyana">Guyana</option>
                                <option value="haiti">Haïti</option>
                                <option value="honduras">Honduras</option>
                                <option value="jamaique">Jamaïque</option>
                                <option value="mexique">Mexique</option>
                                <option value="nicaragua">Nicaragua</option>
                                <option value="panama">Panama</option>
                                <option value="paraguay">Paraguay</option>
                                <option value="perou">Pérou</option>
                                <option value="saintCristopheEtNieves">Saint-Cristophe-et-Niévès</option>
                                <option value="sainteLucie">Sainte-Lucie</option>
                                <option value="saintVincentEtLesGrenadines">Saint-Vincent-et-les-Grenadines</option>
                                <option value="salvador">Salvador</option>
                                <option value="suriname">Suriname</option>
                                <option value="triniteEtTobago">Trinité-et-Tobago</option>
                                <option value="uruguay">Uruguay</option>
                                <option value="venezuela">Venezuela</option>
                                </optgroup>
                                <optgroup label="Asie">
                                <option value="afghanistan">Afghanistan</option>
                                <option value="arabieSaoudite">Arabie Saoudite</option>
                                <option value="armenie">Arménie</option>
                                <option value="azerbaidjan">Azerbaïdjan</option>
                                <option value="bahrein">Bahreïn</option>
                                <option value="bangladesh">Bangladesh</option>
                                <option value="bhoutan">Bhoutan</option>
                                <option value="birmanie">Birmanie</option>
                                <option value="brunei">Brunéi</option>
                                <option value="cambodge">Cambodge</option>
                                <option value="chine">Chine</option>
                                <option value="coreeDuSud">Corée Du Sud</option>
                                <option value="coreeDuNord">Corée Du Nord</option>
                                <option value="emiratsArabeUnis">Émirats Arabe Unis</option>
                                <option value="georgie">Géorgie</option>
                                <option value="inde">Inde</option>
                                <option value="indonesie">Indonésie</option>
                                <option value="iraq">Iraq</option>
                                <option value="iran">Iran</option>
                                <option value="israel">Israël</option>
                                <option value="japon">Japon</option>
                                <option value="jordanie">Jordanie</option>
                                <option value="kazakhstan">Kazakhstan</option>
                                <option value="kirghistan">Kirghistan</option>
                                <option value="koweit">Koweït</option>
                                <option value="laos">Laos</option>
                                <option value="liban">Liban</option>
                                <option value="malaisie">Malaisie</option>
                                <option value="maldives">Maldives</option>
                                <option value="mongolie">Mongolie</option>
                                <option value="nepal">Népal</option>
                                <option value="oman">Oman</option>
                                <option value="ouzbekistan">Ouzbékistan</option>
                                <option value="pakistan">Pakistan</option>
                                <option value="philippines">Philippines</option>
                                <option value="qatar">Qatar</option>
                                <option value="singapour">Singapour</option>
                                <option value="sriLanka">Sri Lanka</option>
                                <option value="syrie">Syrie</option>
                                <option value="tadjikistan">Tadjikistan</option>
                                <option value="taiwan">Taïwan</option>
                                <option value="thailande">Thaïlande</option>
                                <option value="timorOriental">Timor oriental</option>
                                <option value="turkmenistan">Turkménistan</option>
                                <option value="turquie">Turquie</option>
                                <option value="vietNam">Viêt Nam</option>
                                <option value="yemen">Yemen</option>
                                </optgroup>
                                <optgroup label="Europe">
                                <option value="allemagne">Allemagne</option>
                                <option value="albanie">Albanie</option>
                                <option value="andorre">Andorre</option>
                                <option value="autriche">Autriche</option>
                                <option value="bielorussie">Biélorussie</option>
                                <option value="belgique">Belgique</option>
                                <option value="bosnieHerzegovine">Bosnie-Herzégovine</option>
                                <option value="bulgarie">Bulgarie</option>
                                <option value="croatie">Croatie</option>
                                <option value="danemark">Danemark</option>
                                <option value="espagne">Espagne</option>
                                <option value="estonie">Estonie</option>
                                <option value="finlande">Finlande</option>
                                <option value="france">France</option>
                                <option value="grece">Grèce</option>
                                <option value="hongrie">Hongrie</option>
                                <option value="irlande">Irlande</option>
                                <option value="islande">Islande</option>
                                <option value="italie">Italie</option>
                                <option value="lettonie">Lettonie</option>
                                <option value="liechtenstein">Liechtenstein</option>
                                <option value="lituanie">Lituanie</option>
                                <option value="luxembourg">Luxembourg</option>
                                <option value="exRepubliqueYougoslaveDeMacedoine">Ex-République Yougoslave de Macédoine</option>
                                <option value="malte">Malte</option>
                                <option value="moldavie">Moldavie</option>
                                <option value="monaco">Monaco</option>
                                <option value="norvege">Norvège</option>
                                <option value="paysBas">Pays-Bas</option>
                                <option value="pologne">Pologne</option>
                                <option value="portugal">Portugal</option>
                                <option value="roumanie">Roumanie</option>
                                <option value="royaumeUni">Royaume-Uni</option>
                                <option value="russie">Russie</option>
                                <option value="saintMarin">Saint-Marin</option>
                                <option value="serbieEtMontenegro">Serbie-et-Monténégro</option>
                                <option value="slovaquie">Slovaquie</option>
                                <option value="slovenie">Slovénie</option>
                                <option value="suede">Suède</option>
                                <option value="suisse">Suisse</option>
                                <option value="republiqueTcheque">République Tchèque</option>
                                <option value="ukraine">Ukraine</option>
                                <option value="vatican">Vatican</option>
                                </optgroup>
                                <optgroup label="Océanie">
                                <option value="australie">Australie</option>
                                <option value="fidji">Fidji</option>
                                <option value="kiribati">Kiribati</option>
                                <option value="marshall">Marshall</option>
                                <option value="micronesie">Micronésie</option>
                                <option value="nauru">Nauru</option>
                                <option value="nouvelleZelande">Nouvelle-Zélande</option>
                                <option value="palaos">Palaos</option>
                                <option value="papouasieNouvelleGuinee">Papouasie-Nouvelle-Guinée</option>
                                <option value="salomon">Salomon</option>
                                <option value="samoa">Samoa</option>
                                <option value="tonga">Tonga</option>
                                <option value="tuvalu">Tuvalu</option>
                                <option value="vanuatu">Vanuatu</option>
                                </select>
                            </div>
                            <div class="form-group md-form row no-gutters align-items-center">
                                <select class='form-control col' id="residence" name="residence">
                                <option value="" disabled selected>Pays de residence</option>
                                <optgroup label="Afrique">
                                <option value="afriqueDuSud">Afrique Du Sud</option>
                                <option value="algerie">Algérie</option>
                                <option value="angola">Angola</option>
                                <option value="benin">Bénin</option>
                                <option value="botswana">Botswana</option>
                                <option value="burkina">Burkina</option>
                                <option value="burundi">Burundi</option>
                                <option value="cameroun">Cameroun</option>
                                <option value="capVert">Cap-Vert</option>
                                <option value="republiqueCentre-Africaine">République Centre-Africaine</option>
                                <option value="comores">Comores</option>
                                <option value="republiqueDemocratiqueDuCongo">République Démocratique Du Congo</option>
                                <option value="congo">Congo</option>
                                <option value="coteIvoire">Côte d'Ivoire</option>
                                <option value="djibouti">Djibouti</option>
                                <option value="egypte">Égypte</option>
                                <option value="ethiopie">Éthiopie</option>
                                <option value="erythrée">Érythrée</option>
                                <option value="gabon">Gabon</option>
                                <option value="gambie">Gambie</option>
                                <option value="ghana">Ghana</option>
                                <option value="guinee">Guinée</option>
                                <option value="guinee-Bisseau">Guinée-Bisseau</option>
                                <option value="guineeEquatoriale">Guinée Équatoriale</option>
                                <option value="kenya">Kenya</option>
                                <option value="lesotho">Lesotho</option>
                                <option value="liberia">Liberia</option>
                                <option value="libye">Libye</option>
                                <option value="madagascar">Madagascar</option>
                                <option value="malawi">Malawi</option>
                                <option value="mali">Mali</option>
                                <option value="maroc">Maroc</option>
                                <option value="maurice">Maurice</option>
                                <option value="mauritanie">Mauritanie</option>
                                <option value="mozambique">Mozambique</option>
                                <option value="namibie">Namibie</option>
                                <option value="niger">Niger</option>
                                <option value="nigeria">Nigeria</option>
                                <option value="ouganda">Ouganda</option>
                                <option value="rwanda">Rwanda</option>
                                <option value="saoTomeEtPrincipe">Sao Tomé-et-Principe</option>
                                <option value="senegal">Séngal</option>
                                <option value="seychelles">Seychelles</option>
                                <option value="sierra">Sierra</option>
                                <option value="somalie">Somalie</option>
                                <option value="soudan">Soudan</option>
                                <option value="swaziland">Swaziland</option>
                                <option value="tanzanie">Tanzanie</option>
                                <option value="tchad">Tchad</option>
                                <option value="togo">Togo</option>
                                <option value="tunisie">Tunisie</option>
                                <option value="zambie">Zambie</option>
                                <option value="zimbabwe">Zimbabwe</option>
                                </optgroup>
                                <optgroup label="Amérique">
                                <option value="antiguaEtBarbuda">Antigua-et-Barbuda</option>
                                <option value="argentine">Argentine</option>
                                <option value="bahamas">Bahamas</option>
                                <option value="barbade">Barbade</option>
                                <option value="belize">Belize</option>
                                <option value="bolivie">Bolivie</option>
                                <option value="bresil">Brésil</option>
                                <option value="canada">Canada</option>
                                <option value="chili">Chili</option>
                                <option value="colombie">Colombie</option>
                                <option value="costaRica">Costa Rica</option>
                                <option value="cuba">Cuba</option>
                                <option value="republiqueDominicaine">République Dominicaine</option>
                                <option value="dominique">Dominique</option>
                                <option value="equateur">Équateur</option>
                                <option value="etatsUnis">États Unis</option>
                                <option value="grenade">Grenade</option>
                                <option value="guatemala">Guatemala</option>
                                <option value="guyana">Guyana</option>
                                <option value="haiti">Haïti</option>
                                <option value="honduras">Honduras</option>
                                <option value="jamaique">Jamaïque</option>
                                <option value="mexique">Mexique</option>
                                <option value="nicaragua">Nicaragua</option>
                                <option value="panama">Panama</option>
                                <option value="paraguay">Paraguay</option>
                                <option value="perou">Pérou</option>
                                <option value="saintCristopheEtNieves">Saint-Cristophe-et-Niévès</option>
                                <option value="sainteLucie">Sainte-Lucie</option>
                                <option value="saintVincentEtLesGrenadines">Saint-Vincent-et-les-Grenadines</option>
                                <option value="salvador">Salvador</option>
                                <option value="suriname">Suriname</option>
                                <option value="triniteEtTobago">Trinité-et-Tobago</option>
                                <option value="uruguay">Uruguay</option>
                                <option value="venezuela">Venezuela</option>
                                </optgroup>
                                <optgroup label="Asie">
                                <option value="afghanistan">Afghanistan</option>
                                <option value="arabieSaoudite">Arabie Saoudite</option>
                                <option value="armenie">Arménie</option>
                                <option value="azerbaidjan">Azerbaïdjan</option>
                                <option value="bahrein">Bahreïn</option>
                                <option value="bangladesh">Bangladesh</option>
                                <option value="bhoutan">Bhoutan</option>
                                <option value="birmanie">Birmanie</option>
                                <option value="brunei">Brunéi</option>
                                <option value="cambodge">Cambodge</option>
                                <option value="chine">Chine</option>
                                <option value="coreeDuSud">Corée Du Sud</option>
                                <option value="coreeDuNord">Corée Du Nord</option>
                                <option value="emiratsArabeUnis">Émirats Arabe Unis</option>
                                <option value="georgie">Géorgie</option>
                                <option value="inde">Inde</option>
                                <option value="indonesie">Indonésie</option>
                                <option value="iraq">Iraq</option>
                                <option value="iran">Iran</option>
                                <option value="israel">Israël</option>
                                <option value="japon">Japon</option>
                                <option value="jordanie">Jordanie</option>
                                <option value="kazakhstan">Kazakhstan</option>
                                <option value="kirghistan">Kirghistan</option>
                                <option value="koweit">Koweït</option>
                                <option value="laos">Laos</option>
                                <option value="liban">Liban</option>
                                <option value="malaisie">Malaisie</option>
                                <option value="maldives">Maldives</option>
                                <option value="mongolie">Mongolie</option>
                                <option value="nepal">Népal</option>
                                <option value="oman">Oman</option>
                                <option value="ouzbekistan">Ouzbékistan</option>
                                <option value="pakistan">Pakistan</option>
                                <option value="philippines">Philippines</option>
                                <option value="qatar">Qatar</option>
                                <option value="singapour">Singapour</option>
                                <option value="sriLanka">Sri Lanka</option>
                                <option value="syrie">Syrie</option>
                                <option value="tadjikistan">Tadjikistan</option>
                                <option value="taiwan">Taïwan</option>
                                <option value="thailande">Thaïlande</option>
                                <option value="timorOriental">Timor oriental</option>
                                <option value="turkmenistan">Turkménistan</option>
                                <option value="turquie">Turquie</option>
                                <option value="vietNam">Viêt Nam</option>
                                <option value="yemen">Yemen</option>
                                </optgroup>
                                <optgroup label="Europe">
                                <option value="allemagne">Allemagne</option>
                                <option value="albanie">Albanie</option>
                                <option value="andorre">Andorre</option>
                                <option value="autriche">Autriche</option>
                                <option value="bielorussie">Biélorussie</option>
                                <option value="belgique">Belgique</option>
                                <option value="bosnieHerzegovine">Bosnie-Herzégovine</option>
                                <option value="bulgarie">Bulgarie</option>
                                <option value="croatie">Croatie</option>
                                <option value="danemark">Danemark</option>
                                <option value="espagne">Espagne</option>
                                <option value="estonie">Estonie</option>
                                <option value="finlande">Finlande</option>
                                <option value="france">France</option>
                                <option value="grece">Grèce</option>
                                <option value="hongrie">Hongrie</option>
                                <option value="irlande">Irlande</option>
                                <option value="islande">Islande</option>
                                <option value="italie">Italie</option>
                                <option value="lettonie">Lettonie</option>
                                <option value="liechtenstein">Liechtenstein</option>
                                <option value="lituanie">Lituanie</option>
                                <option value="luxembourg">Luxembourg</option>
                                <option value="exRepubliqueYougoslaveDeMacedoine">Ex-République Yougoslave de Macédoine</option>
                                <option value="malte">Malte</option>
                                <option value="moldavie">Moldavie</option>
                                <option value="monaco">Monaco</option>
                                <option value="norvege">Norvège</option>
                                <option value="paysBas">Pays-Bas</option>
                                <option value="pologne">Pologne</option>
                                <option value="portugal">Portugal</option>
                                <option value="roumanie">Roumanie</option>
                                <option value="royaumeUni">Royaume-Uni</option>
                                <option value="russie">Russie</option>
                                <option value="saintMarin">Saint-Marin</option>
                                <option value="serbieEtMontenegro">Serbie-et-Monténégro</option>
                                <option value="slovaquie">Slovaquie</option>
                                <option value="slovenie">Slovénie</option>
                                <option value="suede">Suède</option>
                                <option value="suisse">Suisse</option>
                                <option value="republiqueTcheque">République Tchèque</option>
                                <option value="ukraine">Ukraine</option>
                                <option value="vatican">Vatican</option>
                                </optgroup>
                                <optgroup label="Océanie">
                                <option value="australie">Australie</option>
                                <option value="fidji">Fidji</option>
                                <option value="kiribati">Kiribati</option>
                                <option value="marshall">Marshall</option>
                                <option value="micronesie">Micronésie</option>
                                <option value="nauru">Nauru</option>
                                <option value="nouvelleZelande">Nouvelle-Zélande</option>
                                <option value="palaos">Palaos</option>
                                <option value="papouasieNouvelleGuinee">Papouasie-Nouvelle-Guinée</option>
                                <option value="salomon">Salomon</option>
                                <option value="samoa">Samoa</option>
                                <option value="tonga">Tonga</option>
                                <option value="tuvalu">Tuvalu</option>
                                <option value="vanuatu">Vanuatu</option>
                                </select>
                            </div>                          
                              <div class="form-group md-form row no-gutters align-items-center">
                                  <label for="captcha" class="col-auto pr-3">Combien font 3+5 :</label>
                                  <input type="number" name="captcha" id="captcha" class="form-control col" required/>
                              </div>
                              <div class="text-center">
                              <input type="submit" class="btn btn-red mx-auto d-block" value="Valider" />
                              </div>
                        </form>
                        <?php 
                            if(isset($_POST['nom']) && !empty($_POST['nom']) && 
                            isset($_POST['prenom']) && !empty($_POST['prenom']) &&
                            isset($_POST['telephone']) && !empty($_POST['telephone']) &&
                            isset($_POST['sexe']) && !empty($_POST['sexe']) &&
                            isset($_POST['mail']) && !empty($_POST['mail']) &&
                            isset($_POST['domaine']) && !empty($_POST['domaine']) &&
                            isset($_POST['nationalite']) && !empty($_POST['nationalite']) &&
                            isset($_POST['residence']) && !empty($_POST['residence']) &&
                            isset($_POST['captcha']) && !empty($_POST['captcha'])
                            ){
                                $captcha = (int) $_POST['captcha'];
                                if($captcha === 8){
                                    $nom = htmlentities($_POST['nom']);
                                    $prenom = htmlentities($_POST['prenom']);
                                    $telephone = htmlentities($_POST['telephone']);
                                    $sexe = htmlentities($_POST['sexe']);
                                    $mail = htmlentities($_POST['mail']);
                                    $domaine = htmlentities($_POST['domaine']);
                                    $nationalite = htmlentities($_POST['nationalite']);
                                    $residence = htmlentities($_POST['residence']);
                                    $destinataire = "c.oka71@gmail.com";
                                    mail($destinataire, $objet. "Adhesion de: " . $nom, "Nom : ". $nom. " Prenom : " . $prenom. " sexe : " . $sexe. " mail : " . $mail. " domaine : " . $domaine. " nationalite : " . $nationalite. " residence : " . $residence);
                                    echo '<div class="alert alert-success" role="alert">';
                                        echo 'Messdomaine envoyé';
                                    echo '</div>';
                                } else {
                                    echo '<div class="alert alert-danger" role="alert">';
                                    echo 'Erreur de Captcha, recommencer';
                                    echo '</div>';
                                }
                            }
                        ?>
                        </div>
                        </div>
                      </div>
                    <!--Grid column-->
                    <div class="mt-5 pt-5 col-md-4 col-xl-3">
                    <div class="card">
                      <div class="card-body">
                      <h5 class="blue-text">BIENTOT NOTRE SYSTEME DE DONS EN LIGNE</h5>
                      </div>
                    </div>
                    <div class="card mt-5">
                      <div class="card-body">
                        <ul class="contact-icons text-center list-unstyled">
                          
                            <li>
                              <i class="fab fa-whatsapp-square fa-2x red-text"></i>
                              <p>+225 88 50 63 83 WhatsApp</p>
                            </li>
                            <li>
                              <i class="fas fa-envelope fa-2x red-text"></i>
                              <p>integrer-direction@lalternativeci.org</p>
                            </li>
                        </ul>
                      </div>
                    </div>
                    </div>
                    <!--Grid column-->
                    
                  </div>
                </section>
                <!--Section: Contact v.2-->
              </div>
            </div>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
    </div>
  </main>
  <!--Main Layout-->
  <!--Footer-->
  <footer class="pdomaine-footer pt-4 mt-4   grey lighten-3 text-center text-md-left">
  </footer>
  <!--/Footer-->
  <!--  SCRIPTS  -->
  <!-- JQuery -->
  <script type="text/javascript" src="<?= URL ?>views/front/adherer/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?= URL ?>views/front/adherer/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?= URL ?>views/front/adherer/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?= URL ?>views/front/adherer/js/mdb.min.js"></script>
  <script>
    $(document).ready(() => {
      new WOW().init();
    });
  </script>
  
</body>
</html>
