<?php require "Modele.php";
try {
    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
        if ($id >= 0) {

        } else {
            throw new Exception("L'id de l'antique est incorrecte.");
        }
    } else {
        throw new Exception("Aucun Antique ID");
    }

} catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require 'vueErreur.php';
}