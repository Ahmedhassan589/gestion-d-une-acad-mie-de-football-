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

$rech=("UPDATE formateur SET Id_For='$Id_For',Nom_For='$Nom_For',Prenom_For='$Prenom_For','$Addr_For','$Id_equipe'
WHERE Id_For='$Id_For'");
$result=mysqli_query($Elmi,$rech);

if($result){
    echo"les donneés ont bien été modifier dans la base données";

}else{ 
    echo"Erreur :les données n'ont pas été modifier dans la base données";
}
?>