<?php
require 'Modele.php';
try {
    $antiques = getAntiques();
    require 'vueAccueil.php';
} catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require 'vueErreur.php';
}