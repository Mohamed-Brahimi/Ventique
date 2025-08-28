<?php
//Permet la connection à la base de données
function getBdd()
{
    $bdd = new PDO("mysql:host=localhost;dbname=ventique;charset=utf8", "root", "mysql", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}
// Retourne une antique selon l'id spécifié
function getAntique($idAntique)
{
    $bdd = getBdd();
    $antique = $bdd->prepare("SELECT * FROM antiques WHERE id LIKE ?");
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
    $offres = $bdd->prepare("select * from offres where antique_id LIKE ?");
    $offres->execute(array($idAntique));
    return $offres;
}
function getAntiques()
{
    $bdd = getBdd();
    $antiques = $bdd->query("SELECT * FROM antiques ORDER BY id DESC");
    $antiques-> fetch(PDO::FETCH_ASSOC);
    return $antiques;
}

function setOffre($offre) {
    $bdd = getBdd();
    $offres = $bdd -> prepare('INSERT INTO offres (antique_id,utilisateur_id,prix_propose,dateOffre) VALUES (?, ?, ?, NOW()) ');
    $offres-> execute(array($offre['antique_id'],$offre['utilisateur_id'],$offre['prix_propose']));
    return $offres;
}