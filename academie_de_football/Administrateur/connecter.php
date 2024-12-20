<?php
session_start();

if(isset($_POST['bouton'])){
    
session_start();

$id = mysqli_connect("localhost", "root", "", "projet");
$nom = $_POST['num'];
$mot = $_POST['mot'];

 $req = "SELECT * FROM client WHERE Num_tel_client='$nom'";
$resulte = mysqli_query($id, $req);

if ($resulte) {
    $row = mysqli_fetch_assoc($resulte);
    if ($row && password_verify($mot, $row['Motdepasse_client'])) {
        $_SESSION['nom'] = $nom;
        $_SESSION['mot'] = $mot;
         header("location: MenuFilmm.php?nom=$nom&mot=$mot");
        exit();
    }
}

$query = "SELECT * FROM assistant WHERE Numtel_ASSISTANT='$nom' And motdepasse='$mot' ";
$result = mysqli_query($id, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['nom'] = $nom;
    $_SESSION['mot'] = $mot;
        header("location: debut.php?nom=$nom");
        exit();
    }


 
    echo "Erreur d'authentification: numéro de téléphone ou mot de passe incorrect";
$id->close();


    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>connecter</title>
        <link rel="stylesheet" href="test.css">
        
    </head>
    <body> 
        
            <header>
                <h1>Bienvenue sur Cinéma Blids</h1>
                <p>Là où Chaque Film Devient une Aventure</p>
            </header>
        
            <nav>
                <ul>
                    <li><a href="Accueil.html.html" class="nav-button">Accueil</a></li>
                    <li><a href="connecter.php" class="nav-button">Se connecter</a></li>
                    <li><a href="formulairejoueur.php"class="nav-button">Inscription</a></li>
                     
                    <li><a href="propos.html"class="nav-button">A propos</a></li>
                 </ul>
            </nav>
        
           
        
           
        <center>
        <div class="container">          <?php
if(isset($erreur)){
    echo $erreur;
}
?>
            <center><h1>L'aventure commence ici</h1><br><br></center>
            
            <center>
  
        <form method="POST" action="">
        Numero:</br>
        <input type="number" name="num">
        </br>
        <p></p>
        Mot De passe:</br>
        <input type="password" name="mot">
        </br>
        <input type="reset" name="annuler" value="annuler">
        <input type="submit" name="bouton" value="connecter">
        </p>
        
     
        </form>
        </center></div>
    </center>

    <footer>
        <p>Cinéma Blids - Où chaque film devient une aventure.</p>
    </footer>

</body>
</html>