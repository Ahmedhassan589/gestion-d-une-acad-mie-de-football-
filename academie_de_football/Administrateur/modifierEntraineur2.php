<?php
$SERVER="localhost";
$utilisateur="root";
$motDepasse="";
$base="gestion_academie";
$Elmi=mysqli_connect($SERVER,$utilisateur,$motDepasse,$base);
$Id_En=$_POST["Id_En"];
$Nom_En=$_POST["Nom_En"];
$Prenom_En=$_POST["Prenom_En"];
$Addr_En=$_POST["Addr_En"];
$Salaire_En=$_POST["Salaire_En"];
$Id_jou=$_POST["Id_jou"];
$Id_jou=$_POST["Id_jou"];

$rech=("UPDATE entraineur SET Id_En='$Id_En',Nom_En='$Nom_En',Prenom_En='$Prenom_En',Addr_En='$Addr_En',Salaire_En='$Salaire_En',Id_jou='$Id_jou',Id_jou='$Id_jou'
WHERE Id_EN='$Id_En'");
$result=mysqli_query($Elmi,$rech);

if($result){
    echo"les donneés ont bien été modifier dans la base données";

}else{ 
    echo"Erreur :les données n'ont pas été enregistrées dans la base données";
}
?>