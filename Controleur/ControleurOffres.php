<?php
require_once 'Model/Offre.php';

class ControleurOffres extends Controleur
{
    private $offre;

    public function __construct()
    {
        $this->offre = new Offre();
    }
    public function index()
    {
        $offres = $this->offre->getAllOffres();
        $this->genererVue(donneesVue: ['offres' => $offres]);
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


}