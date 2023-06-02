<?php
require_once RACINE . "/modele/inscription.inc.php";


function register()
{
    // Vérification de la méthode de requête (POST)
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupérer les données du formulaire
        $psdoU = $_POST['psdoU'];
        $mailU = $_POST['mailU'];
        $mdpU = $_POST['mdpU'];

        // Appeler la fonction du modèle pour enregistrer l'utilisateur
        saveUser($psdoU, $mailU, $mdpU);

        // Redirection ou affichage d'un message de succès
    } else {
        // Affichage du formulaire d'inscription
        include RACINE . "/vue/inc/navbar.php";
        include RACINE . "/vue/vueInscription.php";        
        include RACINE . "/vue/inc/footer.php";
    }
}



register();
?>