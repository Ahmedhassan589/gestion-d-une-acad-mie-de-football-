<?php

include 'connexion.php';

if (isset($_POST["Executer"])) {
    $num=$_POST["numero"];
    $nom=$_POST["name"];
    $prenom=$_POST["logo"];
    $requete="insert into equipe (Id_equipe,Nom_equipe,Logo)
    values($num,'$nom','$prenom')";
    $resultat=mysqli_query($sum,$requete);
    if ($resultat) {
        header("Location:interfaceAdministrateur.php");
    }else{
        die(mysqli_error($sum));
    }
}


?>