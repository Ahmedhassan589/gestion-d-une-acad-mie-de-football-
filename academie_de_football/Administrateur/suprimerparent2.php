<?php
$SERVER="localhost";
$utilisateur="root";
$motDepasse="";
$base="gestion_academie";
$E=mysqli_connect($SERVER,$utilisateur,$motDepasse,$base);

$num_parent=$_POST["num_parent"];
$q=("DELETE FROM parent WHERE num_parent=$num_parent");
if(mysqli_query($E,$q)){
    echo"les donneés ont bien été supprimer dans la base données";

}else{ 
    echo"Erreur :les données n'ont pas été supprimer dans la base données";
}
?>