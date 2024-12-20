<?php
$SERVER="localhost";
$utilisateur="root";
$motDepasse="";
$base="gestion_academie";
$Elmi=mysqli_connect($SERVER,$utilisateur,$motDepasse,$base);
$num_parent=$_POST["num_parent"];
$Nom_parent=$_POST["Nom_parent"];
$prenom_parent=$_POST["prenom_parent"];
$adresse=$_POST["adresse"];
$email=$_POST["email"];
$pasword=$_POST["pasword"];

$rech=("UPDATE parent SET num_parent='$num_parent',Nom_parent='$Nom_parent',prenom_parent='$prenom_parent',adresse='$adresse',email='$email',pasword='$pasword'
WHERE num_parent='$num_parent'");
$result=mysqli_query($Elmi,$rech);

if($result){
    echo"les donneés ont bien été enregistrés dans la base données";

}else{ 
    echo"Erreur :les données n'ont pas été enregistrées dans la base données";
}

mysqli_close($Elmi);


?>