<?php
$SERVER="localhost";
$utilisateur="root";
$motDepasse="";
$base="gestion_academie";
$Elmi=mysqli_connect($SERVER,$utilisateur,$motDepasse,$base);

$a=$_POST["Id_equipe"];
$b=$_POST["Nom_equipe"];
$c=$_POST["Logo"];

$rech=("INSERT INTO equipe (Id_equipe,Nom_equipe,Logo)
VALUES('$a','$b','$c')");
if(mysqli_query($Elmi,$rech)){
    echo"les donneés ont bien été enregistrés dans la base données";

}else{ 
    echo"Erreur :les données n'ont pas été enregistré dans la base données";
}
?>