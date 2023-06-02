<?php
function redirigeVers($action="") {
	
    $lesActions = array();
    $lesActions["defaut"] = "accueil.php";
    $lesActions["appelFormulaire"] = "connexion.php";
    $lesActions["connexion"] = "connexion.php";//qui doit renvoyer sur le profile de l'utilisateur
    $lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["profil"] = "profil.php";
    $lesActions["declaration"] = "declaration.php";
    $lesActions["statistique"] = "statistique.php";
    $lesActions["cgu"] = "cgu.php";
    $lesActions["cgu2"] = "cgu2.php";
    $lesActions["inscription"] = "inscription.php";

    //si la clé "action" existe dans notre tableau "lesActions" :
    if (array_key_exists($action, $lesActions)) {
        // le fichier à inclure sera retourné :
        return $lesActions[$action];
    } else {
        //si la clé "action" n'existe pas, on renvoie le fichier par défaut :
        return $lesActions["defaut"];
    }
}

?>