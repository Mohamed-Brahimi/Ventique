<?php
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'modeleAntique') {
        require 'Tests/Modeles/testAntique.php';
    } else if ($_GET['action'] == 'modeleOffre') {
        require 'Tests/Modeles/testOffre.php';
    } else if ($_GET['action'] == 'modeleUser') {
        require 'Tests/Modeles/testUtilisteur.php';

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
    <li>
        <a href="test.php?action=modeleUser">User</a>
    </li>
</ul>