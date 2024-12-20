<?php
$SERVER="localhost";
$utilisateur="root";
$motDepasse="";
$base="gestion_academie";
$Elmi=mysqli_connect($SERVER,$utilisateur,$motDepasse,$base);
$a=$_POST["Id_equipe"];
$b=$_POST["Nom_equipe"];
$c=$_POST["logo"];

$rech=("UPDATE equipe SET Id_equipe='$a',Nom_equipe='$b',Logo='$c'
WHERE Id_equipe='$a'");
$result=mysqli_query($Elmi,$rech);

if($result){
    echo"les donneés ont bien été modifier dans la base données";

}else{ 
    echo"Erreur :les données n'ont pas été enregistrées dans la base données";
}
?>