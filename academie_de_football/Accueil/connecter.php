<?php
session_start();

if(isset($_POST['bouton'])){
    


$id = mysqli_connect("localhost", "root", "", "gestion_academie");
$nom = $_POST['num'];
$mot = $_POST['mot'];

 $req = "SELECT * FROM joueur WHERE Id_jou='$nom'";
$resulte = mysqli_query($id, $req);

if ($resulte) {
    $row = mysqli_fetch_assoc($resulte);
    if ($row && password_verify($mot, $row['num'])) {
        $_SESSION['nom'] = $nom;
        $_SESSION['mot'] = $mot;
         header("location: menujoueur.php?nom=$nom&mot=$mot");
        exit();
    }
}

$query = "SELECT * FROM entraineur WHERE Id_En='$nom' And motdepasse='$mot' ";
$result = mysqli_query($id, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['nom'] = $nom;
    $_SESSION['mot'] = $mot;
        header("location: menuEntraineur.php?nom=$nom");
        exit();
    }


 
    echo "Erreur d'authentification: Id_joueur ou mot de passe incorrect";
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
            <center>
                <h1>Bienvenue sur academie football</h1>
                <p>Là où Chaque joueur Devient une talent</p>
            </header>
        
            <nav>
        
           
        
           
        <center>
        <div class="container">          <?php
if(isset($erreur)){
    echo $erreur;
}
?>
            <center><h1>L'aventure commence ici</h1><br><br></center>
            
            <center>
            <nav>
            </center> 
                <ul>
                    
                    <li><a href="connecter.php" class="nav-button">Se connecter</a></li>
                   
                     
                    
                 </ul>
            </nav>
           </center>
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
    <center>
        <p>academie football - Où chaque joueur devient une talent.</p>
    </footer>
    </center>
</body>
</html>