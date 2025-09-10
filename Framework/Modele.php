<?php
abstract class Modele
{
    private $bdd;
    protected function executerRequete($sql, $params = null)
    {
        if ($params == null) {
            $result = $this->getBdd()->query($sql);
        } else {
            $result = $this->getBdd()->prepare($sql);
            $result->execute($params);
        }
        return $result;
    }
    function getBdd()
    {
        try {
            $bdd = new PDO("mysql:host=localhost;dbname=ventique;charset=utf8", "root", "mysql", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        } catch (Exception $e) {
            die('Erreur : Impossible de se connecter à la base de données.' . $e->getMessage());
        }
        return $bdd;
    }
}