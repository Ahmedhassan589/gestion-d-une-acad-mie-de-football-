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
$Id_equipe=$_POST["Id_equipe"];

$rech=("INSERT INTO entraineur (Id_En,Nom_En,Prenom_En,Addr_En,Salaire_En,Id_jou,Id_equipe)
VALUES('$Id_En','$Nom_En','$Prenom_En','$Addr_En','$Salaire_En','$Id_jou','$Id_equipe')");
if(mysqli_query($Elmi,$rech)){
    echo"les inscription est bien été enregistrés dans la base données";

}else{ 
    echo"Erreur :les données n'ont pas été enregistré dans la base données";
}
?>