<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title><?= $titre ?> </title>
</head>

<body>
    <div id="global">
        <header>
            <a href="index.php">
                <h1 id="titreSite">Ventique</h1>
            </a>
            <p>Bienvenue au enchère d'objets antiques</p>
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