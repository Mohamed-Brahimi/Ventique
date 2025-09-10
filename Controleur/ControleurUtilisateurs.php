<?php


require_once 'Model/Antique.php';
require_once 'Model/Offre.php';
require_once 'Model/Utilisateur.php';

class ControleurUtilisateurs extends Controleur
{
    private $util;
    private $offre;
    private $antique;

    public function __construct()
    {
        $this->util = new Utilisateur();
        $this->antique = new Antique();
        $this->offre = new Offre();

    }

    public function index()
    {
        $utils = $this->util->getUtilisateurs();
        $this->genererVue(['utilisateurs' => $utils]);
    }

    public function utilisateur()
    {
        $idUtil = $this->requete->getParametreId("id");
        $util = $this->util->getUtilisateur($idUtil);
        $erreur = $this->requete->getSession()->existeAttribut("erreur") ? $this->requete->getsession()->getAttribut("erreur") : '';
        $this->genererVue(['utilisateur' => $util, 'erreur' => $erreur]);
    }

    public function nouvelUtilisateur()
    {
        $this->genererVue();
    }

    public function ajouter()
    {
        $util['nom'] = $this->requete->getParametre('nom');
        $util['description'] = $this->requete->getParametre('description');
        $util['prix'] = $this->requete->getParametre('prix ');
        $this->util->setUtilisateur($util);
        // Revenir a une page specifique
        // $this->executerAction('index');
    }


}