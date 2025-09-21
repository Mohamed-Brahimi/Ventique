<?php


require_once 'Model/Antique.php';
require_once 'Model/Offre.php';
require_once 'Model/Utilisateur.php';

class ControleurAdminAntiques extends Controleur
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
        $antiques = $this->antique->getAntiques();
        $this->genererVue(['antiques' => $antiques]);

    }

    public function antiques()
    {
        $idAntique = $this->requete->getParametreId("id");
        // var_dump($idAntique);

        $antique = $this->antique->getAntique($idAntique);
        $erreur = $this->requete->getSession()->existeAttribut("erreur") ? $this->requete->getsession()->getAttribut("erreur") : '';
        $offres = $this->offre->getOffres($idAntique);
        $utils = $this->utils->getUtilisateurs();
        $this->genererVue(['antique' => $antique, 'offres' => $offres, 'utils' => $utils, 'erreur' => $erreur]);
    }

    public function ajoutAntique()
    {
        $vue = new Vue('ajoutAntique');
        $this->genererVue();
    }
    public function modifierAntique()
    {
        $idAntique = $this->requete->getParametreId("id");
        // var_dump($idAntique);

        $antique = $this->antique->getAntique($idAntique);
        $erreur = $this->requete->getSession()->existeAttribut("erreur") ? $this->requete->getsession()->getAttribut("erreur") : '';
        $this->genererVue(['antique' => $antique, 'erreur' => $erreur]);

    }
    public function ajouter()
    {
        $antique['utilisateur_id'] = $_SESSION["utilisateur"]['id'];
        $antique['nom'] = $this->requete->getParametre('nom');
        $antique['description'] = $this->requete->getParametre('description');
        $antique['prix'] = $this->requete->getParametre('prix');
        $this->antique->setAntique($antique);
        $this->executerAction(action: 'index');
    }
    public function modifier()
    {
        var_dump($this->requete);
        $antique['id'] = $this->requete->getParametre('id');
        $antique['nom'] = $this->requete->getParametre('nom');
        $antique['description'] = $this->requete->getParametre('description');
        $antique['prix'] = $this->requete->getParametre('prix');
        $this->antique->updateAntiques($antique);

        $this->executerAction(action: 'index');
    }


}