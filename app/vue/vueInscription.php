<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    die('Erreur : '.basename(__FILE__));
}

?>

<?php require('app/vue/inc/head.php'); ?>

<h1 class="inscription">Inscription</h1>

<div class="formulaire">
<form action="./?action=inscription" method="POST">
    <input type="text" name="psdoU" placeholder="Pseudonyme" /><br />
    <input type="text" name="mailU" placeholder="Email de connexion" /><br />
    <input type="password" name="mdpU" placeholder="Mot de passe"  /><br />
    <input type="submit"/>
</form>
</div>