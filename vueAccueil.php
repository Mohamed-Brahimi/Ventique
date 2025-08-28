<?php $titre = 'Ventique'; ?>
<?php ob_start(); ?>
<?php foreach ($antiques as $antique)
    : ?>
<antique>
    <header>
        <a href="<?= "antique.php?id=" . $article['id'] ?>"> 
            <h1 class="nomAntique"><?=$$article['nom']?></h1>
         </a>
        <h3 class="descAntique"><?=$$article['description']?></h3>

    </header>
</antique>
<?php endforeach;?>
<?php ob_clean(); ?>
<?php require('gabarit.php');?>

