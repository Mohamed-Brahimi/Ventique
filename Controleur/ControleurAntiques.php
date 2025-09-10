<?php


require_once 'Model/Antique.php';
require_once 'Model/Offre.php';

class ControleurAntiques extends Controleur
{
    private $antique;
    private $offre;

    public function __construct()
    {
        $this->antique = new Antique();
        $this->offre = new Offre();
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
        $antique = $this->antique->getAntique($idAntique);
        $erreur = $this->requete->getSession()->existeAttribut("erreur") ? $this->requete->getsession()->getAttribut("erreur") : '';
        $offres = $this->offre->getOffre($idAntique);
        $this->genererVue(['antiques' => $antique, 'offre' => $offres, 'erreur' => $erreur]);
    }

    public function nouvelAntique()
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