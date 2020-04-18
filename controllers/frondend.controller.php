<?php
require_once"config/config.php";
require_once"models/article.dao.php";

function getArticle(){
    $title = "L'alternative CI";
    $description = "Mouvement politique côte d'ivoire";

    $curr_id = $_GET['id'] ?? 1;

    //récupération des articles
    //-----
    $fetch_results = fetch('get', 
        array(
            'https://lalternativeci.org/bd/wp-json/wp/v2/posts?categories=3&per_page=9',
            'https://lalternativeci.org/bd/wp-json/wp/v2/posts?include='. $curr_id
        )
    );

    $actualite = $fetch_results['content'][0];
    $blog_single = $fetch_results['content'][1];
    //----

    require_once"views/front/article-view.php";
}
function getCategorie(){
    $title = "L'alternative CI";
    $description = "Mouvement politique côte d'ivoire";

    $curr_id = $_GET['id'] ?? 1;

    //récupération des articles
    //-----
    $fetch_results = fetch('get', 
        array(
            'https://lalternativeci.org/bd/wp-json/wp/v2/posts?categories=3&per_page=9',
            'https://lalternativeci.org/bd/wp-json/wp/v2/posts?categories='. $curr_id
        )
    );

    $actualite = $fetch_results['content'][0];
    $categorie = $fetch_results['content'][1];
    //-----

    require_once"views/front/categorie-view.php";
}
function getMouvement(){
    $title = "L'alternative CI";
    $description = "Mouvement politique côte d'ivoire";

    $curr_id = $_GET['id'] ?? 1;

    //récupération des articles
    //-----
    $fetch_results = fetch('get', 
        array(
            'https://lalternativeci.org/bd/wp-json/wp/v2/posts?include='. $curr_id,
            'https://lalternativeci.org/bd/wp-json/wp/v2/posts?categories=3&per_page=3'
        )
    );

    $mouvement = $fetch_results['content'][0];
    $bas_page = $fetch_results['content'][1];
    //-----
    
    require_once"views/front/mouvement.view.php";
}

function getContact(){
    $title = "L'alternative CI";
    $description = "Mouvement politique côte d'ivoire";
    require_once"views/front/contact.view.php";
}

function getConstruire(){
    $title = "L'alternative CI";
    $description = "Mouvement politique côte d'ivoire";
    require_once"views/front/adherer/construisons.view.php";
}

function getAdhere(){
    $title = "L'alternative CI";
    $description = "Mouvement politique côte d'ivoire";
    require_once"views/front/adherer/adhere.view.php";
}



function getAccueil(){
    $title = "L'alternative CI";
    $description = "Mouvement politique côte d'ivoire";

    //récupération des articles
    //-----
    $fetch_results = fetch('get', 
        array(
            'https://lalternativeci.org/bd/wp-json/wp/v2/posts?categories=2&per_page=1',
            'https://lalternativeci.org/bd/wp-json/wp/v2/posts?categories=3&per_page=4',
            'https://lalternativeci.org/bd/wp-json/wp/v2/posts?categories=7&per_page=1',
            'https://lalternativeci.org/bd/wp-json/wp/v2/posts?categories=8&per_page=4',
            'https://lalternativeci.org/bd/wp-json/wp/v2/posts?categories=9&per_page=1',
            'https://lalternativeci.org/bd/wp-json/wp/v2/posts?categories=3&per_page=9'
        )
    );

    $a_la_une1 = $fetch_results['content'][0];
    $reportage = $fetch_results['content'][1];
    $a_la_une2 = $fetch_results['content'][2];
    $vision = $fetch_results['content'][3];
    $edito = $fetch_results['content'][4];
    $actualite = $fetch_results['content'][5];
    //----

    require_once"views/front/accueil-view.php";
    
}
