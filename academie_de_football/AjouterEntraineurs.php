<?php
$serveur="localhost";
$utilisateur="root";
$motdepasse="";
$base="gestion_academie";
$connect=mysqli_connect($serveur,$utilisateur,$motdepasse,$base);

if (isset($_POST["connexion"])) {
    $num=$_POST["numero"];
    $nom=$_POST["lastname"];
    $prenom=$_POST["fistname"];
    $adre=$_POST["adresse"];
    $salaire=$_POST["salaire"];
    $Id_jou=$_POST["Id_jou"];
    $Id_equipe=$_POST["Id_equipe"];
    $requete="insert into entraineur (	Id_En,Nom_En,Prenom_En,Addr_En,Salaire_En,Id_jou,Id_equipe)
    values($num,'$nom','$prenom','$adre','$salaire',Id_jou,Id_equipe)";
    $resultat=mysqli_query($sum,$requete);
    if ($resultat) {
        header("Location:interfaceAdministrateur.php");
    }else{
        die(mysqli_error($sum));
    }
}


?>