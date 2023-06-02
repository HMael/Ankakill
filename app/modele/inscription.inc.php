<?php
function saveUser($psdoU, $mailU, $mdpU)

{
    // Connexion à la base de données
    $conn = mysqli_connect("localhost", "root", "", "krozmokill");

    if (!$conn) {
        die("La connexion a échoué : " . mysqli_connect_error());
    }

    $psdoU = mysqli_real_escape_string($conn, $psdoU);
    $mailU = mysqli_real_escape_string($conn, $mailU);
    $mdpU = password_hash(mysqli_real_escape_string($conn, $mdpU), PASSWORD_DEFAULT);
    $sql = "INSERT INTO utilisateur (psdoU, mailU, mdpU) VALUES ('$psdoU', '$mailU', '$mdpU')";

    if (mysqli_query($conn, $sql)) {
        echo "L'utilisateur a été enregistré avec succès.";
    } else {
        echo "Erreur lors de l'enregistrement de l'utilisateur : " . mysqli_error($conn);
    }

    // Fermer la connexion
    mysqli_close($conn);
}
?>