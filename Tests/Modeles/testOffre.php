<?php

require_once 'Model/Offre.php';
$tstOffre = new Offre;
$offre = $tstOffre->getOffres(2);
echo '<h3>Test getOffres : </h3>';
var_dump($offre);
$offre = $tstOffre->getOffre(4);
echo '<h3>Test getOffre : </h3>';
var_dump($offre);