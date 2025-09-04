<?php
require 'Controleur/controleur.php';
try {
    var_dump($_GET);
    if (isset($_GET['action'])) {

        if ($_GET['action'] == 'antique') {

            if (isset($_GET['id'])) {
                $id = intval($_GET['id']);
                if ($id >= 0) {
                    antiques($id);
                } else
                    throw new Exception("Identifiant d'antique incorrecte");
            } else
                throw new Exception("Aucun identifiant d'antique");
        } else if ($_GET['action'] == 'offre') {
            if (isset($_GET['id'])) {
                $id = intval($_GET['id']);
                if ($id >= 0) {
                    offre($id);
                } else
                    throw new Exception("Identifiant d'antique incorrecte");
            } else
                throw new Exception("Aucun identifiant d'antique");
        } else
            throw new Exception("Action invalide");
    } else {
        acceuil();
    }
} catch (Exception $e) {
    Erreur($e->getMessage());
}