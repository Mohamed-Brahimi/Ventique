<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <base href="<?= $racineWeb ?>">
    <title><?= $titre ?> </title>
    <link rel='stylesheet' type='text/css' href='Style/style.css' />

</head>

<body>
    <div id="global">
        <header id="headerSite">
            <a href="">
                <h1 id="titreSite">Ventique</h1>
            </a>
            <p>Bienvenue au enchère d'objets antiques</p>
            <a href="<?= $utilisateur != null ? 'Admin' : ''; ?>Offres">
                <h4>Afficher toutes les offres de toutes les antiques</h4>
            </a>
            <?php if (isset($utilisateur)): ?>
                <h3>Bonjour <?= $utilisateur['nom'] ?>,
                    <a href="Utilisateurs/deconnecter"><small>[Se déconnecter]</small></a>
                </h3>
            <?php else: ?>
                <h3>[<a href="Utilisateurs/index">Se connecter</a>] <small>(admin/admin)</small></h3>
            <?php endif; ?>
        </header>
        <div id="contenu">
            <?= $contenu ?>
        </div>
        <footer id="footer">
            Footer
        </footer>
    </div>
</body>

</html>