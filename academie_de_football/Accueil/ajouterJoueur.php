<?php
$SERVER="localhost";
$utilisateur="root";
$motDepasse="";
$base="gestion_academie";
$Elmi=mysqli_connect($SERVER,$utilisateur,$motDepasse,$base);

$Id_jou=$_POST["Id_jou"];
$Nom_jou=$_POST["Nom_jou"];
$Prenom_jou=$_POST["Prenom_jou"];
$Addr_jou=$_POST["Addr_jou"];
$Age_jou=$_POST["Age_jou"];
$Date_Naissance=$_POST["Date_Naissance"];
$Id_equipe=$_POST["Id_equipe"];
$num_parent=$_POST["num_parent"];

$rech=("INSERT INTO joueur (Id_jou,Nom_jou,Prenom_jou,Addr_jou,Age_jou,Date_Naissance,Id_equipe,num_parent)
VALUES('$Id_jou','$Nom_jou','$Prenom_jou','$Addr_jou','$Age_jou','$Date_Naissance','$Id_equipe','$num_parent')");
if(mysqli_query($Elmi,$rech)){
    echo"Erreur :les données n'ont pas été enregistré dans la base données";

}else{ 
    echo"l'inscription de joueur est bien été enregistrés dans la base données";
}
?>