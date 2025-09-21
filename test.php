<head>
    <link rel='stylesheet' type='text/css' href='Style/style.css' />

</head>
<?php
require_once 'Framework/Configuration.php';

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'modeleAntique') {
        require 'Tests/Modeles/testAntique.php';
    } else if ($_GET['action'] == 'modeleOffre') {
        require 'Tests/Modeles/testOffre.php';

    } else if ($_GET['action'] == 'vueAntique') {
        require 'Tests/Vues/testVueAntiques.php';

    } else if ($_GET['action'] == 'vueConfirmer') {
        require 'Tests/Vues/testVueConfirmer.php';

    } else if ($_GET['action'] == 'vueErreur') {
        require 'Tests/Vues/testVueErreur.php';


    } else {
        echo '<h3>Test inexistant!!!</h3>';
    }
}
?>
<h3>Tests de Modèles</h3>
<ul>
    <li>
        <a href="test.php?action=modeleAntique">Antique</a>
    </li>
    <li>
        <a href="test.php?action=modeleOffre">Offre</a>
    </li>

</ul>
<h3>Tests de Vue</h3>
<ul>
    <li>
        <a href="test.php?action=vueAntique">Antique</a>
    </li>

    <li>
        <a href="test.php?action=vueConfirmer">Offres (Confirmer)</a>
    </li>
    <li>
        <a href="test.php?action=vueErreur">Erreur</a>
    </li>
</ul>