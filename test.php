<?php
if (isset($_GET['test'])) {
    if ($_GET['test'] == 'modeleAntique') {
        require 'Tests/Modeles/testAntique.php';
    } else if ($_GET['test'] == 'modeleOffre') {
        require 'Tests/Modeles/testOffre.php';
    } else if ($_GET['test'] == 'modeleUser') {
        require 'Tests/Modeles/testUtilisteur.php';

    } else {
        echo '<h3>Test inexistant!!!</h3>';
    }
}
?>
<h3>Tests de Modèles</h3>
<ul>
    <li>
        <a href="tests.php?test=modeleAntique">Article</a>
    </li>
    <li>
        <a href="tests.php?test=modeleOffre">Commentaire</a>
    </li>
    <li>
        <a href="tests.php?test=modeleUser">Type</a>
    </li>
</ul>