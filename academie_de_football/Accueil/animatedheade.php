<?php

include 'connexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>animation.com</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

       <!-- #######header start -->
    
       <header id="header">
            <nav class="navbar">
              <div class="nav-brands">
                  <a href="#"><img src="images/Logo1.jpg" alt="logo" class="logo"></a>
              </div>
              <div class="navbar-menu">
                  <ul>
                      <a href="Accueil.html.html" id="btn">inscrip</a>
                      <a href="CONNEXION.html" id="btn">conexion</a>
                      <a href="#Accueil">Accueil</a>
                      <a href="contact_email.html">Contact</a>
                      <a href="login_admin.php" id="btn">Administrateur</a>
                      <a href="loginetud.php" id="btn">Parent</a>
                      <!-- <a href="#" class="showInscription">sign up</a> -->
                  </ul>
              </div>
  
              <div class="humberger">
                  <div class="bar"></div>
                  <div class="bar"></div>
                  <div class="bar"></div>
              </div>
          </nav>
  
      </header>
  
      <!-- #######header end -->

      <section class="slider" style="height: 100vh;">
            
          <div class="myslider fade" style="display:block;
          height: 100%;">
              <div class="text">
                  <h1>Bienvenue &<br><span>sur notre academie football</span></h1>
                  <p>
                    Notre mission est de faire en sorte que les jeunes joueur atteignent leurs<br> objectifs sportifs et scolaires
                  </p>
              </div>
              <img src="images/img.jpg" alt="header pucture">
          </div>
          <div class="myslider fade" style="height: 100%;">
                <div class="text">
                    <h1>inscrivez vous </h1>
                    <p>
                        L'academie fournit le meilleurs professionnels pour qu'ils puissent vivre
                    </p>
                </div>
                <img src="images/img11.jpg" alt="header pucture">
            </div>
            <div class="myslider fade" style="height: 100%;" >
                    <div class="text">
                        <h1> Le plateforme</h1>
                        <p>
                            une experience la plus semblable possible a celle d'un footballeur professionnel .
                        </p>
                    </div>
                    <img src="images/3.jpg" alt="header pucture">
            </div>
            <div class="myslider fade" style="height: 100%;">
                    <div class="text">
                        <h1>pour plus</h1>
                        <p>
                            D'information veuillez consulter la session a Propos de nous
                        </p>
                    </div>
                    <img src="images/4.jpg" alt="header pucture">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>


            <div class="dotsbox">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>
           
            

       
      </section>


      <script src="script.js"></script>
     
</body>
</html>