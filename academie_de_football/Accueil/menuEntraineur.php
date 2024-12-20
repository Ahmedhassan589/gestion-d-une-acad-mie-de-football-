<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="decor.css">
    <style>
        img.profile-icon {
            position: fixed;
            top: 10px;
            left: 10px;
            width: 80px;
            height: 80px;
            border-radius: 50%;
        }

        .input {
            background-color: #E50914;
            color: #FFFFFF;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .mo {
            position: fixed;
        }

        .logout-form {
            text-align: right;
            margin-right: auto;
        }

        .center-container {
            text-align: center;
        }

        .marquee-container {
            display: inline-block;
        }

        .marquee-text {
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <section id="conte">

    <?php
    session_start();
    $hote = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $base_de_donnees = "gestion_academie";
    $connexion = mysqli_connect($hote, $utilisateur, $mot_de_passe, $base_de_donnees);
    if (!$connexion) {
        die("�chec de la connexion : " . mysqli_connect_error());
    }
    if (isset($_SESSION['nom'])) {
    $mot=$_GET['mot'];
    $num=$_GET['nom'];
    $requet = "SELECT Nom_jou FROM joueur where Id_jou=$num";
    $resu=mysqli_query($connexion,$requet);
    while ($ligne = mysqli_fetch_row($resu)) {
        echo "<br><br><br><br><br><br><p class='mo'>Nom_jou:$ligne[0]</p>";}
    echo "<form method='POST' action='" . $_SERVER['PHP_SELF'] . "'class='logout-form'>
    <h2><input type='submit' name='deconnexion' value='D�connexion' class='bouton'></h2>
  </form>";
  if (isset($_POST['deconnexion'])) {
    session_destroy();

    // Rediriger vers la page de connexion
    header('Location: connecter.php');
    exit();
}
if (isset($_SESSION['nom'])) {
    echo "<img class='profile-icon' src='image/contact.jpg' alt='Photo Profile'> <br><br>";
}
    $requete = "SELECT * FROM joueur";
    $resultat = mysqli_query($connexion, $requete);
    echo"<div class='center-container'><h2 class='marquee-container'><marquee direction='up' class='marquee-text'>Liste des joueur</marquee></h2></div>";
    while ($ligne = mysqli_fetch_row($resultat)) {
        echo "
        <div class='film-container' style='width:25%; height=25%'>
        <center>
<table border=0 cellspacing=0 cellpading=4><tr> <center>
<img src='image/$ligne[1]'alt='Affiche du joueur' id='image' width=50% height=50%></center>
<tr><td><p><h2>Titre:</h2></p></td> <td>$ligne[2]</td></tr>
<tr><td><p>Realisateur:</p></td> <td>$ligne[3]</td></tr>
<tr><td><p>Scenario:</p></td> <td>$ligne[4]</td></tr>
<tr><td><p>Musique:</p></td> <td>$ligne[5]</td></tr>
<tr><td><p>Societe:</p></td> <td>$ligne[6]</td></tr>
<tr><td><p>Production:</p></td> <td>$ligne[7]</td></tr>
<tr><td><p>Sortie:</p></td> <td>$ligne[8]</td></tr>";
$requeteg = "SELECT *FROM equipe where id_equipe=$ligne[9]"; 
$resultatg = mysqli_query($connexion,$requeteg);
while($li = mysqli_fetch_row($resultatg)){
    echo "<tr><td><p>Nom_equipe:</p></td> <td>$li[1]</td></tr>";
}
echo" 
<td colspan=2 align='center'><center>
<form action='Menu1Film.php?nom=$num&mot=$mot' method='post'>
<input type='hidden' name='numer' value='$ligne[0]'  >
<button type='submit' class='bouton'>Ticket</button> </form>     
</td>      
</center> </table> </center>
       </div> 
        
        ";
    }

    mysqli_close($connexion);
}
    else {
        // Si l'utilisateur n'est pas connect�, rediriger vers la page de connexion
        header('Location: connecter.php');
        exit();}
    ?>
    </section>
    
</body>
</html>
