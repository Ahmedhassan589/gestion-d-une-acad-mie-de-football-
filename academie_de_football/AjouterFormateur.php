<?php

include 'connexion.php';

if (isset($_POST["connexion"])) {
    $num=$_POST["numero"];
    $nom=$_POST["lastname"];
    $prenom=$_POST["fistname"];
    $adre=$_POST["adresse"];
    $equipe=$_POST["equipe"];
    $requete="insert into  formateur (	Id_For	,Nom_For,Prenom_For	,Addr_For,Id_equipe)
    values($num,'$nom','$prenom','$adre','$equipe')";
    $resultat=mysqli_query($sum,$requete);
    if ($resultat) {
        header("Location:interfaceAdministrateur.php");
    }else{
        die(mysqli_error($sum));
    }
}


?>?