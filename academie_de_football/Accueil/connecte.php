<?php
session_start();
$server="localhost";
$utilisateur="root";
$motdepasse="";
$base="gestion_academie";
$_SESSION['$num']=$_POST['Id_Jou'];
$_SESSION['$nom']=$_POST['Nom_Jou'];
$sum=mysqli_connect($server,$utilisateur,$motdepasse,$base);
if(isset($_POST['Connexion'])){
   $vide=null; 
   $test_num_etd=mysqli_query($sum,"SELECT * FROM joueur WHERE Id_jou='".$_SESSION['$Id_jou']."'");
   $resultat_test_num_etd=mysqli_num_rows($test_num_etd);
      if($resultat_test_num_etd>0){
         $test_mdp_etd=mysqli_query($sum," SELECT * FROM joueur WHERE pasword='".$_SESSION['$mdp_adm']."'");
         $resultat_test_mdp_etd=mysqli_num_rows($test_mdp_etd);
         if($resultat_test_mdp_etd>0){


            $resultat = mysqli_query($sum,"SELECT Id_jou FROM joueur WHERE Id_jou = '".$_SESSION['$Id_jou']."' AND pasword = '".$_SESSION['$mdp_adm']."' ");
            // Extraire la valeur unique de résultat
             $nom_utilisateur = mysqli_fetch_assoc($resultat)['Id_jou'];
         
            // Stocker la valeur unique dans une variable de session
            $_SESSION['Id_jou'] = $nom_utilisateur;

            $resultat1 = mysqli_query($sum,"SELECT Nom_jou FROM joueur WHERE Id_jou = '".$_SESSION['$num_etd']."' AND pasword = '".$_SESSION['$mdp_adm']."' ");
            // Extraire la valeur unique de résultat
             $nom_utilisateur1 = mysqli_fetch_assoc($resultat1)['Id_jou'];
         
            // Stocker la valeur unique dans une variable de session
            $_SESSION['Id_jou'] = $nom_utilisateur1;


            $resultat2 = mysqli_query($sum,"SELECT Prenom_jou FROM joueur WHERE Id_jou = '".$_SESSION['$num_etd']."' AND pasword = '".$_SESSION['$mdp_adm']."' ");
            // Extraire la valeur unique de résultat
             $nom_utilisateur2 = mysqli_fetch_assoc($resultat2)['Prenom_jou'];
         
            // Stocker la valeur unique dans une variable de session
            $_SESSION['Prenom_jou'] = $nom_utilisateur2;




            $resultat3 = mysqli_query($sum,"SELECT addr_jou FROM joueur WHERE Addr_jou = '".$_SESSION['$Addr_jou']."' AND pasword = '".$_SESSION['$mdp_adm']."' ");
            // Extraire la valeur unique de résultat
             $nom_utilisateur3 = mysqli_fetch_assoc($resultat3)['Addr_jou'];
         
            // Stocker la valeur unique dans une variable de session
            $_SESSION['Addr_jou'] = $nom_utilisateur3;




            $resultat3 = mysqli_query($sum,"SELECT Age_jou FROM joueur WHERE Age_jou = '".$_SESSION['$Age_jou']."' AND pasword = '".$_SESSION['$mdp_adm']."' ");
            // Extraire la valeur unique de résultat
             $nom_utilisateur3 = mysqli_fetch_assoc($resultat3)['Age_jou'];
         
            // Stocker la valeur unique dans une variable de session
            $_SESSION['Age_jou'] = $nom_utilisateur3;
					


         /*$result5 =mysqli_query($sum, "SELECT  image_produit FROM produittb order by");

         // Stocker les images dans un tableau en PHP
         $table_images = array();
         while ($row = mysqli_fetch_assoc($result5)) {
            $table_images[] = $row['image_produit'];

            j'ai un code html , css et javacript je veux que rendre mon dynamique ?


         }

         // Stocker le tableau d'images dans une variable de session
         $_SESSION['table_images'] = $table_images;*/


         


            header("Location:../Accueil/connexion1.php");
            }else {
               $vide = "Mot de passe incorrect!";
            }
         }else{
            $vide = "Numero etudiant incorrect !";
      }
   }
if(isset($_POST['Enregistrer'])){
   $num_etd=$_POST['num_etudiant'];
   $password=$_POST['password'];
   $password1=$_POST['password1'];
   $vide1=null; 
   // Vérification que le mot de passe actuel est correct
   $resultat = mysqli_query($sum, "SELECT * FROM joueur WHERE Id_jou='$Id_jou'");
   if(mysqli_num_rows($resultat) == 1){ 
       // Mise à jour du mot de passe si les deux nouveaux mots de passe sont identiques
       if($password == $password1 ){
           mysqli_query($sum,"UPDATE joueur SET pasword='$password' WHERE Id_jou='$Id_jou'");
           $vide1 = " La modification est réussie !!";
       }else{
           $vide1 = "Les deux Mdp ne sont pas les mêmes !!";
       }
   }else{
       $vide1 = "Le mot de passe actuel est incorrect !!";
   }
}
?><!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/stylescon.css">
   <title>Connection</title>
</head>
<body>
                
</body>
</html>
