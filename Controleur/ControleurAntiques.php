<?php


require_once 'Model/Antique.php';
require_once 'Model/Offre.php';
require_once 'Model/Utilisateur.php';

class ControleurAntiques extends Controleur
{
    private $antique;
    private $offre;
    private $utils;

    public function __construct()
    {
        $this->antique = new Antique();
        $this->offre = new Offre();
        $this->utils = new Utilisateur();
    }

    public function index()
    {
        try {
            $antiques = $this->antique->getAntiques();
            $this->genererVue(['antiques' => $antiques]);
        } catch (Exception $e) {
            $this->erreur($e->getMessage());
        }
    }

    public function antiques()
    {
        $idAntique = $this->requete->getParametreId("id");
        // var_dump($idAntique);

        $antique = $this->antique->getAntique($idAntique);
        $erreur = $this->requete->getSession()->existeAttribut("erreur") ? $this->requete->getsession()->getAttribut("erreur") : '';
        $offres = $this->offre->getOffre($idAntique);
        $utils = $this->utils->getUtilisateurs();
        $this->genererVue(['antique' => $antique, 'offres' => $offres, 'utils' => $utils, 'erreur' => $erreur]);
    }

    public function ajoutAntique()
    {
        $this->genererVue();
    }

    public function ajouter()
    {
        $antique['utilisateur_id'] = $this->requete->getParametreId('utilisateur_');
        $antique['nom'] = $this->requete->getParametre('nom');
        $antique['description'] = $this->requete->getParametre('description');
        $antique['prix'] = $this->requete->getParametre('prix ');
        $this->antique->setAntique($antique);
        $this->executerAction('index');
    }


}