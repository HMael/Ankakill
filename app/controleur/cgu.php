<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
	// Un MVC utilise uniquement ses requêtes depuis le contrôleur principal : index.php
    die('Erreur : '.basename(__FILE__));
}

include RACINE . "/vue/inc/navbar.php";
include RACINE . "/vue/vueCgu.php";
include RACINE . "/vue/inc/footer.php";

?>