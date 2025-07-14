<?php
require "connection.php";
function ajouter_membres($mail, $nom, $ville = null, $sexe = null, $pass, $dtn)
{
    $sql = "INSERT INTO membre (email,nom,ville, genre, mdp, date_naissance) VALUES ('$mail', '$nom', '$ville', '$sexe', '$pass', '$dtn')";
    $requete = mysqli_query(dbconnect(), $sql);
    return $requete;
}

?>