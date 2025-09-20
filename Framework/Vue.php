<?php


class Vue
{

    // Nom du fichier associé à la vue
    private $fichier;
    // Titre de la vue (défini dans le fichier vue)
    private $titre;

    public function __construct($action, $controlleur = "")
    {
        // Détermination du nom du fichier vue à partir de l'action
        $fichier = "Vue/";
        if ($controlleur != "") {
            $fichier = $fichier . $controlleur . "/";
        }
        $this->fichier = $fichier . $action . ".php";
    }

    // Génère et affiche la vue
    public function generer($donnees)
    {
        $contenu = $this->genererFichier($this->fichier, $donnees);
        $racineWeb = Configuration::get("racineWeb", "/");
        $donnees_gabarit = [
            'titre' => $this->titre,
            'contenu' => $contenu,
            'racineWeb' => $racineWeb,
        ];
        if (isset($donnees['utilisateur']))
            $donnees_gabarit['utilisateur'] = $donnees['utilisateur'];
        $vue = $this->genererFichier('Vue/gabarit.php', $donnees_gabarit);
        echo $vue;
    }

    // Génère un fichier vue et renvoie le résultat produit
    private function genererFichier($fichier, $donnees)
    {
        if (file_exists($fichier)) {
            // Rend les éléments du tableau $donnees accessibles dans la vue
            extract($donnees);

            // Démarrage de la temporisation de sortie
            ob_start();
            // Inclut le fichier vue
            // Son résultat est placé dans le tampon de sortie
            require $fichier;
            // Arrêt de la temporisation et renvoi du tampon de sortie
            return ob_get_clean();
        } else {
            throw new Exception("Fichier '$fichier' introuvable");
        }
    }
    private function nettoyer($string)
    {
        return htmlspecialchars($string, ENT_QUOTES, 'UTF-8', false);
    }

}
