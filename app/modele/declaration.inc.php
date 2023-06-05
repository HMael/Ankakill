<?php

include_once "bd.inc.php";

function addResultat($victoire, $nomClasse, $nomUtil) {
    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("INSERT INTO resultat (victoire, nomC, nomUtil)
            VALUES (:victoire, :nomClasse, :nomUtil)");
        $req->bindValue(':victoire', $victoire, PDO::PARAM_BOOL);
        $req->bindValue(':nomClasse', $nomClasse, PDO::PARAM_STR);
        $req->bindValue(':nomUtil', $nomUtil, PDO::PARAM_STR);
        
        $resultat = $req->execute();
        return $resultat;
    } catch (PDOException $e) {
        die("Erreur !: " . $e->getMessage());
    }
}

?>