<?php

require_once 'Framework/Vue.php';
$offres = [
    'id' => '2',
    'nomUtil' => 'test',
    'prix_propose' => '12',
    'dateOffre' => '2017-11-31',

];
$vue = new Vue('confirmer', 'AdminOffres');
$vue->generer(['offre' => $offres]);
