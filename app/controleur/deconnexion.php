<?php

/**
*	Controleur secondaire : deconnexion
*/

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
	// Un MVC utilise uniquement ses requêtes depuis le contrôleur principal : index.php
    die('Erreur : '.basename(__FILE__));
}

require_once RACINE . "/modele/authentification.inc.php";

 
logout();
 $titre = 'Vous êtes déconnecté adios!!';
 include RACINE . "/vue/inc/navbar.php";
 include RACINE . "/vue/vueAuthentification.php";
 include RACINE . "/vue/inc/footer.php";

// recuperation des donnees GET, POST, et SESSION
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
// traitement si necessaire des donnees recuperees         

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Deconnexion";


?>