<a href="AdminAntiques/ajoutAntique" id="linkAjouterAntique">Ajouter une antique</a>
<div class="container-antiques">

    <?php
    foreach ($antiques as $antique)
    : ?>


        <antique>
            <div class="antique">
                <header class="antique-header">
                    <a href="<?= "AdminAntiques/antiques" . $antique['id'] ?>">
                        <h1 class="antique-nom"><?= $this->nettoyer($antique['nom']) ?></h1>
                    </a>
                    <h3 class="antique-desc"><?= $this->nettoyer($antique['description']) ?></h3>

                </header>
                <p class="antique-prix"><?= $this->nettoyer($antique['prix']) ?>$</p>
            </div>
        </antique>
    <?php endforeach; ?>
</div>