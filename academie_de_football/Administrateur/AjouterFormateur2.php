<?php
$SERVER="localhost";
$utilisateur="root";
$motDepasse="";
$base="gestion_academie";
$Elmi=mysqli_connect($SERVER,$utilisateur,$motDepasse,$base);

$Id_For=$_POST["Id_For"];
$Nom_For=$_POST["Nom_For"];
$Prenom_For=$_POST["Prenom_For"];
$Addr_For=$_POST["Addr_For"];
$Id_equipe=$_POST["Id_equipe"];

$rech=("INSERT INTO formateur (Id_For,Nom_For,Prenom_For,Addr_For,Id_equipe)
VALUES('$Id_For','$Nom_For','$Prenom_For','$Addr_For','$Id_equipe')");
if(mysqli_query($Elmi,$rech)){
    echo"les donneés ont bien été enregistrés dans la base données";

}else{ 
    echo"Erreur :les données n'ont pas été enregistré dans la base données";
}
?>