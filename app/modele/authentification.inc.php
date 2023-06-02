<?php

include_once "bd.utilisateur.inc.php";

//Permet à un utilisateurde se connecter au site
//Vérifier que son adresse mail et son mot de passe correspondent bien à ceux stockés
//dans la base de données. Si c'est le cas, elle crée une session pour l'utilisateur.
function login($mailU, $mdpU) {
    if (!isset($_SESSION)) {
        session_start();
    }

// Récupère les informations de l'utilisateur avec l'adresse mail fournie
    $util = getUtilisateurByMailU($mailU);

      // Vérifie que les informations de connexion sont correctes
    if ($util && is_array($util)) {
        $mdpBD = $util["mdpU"];

        if (password_verify($mdpU, $mdpBD)) {

            // Stocke l'adresse mail de l'utilisateur dans la session
            $_SESSION["mailU"] = $mailU;
        //    $_SESSION["mdpU"] = $mdpBD;
        //Ne pas stocker le mdp de l'utilisateur dans la session
        }
    }
}
//Renvoie l'adresse mail de l'utilisateur connecté si une session est active.
//Si aucun utilisateur n'est connecté, elle renvoie null.
function getMailULoggedOn(){
    if (isLoggedOn()){
        $ret = $_SESSION["mailU"];
    }
    else {
        $ret = null;
    }
    return $ret;
}
//Permet de vérifier si un utilisateur est connecté
//En vérifiant si une session est active
//Et si l'adresse mail stockée dans la session correspond bien à un utilisateur enregistré en base de données.
//Elle renvoie true si l'utilisateur est connecté et false sinon.

function isLoggedOn() {
    if (!isset($_SESSION)) {
        session_start();
    }
    $ret = false;

    // Vérifie que l'adresse mail soit stockés dans la session et non le mot de passe 
    if (isset($_SESSION["mailU"])){ //&& isset($_SESSION["mdpU"])) {
            $ret = true;
    }
    return $ret;
}
//Permet à un utilisateur de se déconnecter du site en supprimant la session correspondante.
function logout() {
    if (!isset($_SESSION)) {
        session_start();
    }

    // Supprime les informations de connexion stockées dans la session
    unset($_SESSION["mailU"]);
}


// Si le fichier est exécuté directement (et non inclus dans un autre fichier),
// on peut tester le fonctionnement des fonctions
// if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
//     // prog principal de test
//     // header('Content-Type:text/plain');

//     // test de connexion
//     //incompréhensible, En plus sur un cas d'erreur.

//     if (isLoggedOn()) {
//         echo "logged\n";
//     } else {
//         echo "not logged\n";
//     }

//     login("maelherve.mh@gmail.com", "maelherve");

//     if (isLoggedOn()) {
//         echo "logged\n";
//     } else {
//         echo "not logged\n";
//     }

//     $mail = getMailULoggedOn();
//     echo "utilisateur connecté avec cette adresse : $mail \n";

//     // deconnexion
//     logout();
// }

?>