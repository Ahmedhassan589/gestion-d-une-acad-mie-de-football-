<?php
$SERVER="localhost";
$utilisateur="root";
$motDepasse="";
$base="gestion_academie";
$Elmi=mysqli_connect($SERVER,$utilisateur,$motDepasse,$base);

$Id_Jou=$_POST["Id_Jou"];
$Nom_Jou=$_POST["Nom_Jou"];
$Prenom_Jou=$_POST["Prenom_Jou"];
$Addr_Jou=$_POST["Addr_Jou"];
$Age_Jou=$_POST["Age_Jou"];
$Date_Naissance=$_POST["Date_Naissance"];
$Id_equipe=$_POST["Id_equipe"];
$num_parent=$_POST["num_parent"];

$rech=("INSERT INTO joueur (Id_Jou,Nom_Jou,Prenom_Jou,Addr_Jou,Age_Jou,Date_Naissance,Id_equipe,num_parent)
VALUES('$Id_Jou','$Nom_Jou','$Prenom_Jou','$Addr_Jou','$Age_Jou','$Date_Naissance','$Id_equipe','$num_parent')");
if(mysqli_query($Elmi,$rech)){
    echo"les donneés ont bien été enregistrés dans la base données";

}else{ 
    echo"Erreur :les données n'ont pas été enregistré dans la base données";
}
?>