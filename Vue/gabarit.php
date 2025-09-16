<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title><?=$titre ?> </title>
    <link rel='stylesheet' type='text/css' href='Style/style.css' />
    
</head>

<body>
    <div id="global">
        <header id="headerSite">
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