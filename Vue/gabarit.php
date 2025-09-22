<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <base href="<?= $racineWeb ?>">
    <title><?= $titre ?> </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">

    <link rel='stylesheet' type='text/css' href='Style/style.css' />

</head>

<body>
    <div id="global">
        <header id="headerSite">
            <a href="">
                <h1 id="titreSite">Ventique</h1>
            </a>
            <p id="descSite">Bienvenue au enchère d'objets antiques</p>
            <?php if (isset($_SESSION['utilisateur'])): ?>
                <a href="AdminOffres/index">
                    <h4>Afficher toutes les offres de tous les articles</h4>
                </a>
            <?php endif; ?>
            <div id="connexion">
                <?php if (isset($_SESSION['utilisateur'])): ?>
                    <a href="Utilisateurs/deconnecter">
                        <h3>Bonjour <?= $_SESSION['utilisateur']['nom'] ?>,
                            <small>Se déconnecter</small>
                    </a>
                    </h3>
                <?php else: ?>
                    <a href="Utilisateurs/index">
                        <h3>Se connecter<small></small></h3>
                    <?php endif; ?>
            </div>

            </a>

        </header>
        <div id="contenu">
            <?= $contenu ?>
        </div>
        <div id="filler"></div>
        <footer id="footer">
            <p>Ventique &copy; 2025</p>
            <a style="color: rgb(236, 203, 159);" href="Apropos/index">
                <p>À propos</p>
            </a>
        </footer>
    </div>
</body>

</html>