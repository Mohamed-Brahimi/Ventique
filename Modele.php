<?php
//Permet la connection à la base de données
function getBdd()
{
    try{
    $bdd = new PDO("mysql:host=localhost;dbname=ventique;charset=utf8", "root", "mysql", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    } catch (Exception $e) {
        die('Erreur : Impossible de se connecter à la base de données.'. $e ->getMessage());
    }
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
    $offres = $bdd->prepare("select offres.id, offres.dateOffre, offres.prix_propose, utilisateurs.nom as nomUtil
     from offres INNER JOIN utilisateurs on offres.utilisateur_id = utilisateurs.id where antique_id LIKE ?");
    $offres->execute(array($idAntique));
    return $offres;
}
function getAntiques()
{
    $bdd = getBdd();
    $antiques = $bdd->prepare("SELECT * FROM antiques ORDER BY id DESC");
    $antiques-> execute();
    return $antiques;
}

function setOffre($offre) {
    $bdd = getBdd();
    $offres = $bdd -> prepare('INSERT INTO offres (antique_id,utilisateur_id,prix_propose,dateOffre) VALUES (?, ?, ?, NOW()) ');
    $offres-> execute(array($offre['antique_id'],$offre['utilisateur_id'],$offre['prix_propose']));
    return $offres;
}
function getUtilisateur($idUtilisateur) {
    $bdd = getBdd();
    $utilisateur = $bdd-> prepare('SELECT * FROM utilisateurs WHERE id LIKE ?');
    $utilisateur -> execute(array($idUtilisateur));
    if ($utilisateur-> rowCount() == 1)
        return $utilisateur -> fetch();
    else
        throw new Exception("Aucun utilisateur ne correspond à l'identifiant `$idUtilisateur`");
}
function getUtilisateurs() {
    $bdd = getBdd();
    $utilisateurs = $bdd-> query('SELECT * FROM utilisateurs');
    return $utilisateurs;
}
function supprimerOffre($id_offre) {
       $bdd = getBdd();
       $request = $bdd -> prepare('DELETE FROM offres WHERE id = ?');
       $request -> execute(array($id_offre));
}