<?php
require 'Modele.php';

try {
    if (isset($_GET['id'])) {
        $oid = intval($_GET['id']);
        if (isset($_GET['aid'])) {
            $aid = intval($_GET['aid']);
            supprimerOffre($oid);
            header('Location: antique.php?id=' . $aid);
        } else {
            throw new Exception(message: "L'id de l'antique est incorrecte");
        }

    } else {
        throw new Exception(message: "L'id du commentaire est incorrecte");
    }
} catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require 'vueErreur.php';
}
?>
<html>

<body>
    <h3>Supprimer une offre</h3>
    <form action="index.php"></form>
    <input type="submit" value="Continuer">
</body>

</html>