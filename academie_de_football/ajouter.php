<?php

include 'connexion.php';

if (isset($_POST["connexion"])) {
    $num=$_POST["num"];
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $adre=$_POST["adress"];
    $email=$_POST["email"];
    $paszord=$_POST["pasword"];
    $requete="insert into parent (num_parent,Nom_parent,Prenom_parent,adresse,email,pasword)
    values($num,'$nom','$prenom','$adre','$email','$paszord')";
    $resultat=mysqli_query($sum,$requete);
    if ($resultat) {
        header("Location:interfaceAdministrateur.php");
    }else{
        die(mysqli_error($sum));
    }
}


?>