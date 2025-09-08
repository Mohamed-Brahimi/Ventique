<?php

require_once 'Modele/Antique.php';
$tstAntique = new Antique;
$antiques = $tstAntique->getAntiques();
echo '<h3>Test getAntiques : </h3>';
var_dump(value: $antiques->rowCount());

echo '<h3>Test getAntique : </h3>';
$antique = $tstAntique->getAntique(1);
var_dump(value: $antique);
