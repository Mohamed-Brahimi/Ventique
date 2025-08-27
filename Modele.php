<?php
//Permet la connection à la base de données
function getBdd()
{
    $bdd = new PDO("mysql:host=localhost;dbname=Ventique;charset=utf8", "root", "mysql", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}
// Retourne une antique selon l'id spécifié
function getAntique($idAntique)
{
    $bdd = getBdd();
    $antique = $bdd->prepare("select * from Antiques" . "where ID=?");
    $antique->execute(array($idAntique));
    if ($antique->rowCount() == 1)
        return $antique->fetch();
    else
        throw new Exception("Aucun antique correspond à l'identifiant `$idAntique`");
}
// Retournes les offres pour une antique
function getOffres($idAntique)
{
    $bdd = getBdd();
    $offres = $bdd->prepare("select * from Offres" . "where antique_id=?");
    $offres->execute(array($idAntique));
    return $offres;
}
function getAntiques()
{
    $bdd = getBdd();
    $antique = $bdd->prepare("select * from Antiques" . "by order id desc");
    return $antique;
}