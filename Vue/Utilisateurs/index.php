<?php $this->titre = "Ventique - Connexion" ?>

<p>Vous devez être en session pour accéder à cette zone.</p>

<form action="Utilisateurs/connecter" method="post" class="login-form">
    <div class="form-row">
        <label for="login">Nom d'utilisateur : </label>
        <input class="login-form-nom" name="login" id="login" type="text" placeholder="Entrez votre login" required autofocus>
    </div>
    <div class="form-row">
        <label for="login">Mot de passe : </label>
        <input class="login-form-mdp" name="mdp" id="mdp" type="password" placeholder="Entrez votre mot de passe" required>
    </div>
    <button class="login-form-button" type="submit">Connexion</button>
</form>

<?= ($erreur == 'mdp') ? '<span class="login-form-erreur" style="color : red;">Login ou mot de passe incorrects</span>' : '' ?>