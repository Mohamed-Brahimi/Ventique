<?php

require_once 'Framework/Controleur';

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
        $this->genererVue(['list_offres' => $offres]);
    }

    public function getOffresByAntiqueId($idAntique)
    {
        $offres = $this->offre->getOffre($idAntique);
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

        $offres['antique_id'] = $this->requete->getParametreId('antique_id');
        $offres['user_id'] = $this->requete->getParametreId('user_id');
        $offres['prix_propose'] = $this->requete->getParametreId('prix');

        $offres['dateOffre'] = date('Y-m-d');
    }
    public function supprimer()
    {
        $id = $this->requete->getParametreId("id");
        // Lire le commentaire afin d'obtenir le id de l'article associé
        $offre = $this->offre->getOffre($id);
        // Supprimer le commentaire à l'aide du modèle
        $this->offre->supprimerOffre($id);
    }

    // Rétablir un commentaire
    public function retablir()
    {
        $id = $this->requete->getParametreId("id");
        // Lire le commentaire afin d'obtenir le id de l'article associé
        $offre = $this->offre->getOffre($id);
        // Supprimer le commentaire à l'aide du modèle
        $this->offre->retablirOffre($id);

    }
}