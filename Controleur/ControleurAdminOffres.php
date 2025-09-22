<?php

require_once 'Model/Offre.php';

class ControleurAdminOffres extends Controleur
{
    private $offre;

    public function __construct()
    {
        $this->offre = new Offre();
    }
    public function index()
    {
        $offres = $this->offre->getAllOffres();
        $this->genererVue(['offres' => $offres]);
    }

    public function getOffresByAntiqueId($idAntique)
    {
        $offres = $this->offre->getOffres($idAntique);
        $this->genererVue(['offres' => $offres]);
    }

    public function offre()
    {
        $idOffre = $this->requete->getParametreId("id");
        $offre = $this->offre->getOffre($idOffre);
        $erreur = $this->requete->getSession()->existeAttribut("erreur") ? $this->requete->getsession()->getAttribut("erreur") : '';
        $this->genererVue(['offre' => $offre, 'erreur' => $erreur]);
    }
    public function ajouter()
    {
        $offres['user_id'] = $_SESSION["utilisateur"]['id'];

        $offres['antique_id'] = $this->requete->getParametreId('antique_id');
        $offres['prix_propose'] = $this->requete->getParametreId('prix');
        $this->offre->setOffre($offres);
        $this->rediriger(controleur: 'AdminAntiques', action: 'antiques/' . $offres['antique_id']);

    }
    public function confirmer()
    {
        $id = $this->requete->getParametreId("id");
        $this->offre->supprimerOffre($id);
        $offre = $this->offre->getOffre($id);
        $antiqueId = $offre['antique_id'];
        $this->rediriger(controleur: 'AdminAntiques', action: 'antiques/' . $antiqueId);

    }

    // Rétablir un commentaire
    public function retablir()
    {
        $id = $this->requete->getParametreId("id");
        $this->offre->retablirOffre($id);
        $offre = $this->offre->getOffre($id);
        $antiqueId = $offre['antique_id'];
        $this->rediriger(controleur: 'AdminAntiques', action: 'antiques/' . $antiqueId);
        exit();

    }
}