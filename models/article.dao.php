<?php
require_once"pdo.php";
function getArticleFromId($idarticle){
    $bdd= connexionPDO();
    $stmt = $bdd->prepare('
    SELECT * FROM article
    WHERE id_article = :idarticle
    ');
    $stmt->bindValue(":idarticle",$idarticle,PDO::PARAM_INT);
    $stmt->execute();
    $article = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $article;
}
function getAuteurFromId($idauteur) {
    $bdd= connexionPDO();
    $stmt = $bdd->prepare('
    SELECT * FROM auteur a 
    INNER JOIN article b on a.id_auteur = b.id_auteur
    WHERE b.id_article = :idarticle
    ');
    $stmt->bindValue(":idarticle",$idauteur,PDO::PARAM_INT);
    $stmt->execute();
    $nom = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $nom;
}
function getCategorieFromId($idcategorie){
    $bdd= connexionPDO();
    $req= '
    SELECT * FROM categorie c 
    INNER JOIN article_has_categorie ac on ac.id_categorie = c.id_categorie
    INNER JOIN article a on a.id_article = ac.id_article
    WHERE c.id_categorie = :idcategorie';
    if($idcategorie === REPORTAGE){
        $req.=' LIMIT 4';
    }
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(":idcategorie",$idcategorie,PDO::PARAM_INT);
    $stmt->execute();
    $article = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $article;
}
function getCategorieFromIdL3($idcategorie){
    $bdd= connexionPDO();
    $req= '
    SELECT * FROM categorie c 
    INNER JOIN article_has_categorie ac on ac.id_categorie = c.id_categorie
    INNER JOIN article a on a.id_article = ac.id_article
    WHERE c.id_categorie = :idcategorie';
    if($idcategorie === REPORTAGEL3){
        $req.=' LIMIT 3';
    }
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(":idcategorie",$idcategorie,PDO::PARAM_INT);
    $stmt->execute();
    $article = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $article;
}
function getCategorieFromId2($idcategorie){
    $bdd= connexionPDO();
    $stmt = $bdd->prepare('
    SELECT nom_categorie FROM categorie
    WHERE id_categorie = :idcategorie
    ');
    $stmt->bindValue(":idcategorie",$idcategorie,PDO::PARAM_INT);
    $stmt->execute();
    $categorie = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $categorie;
}
