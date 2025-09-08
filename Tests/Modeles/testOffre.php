<?php

require_once 'Modele/Offre.php';
$tstOffre = new Offre;
$offre = $tstOffre->getOffre(1);
echo '<h3>Test getOffre : </h3>';
var_dump(value: $offre->rowCount());
