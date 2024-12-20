<?php
$serveur="localhost";
$utilisateur="root";
$motdepasse="";
$base="gestion_academie";
$connect=mysqli_Connect($serveur,$utilisateur,$motdepasse,$base);
    $Id_jou=$_POST["Id_jou"];
    $Nom_jou=$_POST["Nom_jou"];
    $Prenom_jou=$_POST["Prenom_jou"];
    $Addr_jou=$_POST["Addr_jou"];
    $Age_jou=$_POST["Age_jou"];
    $Date_Naissance=$_POST["Date_Naissance"];
    $Id_equipe=$_POST["Id_equipe"];
    $num_parent=$_POST["num_parent"];
    $connect= select * from joueur;
    echo "$Id_jou ,$Nom_jou ,$Prenom_jou ,$Addr_jou ,$Age_jou ,$Date_Naissance_jou ,$Id_equipe ,$num_parent";
    $resultat=mysqli_query($sum,$requete);
    if ($resultat) {
        header("Location:interfaceAdministrateur.php");
    }else{
        die(mysqli_error($sum));
    }
?>