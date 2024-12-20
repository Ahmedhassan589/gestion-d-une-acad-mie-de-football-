<?php
$SERVER="localhost";
$utilisateur="root";
$motDepasse="";
$base="gestion_academie";
$E=mysqli_connect($SERVER,$utilisateur,$motDepasse,$base);

$NUM=$_POST["Id_For"];
$q=("DELETE FROM formateur WHERE Id_For='$NUM'");
if(mysqli_query($E,$q)){
    echo"les donneés ont bien été supprimer dans la base données";

}else{ 
    echo"Erreur :les données n'ont pas été supprimer dans la base données";
}
?>