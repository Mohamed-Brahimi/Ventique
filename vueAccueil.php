<?php $titre = 'Ventique'; ?>
<?php ob_start(); ?>
<?php foreach ($antiques as $antique)
    ; ?>
<article>
    <header>
        <a href="<?= "antique.php?id=" . $article['id'] ?>"> lien </a>
    </header>
</article>