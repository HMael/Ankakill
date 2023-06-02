<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
	// Un MVC utilise uniquement ses requêtes depuis le contrôleur principal : index.php
    die('Erreur : '.basename(__FILE__));
}

include RACINE . "/vue/inc/navbarProfil.php";
include RACINE . "/vue/vueDeclaration.php";
include RACINE . "/vue/inc/footerProfil.php";

// recupère automatiquement de mailU il le récupère dans la session. depouille du formulaire avec post
// choix que lutilisateur à fait en renseignant 


?>