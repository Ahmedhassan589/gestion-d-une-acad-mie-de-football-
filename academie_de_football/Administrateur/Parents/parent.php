
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
                                        Parent
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
                                        <small>connecté</small>
                                </div>
                        </div>
                </header>

                <main>
                <div class="tables">
                                <div class="tableau">
                               <?php 
                               $requete=" select * from  information";
                                            $resultat=mysqli_query($sum,$requete);
                                            if ($resultat) {
                                                while ($ligne=mysqli_fetch_row($resultat)) {
                                                    $num=$ligne[0];
                                                    $nom=$ligne[1];

                                         ?>
                                        <div class="info">
                                                <img class="pricipalImg" src="images/4.jpg" alt="">
                                                <p>
                                                      <?php
                                                        echo "$nom";
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