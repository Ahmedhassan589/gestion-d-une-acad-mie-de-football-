<?php
$SERVER="localhost";
$utilisateur="root";
$motDepasse="";
$base="gestion_academie";
$E=mysqli_connect($SERVER,$utilisateur,$motDepasse,$base);

$Id_Jou=$_POST["Id_Jou"];
$q=("DELETE FROM joueur WHERE Id_Jou=$Id_Jou");
if(mysqli_query($E,$q)){
    echo"les données n'ont pas été supprimer dans la base données";

}else{ 
    echo"Erreur :les donneés ont bien été supprimer dans la base données";
}
?>