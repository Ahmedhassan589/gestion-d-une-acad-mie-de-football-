<?php
$SERVER="localhost";
$utilisateur="root";
$motDepasse="";
$base="gestion_academie";
$Elmi=mysqli_connect($SERVER,$utilisateur,$motDepasse,$base);
$info=$_POST["info"];
$rech=("INSERT INTO information ( info )
VALUES('$info')");
if(mysqli_query($Elmi,$rech)){
    echo"les Messages ont bien ete reussi dans notification des parents";

}else{ 
    echo"Erreur :les Messages n'ont pas ete reussi dans notification des parents";
}
?>