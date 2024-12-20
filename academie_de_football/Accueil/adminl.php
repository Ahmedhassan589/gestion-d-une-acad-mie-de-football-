<?php
session_start();
$server="localhost";
$utilisateur="root";
$motdepasse="";
$base="gestion_academie";
$_SESSION['$num_etd']=$_POST['num_admin'];
$_SESSION['$mdp_adm']=$_POST['mot_passe_admin'];
$sum=mysqli_connect($server,$utilisateur,$motdepasse,$base);
if(isset($_POST['Connexion'])){
   $vide=null; 
   $test_num_etd=mysqli_query($sum,"SELECT * FROM administrateur  WHERE email_admin  ='".$_SESSION['$num_etd']."'");
   $resultat_test_num_etd=mysqli_num_rows($test_num_etd);
      if($resultat_test_num_etd>0){
         $test_mdp_etd=mysqli_query($sum," SELECT * FROM administrateur WHERE mot_passe_admin='".$_SESSION['$mdp_adm']."'");
         $resultat_test_mdp_etd=mysqli_num_rows($test_mdp_etd);
         if($resultat_test_mdp_etd>0){


            $resultat = mysqli_query($sum,"SELECT email_admin FROM administrateur WHERE email_admin = '".$_SESSION['$num_etd']."' AND mot_passe_admin = '".$_SESSION['$mdp_adm']."' ");
            // Extraire la valeur unique de résultat
             $nom_utilisateur = mysqli_fetch_assoc($resultat)['email_admin'];
         
            // Stocker la valeur unique dans une variable de session
            $_SESSION['email_admin'] = $nom_utilisateur;

            $resultat1 = mysqli_query($sum,"SELECT nom_admin   FROM administrateur WHERE email_admin = '".$_SESSION['$num_etd']."' AND mot_passe_admin = '".$_SESSION['$mdp_adm']."' ");
            // Extraire la valeur unique de résultat
             $nom_utilisateur1 = mysqli_fetch_assoc($resultat1)['nom_admin'];
         
            // Stocker la valeur unique dans une variable de session
            $_SESSION['nom_admin'] = $nom_utilisateur1;


            $resultat2 = mysqli_query($sum,"SELECT prenom_admin FROM administrateur WHERE email_admin = '".$_SESSION['$num_etd']."' AND mot_passe_admin = '".$_SESSION['$mdp_adm']."' ");
            // Extraire la valeur unique de résultat
             $nom_utilisateur2 = mysqli_fetch_assoc($resultat2)['prenom_admin'];
         
            // Stocker la valeur unique dans une variable de session
            $_SESSION['prenom_etudiant'] = $nom_utilisateur2;




            $resultat3 = mysqli_query($sum,"SELECT images FROM administrateur WHERE email_admin = '".$_SESSION['$num_etd']."' AND mot_passe_admin = '".$_SESSION['$mdp_adm']."' ");
            // Extraire la valeur unique de résultat
             $nom_utilisateur3 = mysqli_fetch_assoc($resultat3)['images'];
         
            // Stocker la valeur unique dans une variable de session
            $_SESSION['images'] = $nom_utilisateur3;




            $resultat3 = mysqli_query($sum,"SELECT images FROM administrateur WHERE email_admin = '".$_SESSION['$num_etd']."' AND mot_passe_admin = '".$_SESSION['$mdp_adm']."' ");
            // Extraire la valeur unique de résultat
             $nom_utilisateur3 = mysqli_fetch_assoc($resultat3)['images'];
         
            // Stocker la valeur unique dans une variable de session
            $_SESSION['images'] = $nom_utilisateur3;
					


         /*$result5 =mysqli_query($sum, "SELECT  image_produit FROM produittb order by");

         // Stocker les images dans un tableau en PHP
         $table_images = array();
         while ($row = mysqli_fetch_assoc($result5)) {
            $table_images[] = $row['image_produit'];

            j'ai un code html , css et javacript je veux que rendre mon dynamique ?


         }

         // Stocker le tableau d'images dans une variable de session
         $_SESSION['table_images'] = $table_images;*/


         

header("Location:../Administrateur/interfaceAdministrateur.php");
            }else {
               $vide = "Mot de passe incorrect!";
            }
         }else{
            $vide = "Numero etudiant incorrect !";
      }
   }
