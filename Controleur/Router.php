<?php

/**
 * require_once Controleur/ControleurAntiques
 * require_once Controleur/ControleurOffres
 * require_once Controleur/ControleurUtilisateurs
 */
require_once 'Controleur/ControleurAntique.php';
require_once 'Vue/Vue.php';


class Router
{
    private $ctrlAntiques;
    // private $ctrlOffres;
    // private $ctrlUtilisateurs;

    public function __construct()
    {
        $this->ctrlAntiques = new ControleurAntiques();
        // $this->ctrlOffres = new ControleurOffres();
        // $this->ctrlUtilisateurs = new ControleurUtilisateurs();
    }

    public function routerRequest()
    {
        try {
            if (isset($_GET['action'])) {
                if ($_GET['action'] == 'antique') {
                    $id = intval($this->getParametre($_GET, 'id'));
                    if ($id >= 0) {
                        antiques($id);
                    } else
                        throw new Exception("Identifiant d'antique incorrecte");

                }

            } else {
                $this->ctrlAntiques->antiques();
            }
        } catch (Exception $e) {
            $this->erreur($e->getMessage());
        }
    }

    private function erreur($msgError)
    {
        $vue = new Vue("Erreur");
        $vue->generer(array("msgErreur" => $msgError));
    }

    private function getParametre($tableau, $nom)
    {
        if (isset($tableau[$nom])) {
            return $tableau[$nom];
        } else
            throw new Exception("Parametre '$nom' absent! ");
    }
}

//  try {
//     if (isset($_GET['action'])) {

//         if ($_GET['action'] == 'antique') {

//             if (isset($_GET['id'])) {
//                 $id = intval($_GET['id']);
//                 if ($id >= 0) {
//                     antiques($id);
//                 } else
//                     throw new Exception("Identifiant d'antique incorrecte");
//             } else
//                 throw new Exception("Aucun identifiant d'antique");
//         } else if ($_GET['action'] == 'offre') {
//             if (isset($_GET['id'])) {
//                 if ($id >= 0) {
//                     offre();
//                 } else
//                     throw new Exception("Identifiant d'antique incorrecte");
//             } else
//                 throw new Exception("Aucun identifiant d'antique");
//         } else if ($_GET['action'] == 'supprimerOffre') {
//             if (isset($_GET['id'])) {
//                 if ($id >= 0) {
//                     suppressionOffre();
//                 } else
//                     throw new Exception("Identifiant d'offre incorrecte");
//             } else
//                 throw new Exception("Aucun identifiant d'offre");
//         } else if ($_GET['action'] == 'confirmer') {
//             if (isset($_GET['id'])) {
//                 $id = intval($_GET['id']);
//                 $aid = intval($_GET['aid']);
//                 if ($id >= 0) {
//                     confirmer($id, $aid);
//                 } else
//                     throw new Exception("Identifiant d'offre incorrecte");
//             } else
//                 throw new Exception("Aucun identifiant d'offre");
//         } else if ($_GET['action'] == 'ajouter') {
//             creerAntique();

//         } else if ($_GET['action'] == 'creerAntique') {
//             creationAntique();

//         } else
//             throw new Exception("Action invalide");
//     } else {
//         acceuil();
//     }
// } catch (Exception $e) {
//     Erreur($e->getMessage());
// }