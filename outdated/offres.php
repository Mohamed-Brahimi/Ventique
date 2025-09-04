<?php

require 'Modele.php';
try {
    if (isset($_POST['antique_id'])) {
        $uid = intval($_POST['utilisateur_id']);
        var_dump($uid);
        if ($uid != 0) {
            $id = intval($_POST['antique_id']);
            if ($id != 0) {
                if (intval($_POST['prix_propose']) < 0) {
                    throw new Exception("Prix proposé incorrecte");
                } else {
                    $antique = getAntique($id);
                    $offre = $_POST;

                    setOffre($offre);
                    header('Location: antique.php?id=' . $id);
                }


            } else {
                throw new Exception("Identifiant d'antique incorrecte");
            }
        } else {
            throw new Exception("Identifiant d'utilisateur incorrecte");
        }
    } else {
        throw new Exception("Aucun Identifiant d'antique");
    }
} catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require 'vueErreur.php';
}
