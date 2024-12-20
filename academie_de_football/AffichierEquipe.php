<?php
$server="localhost";
$utilisateur="root";
$motdepasse="";
$base="gestion_academie";
$connect=mysqli_connect($server,$utilisateur,$motdepasse,$base);

    $Id_equipe=$_POST["Id_equipe"];
    $Nom_equipe=$_POST["Nom_equipe"];
    $Logo=$_POST["Logo"];
    $connect=$connect= select * from Equipe;
    echo "$Id_equipe ,$Nom_equipe ,$Logo";
    
 ?> les base de donnes est bien ajouter .