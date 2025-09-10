<?php

require_once 'Model/Antique.php';

class ControleurAntiques
{
    private $antique;
    private $commentaire;

    public function __construct()
    {
        $this->antique = new Antique();
    }

    public function antiques()
    {
        $antiques = $this->antique->getAntiques();
        $vue = new Vue("Accueil");
        $vue->generer(['antiques' => $antiques]);
    }

    public function antique($idAntique, $erreur)
    {
        $antique = $this->antique->getAntique($idAntique);
        // $commentaires = $this->commentaire->getCommentaires($idAntique);
        $vue = new Vue("Antique");
        $vue->generer(['antique' => $antique,  'erreur' => $erreur]);
        // 'commentaires' => $commentaires,
    }

    public function nouvelAntique()
    {
        $vue = new Vue("AjoutAntique");
        $vue->generer();
    }

    public function ajouter($antique)
    {
        $this->antique->setAntique($antique);
        $this->antiques();
    }

    public function modifierAntique($id)
    {
        $antique = $this->antique->getAntique($id);
        $vue = new Vue("ModifierAntique");
        $vue->generer(['antique' => $antique]);
    }


    public function miseAJourAntique($antique)
    {
        $this->antique->updateAntique($antique);
        $this->antiques();
    }



}