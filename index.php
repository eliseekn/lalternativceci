<?php



require "functions/fetch.php";

require_once "controllers/frondend.controller.php";

require_once "config/securite.class.php";

try {

    if(isset($_GET['page']) && !empty($_GET['page'])){

        $page = Securite::secureHTML($_GET['page']);

        switch ($page){

        case "accueil" : getAccueil();

        break;

        case "article" : getArticle();

        break;

        case "categorie" : getCategorie();

        break;

        case "adhere" : getAdhere();

        break;

        case "contact" : getContact();

        break;
            
        case "mouvement" : getMouvement();

        break;

        case "construire" : getConstruire();

        break;

        case "error301": 

        case "error302": 

        case "error400": 

        case "error401": 

        case "error402": 

        case "error405": 

        case "error500": 

        case "error505": throw new Exception("Error de type : "+$page);

        break;

        case "error403": throw new Exception("vous n'avez pas le droit d'acc�der � ce dossier");

        break;

        case "error404":

        default: throw new Exception("La page n'existe pas");

    }

    } else {

    getAccueil();

    }

    } catch(Exception $e){

    $title = "Page erreur";

    $description = "Page de gestion des erreurs";

    $errorMessage = $e->getMessage();

    require "views/commons/erreur.view.php";

    }



?>