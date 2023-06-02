<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    die('Erreur : '.basename(__FILE__));
}
?>

<?php require('app/vue/inc/head.php'); ?>

<h1 class="connexion">Connexion</h1>

<div class="formulaire">
<form action="./?action=connexion" method="POST">
    <input type="text" name="mailU" placeholder="Email de connexion" /><br />
    <input type="password" name="mdpU" placeholder="Mot de passe"  /><br />
    <input type="submit" />
</form>
</div>

<hr>
<p>Utilisateur de test :</p>
<ul>
    <li>login : maelherve.mh@gmail.com</li>
    <li>mot de passe : maelherve</li>
</ul>
</hr>

<!-- 
<a href="./?action=inscription">Inscription</a>
-->
