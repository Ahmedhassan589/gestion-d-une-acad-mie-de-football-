<?php
$serveur="localhost";
$utilisateur="root";
$motdepasse="";
$base="gestion_academie";
$connect=mysqli_connect($serveur,$utilisateur,$motdepasse,$base);
    $Id_En=$_POST["Id_En"];
    $Nom_En=$_POST["Nom_En"];
    $Prenom_En=$_POST["prenom_En"];
    $Addr_En=$_POST["Addr_En"];
    $Salaire_En=$_POST["Salaire_En"];
    $Id_jou=$_POST["Id_jou"];
    $Id_equipe=$_POST["Id_equipe"];
    $connect= select * from entraineur;
    if ($resultat) {
        header("Location:interfaceAdministrateur.php");
    }else{
        die(mysqli_error($sum));
    }
 ?>