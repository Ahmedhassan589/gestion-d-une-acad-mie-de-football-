<?php
// Connexion à la base de données
$SERVER = "localhost";
$utilisateur = "root";
$motDepasse = "";
$base="gestion_academie";
$E=mysqli_connect($SERVER,$utilisateur,$motDepasse,$base);


$num_parent=$_POST["num_parent"];
$Nom_parent=$_POST["Nom_parent"];
$prenom_parent=$_POST["prenom_parent"];
$adresse=$_POST["adresse"];
$email=$_POST["email"];
$pasword=$_POST["pasword"];

$rech=("INSERT INTO parent (num_parent,Nom_parent,prenom_parent,adresse,email,pasword)
VALUES('$num_parent','$Nom_parent','$prenom_parent','$adresse','$email','$pasword')");
if(mysqli_query($E,$rech)){
    echo"Erreur :les données n'ont pas été enregistré dans la base données";

}else{ 
    echo"les donneés ont bien été enregistrés dans la base données";
}
 
 ?>
 
