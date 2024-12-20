<?php
$serveur="localhost";
$utilisateur="root";
$motdepasse="";
$base="gestion_academie";
$connect=mysqli_connect($serveur,$utilisateur,$motdepasse,$base);

    $Id_En=$_POST["Id_En"];
    $Nom_En=$_POST["Nom_En"];
    $Prenom_En=$_POST["Prenom_En"];
    $Adrr_En=$_POST["Adrr_En"];
    $Salaire_En=$_POST["Salaire_En"];
    $Id_jou=$_POST["Id_jou"];
    $Id_equipe=$_POST["Id_equipe"];
    $requete="insert into entraineur (	Id_En,Nom_En,Prenom_En,Addr_En,Salaire_En,Id_jou,Id_equipe)
    values($Id_En,'$Nom_En','$Prenom_En','$Adrr_En','$Salaire_En',$Id_jou,$Id_equipe)";
    echo "$Id_En ,$Nom_En ,$Prenom_En,$Adrr_En,$Salaire_En,$Id_jou,$Id_equipe";

?>