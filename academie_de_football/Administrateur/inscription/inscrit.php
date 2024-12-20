
<?php

include 'connexion.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>

        <div class="slidebar .short">
                <a href="../Accueil/animatedheade.php" class="slidebar-brand">
                        <span class="fas fa-user"></span>
                        Deconnexion
                </a>
                <div class="slidebar-menu">
                        <ul>
                                <li>
                                        <a href="#" class="active" id="Accueil">
                                                <span class="fas fa-home"></span>
                                                <span>Notification</span>
                                        </a>
                                </li>
                               
    
                        </ul>
                </div>
        </div>
        <div class="main-content">
                <header id="header">
                        <h2 class="h2">
                                <label for="">
                                        inscrit
                                </label>
                        </h2>
                        <!-- <div class="search-wrapper">
                                <span class="fas fa-search"></span>
                                <input type="search" placeholder="chercher...">
                        </div> -->
                        <div class="user-wrapper">
                                <img src="images/24.jpg" width="30px" height="30px" alt="">
                                <div>
                                        <h4>
                                                ahmed hassan
                                        </h4>
                                        <small>connect�</small>
                                </div>
                        </div>
                </header>

                <main>
                <div class="tables">
                                <div class="tableau">
                               <?php 
                               include 'connexion.php';
                               if ($_serveur["request_method"] == "POST"){
                                       $Id_jou = isset($_POST['Id_jou']) ?
                                intval($_POST['Id_jou']) : 0;
                                       $Nom_jou = isset($_POST['Nom_jou']) ?
                                mysqli_real_escape_string($conn,
                                $_POST['Nom_jou']) : '';
                                       $Prenom_jou = isset($_POST['Prenom_jou']) ?
                                mysqli_real_escape_string($conn,
                                $_POST['Prenom_jou']) : '';
                                       $Addr_jou = isset($_POST['Addr_jou']) ?
                                mysqli_real_escape_string($conn,
                                $_POST['Addr_jou']) : '';
                                       $Age_jou = isset($_POST['Age_jou']) ?
                                intval($_POST['Age_jou']) : 0;
                                       $Date_Naissance=isset($_POST['Date_Naissance']) ?
                                mysqli_real_escape_string($conn,
                                $_POST['Date_Naissance']) : '';
                                       $Id_equipe=isset($_POST['Id_equipe']) ?
                                intval($_POST['Id_equipe']) : 0;
                                       $num_parent=isset($_POST['num_parent']) ?
                                intval($_POST['num_parent']) : 0;
                                       $requete=

                                       
                               }
                                        $requete=="insert INTO joueur (Id_jou,Nom_jou,Prenom_jou,Addr_jou,Age_jou,Date_Naissance,Id_equipe,num_parent)
                                                               values($Id_jou,'$Nom_jou','$Prenom_jou','$Addr_jou','$Age_jou','$Date_Naissance','$Id_equipe','$num_parent')";
                                         echo "$Id_jou ,$Nom_jou ,$Prenom_jou ,$Addr_jou ,$Age_jou ,$Date_Naissance_jou ,$Id_equipe ,$num_parent";
                                               $resultat=mysqli_query($conn,$requete);
                                              if ($resultat){

                                              }else{
                                                      echo "erreur d'insertion : " . mysqli_error($conn);
                                              }
                                                  echo "insertion réussie.";
                                                    $Id_jou=$ligne[0];
                                                    $Nom_jou=$ligne[1];
                                                    $prenom_jou=$ligne[2];
                                                    $Addr_jou=$ligne[3];
                                                    $Age_jou=$ligne[4];
                                                    $Date_Naissance=$ligne[5];
                                                    $Id_equipe=$ligne[6];
                                                    $num_parent=$ligne[7];

                                         ?>
                                        <div class="joueur">
                                                <img class="pricipalImg" src="images/4.jpg" alt="">
                                                <p>
                                                      <?php
                                                        echo "$Id_jou";
                                                      ?>
                                                </p>
                                                
                                        </div>

                                        <?php
                                        }

                                           }
                                        ?>


                                 </div>
                                 
                </div>
                <div class="tables6">
                        <div class="tableau5">
                            
                                 <p class="error">Veuillez remplire le formulaire!</p>
                                 <form action="">
                                     <label for="text">Message</label>
                                     <textarea name="text" id="text" cols="30" rows="10"></textarea>
                                     <input type="submit" value="Envoyer" name="send">
                                 </form>
                            
                         
                    
                    </div>
    
        </main>
    <script src="script.js">
    
    </script>
</body>
</html>