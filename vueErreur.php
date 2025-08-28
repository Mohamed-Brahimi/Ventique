<?php $titre = 'Erreur'; ?>
<?php ob_start();?>
<p>Une erreur est survenue: <?= $msgErreur?></p>
<?php $contenue = ob_get_clean();?>
<?php require 'gabarit.php'; ?>