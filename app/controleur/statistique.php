<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
	// Un MVC utilise uniquement ses requêtes depuis le contrôleur principal : index.php
    die('Erreur : '.basename(__FILE__));
}

include RACINE . "/vue/inc/navbarProfil.php";
include RACINE . "/vue/vueStatistique.php";
include RACINE . "/vue/inc/footerProfil.php";



?>