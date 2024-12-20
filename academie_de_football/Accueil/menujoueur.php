<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta lin
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assistant Cinémathèque</title>
     <link rel="stylesheet" href="stylos.css">
</head>
<style>
    nav{
    text-align:center;
}

img.profile-icon {
            position: fixed;
            top: 10px;
            left: 10px;
            width: 80px;
            height: 80px;
            border-radius: 50%;
        }
a:hover{
    border-top:5px solid #4c8;
    background-color: rgba(64,200,130,0.15);
}

main {
    margin: 20px;
}
section {
    background: silver;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    margin-bottom: 20px;
}


    </style>
</head>

<body>
    <header>
        <h1>Assistant Cinémathèque</h1>
      <center>  <p>Explorons le monde du cinéma ensemble</p></center>
    </header>



    
    <?php
   session_start();
   $hote = "localhost";
   $utilisateur = "root";
   $mot_de_passe = "";
   $base_de_donnees = "projet";
   $connexion = mysqli_connect($hote, $utilisateur, $mot_de_passe, $base_de_donnees);
   if (!$connexion) {
       die("Échec de la connexion : " . mysqli_connect_error());
   }
   if (isset($_SESSION['nom'])) {
    $num=$_GET['nom'];
   $requet = "SELECT  Nom_ASSISTANT FROM Assistant where Numtel_ASSISTANT=$num";
   $resu=mysqli_query($connexion,$requet);
   while ($ligne = mysqli_fetch_row($resu)) {
       echo "<p class='mo'>Nom:$ligne[0]</p>";}
  
if (isset($_SESSION['nom'])) {
   echo "<img class='profile-icon' src='image/contact.jpg' alt='Photo Profile'> ";
}
   
      
  else {
       // Afficher un message d'erreur si la requête échoue
       echo "Erreur lors de l'exécution de la requête : " . mysqli_error($connexion);
   }
   
   mysqli_close($connexion);
   
    
		
		echo"
        <nav>
      
    <ul>
   
    <td class='v'><a href='film.php?nom=$num'> film</a><td>
    <td class='c'><a href='client.php?nom=$num'>Client</a></td>
    
    ";
  echo"  <td class='c'><form method='post'><input type='submit' name='deconnexion' value='Deconnexion'></form></td>
  </ul>


    </nav>
";

if (isset($_POST['deconnexion'])) {
    // Détruire la session si le bouton de déconnexion est soumis
    session_destroy();

    // Rediriger vers la page de connexion
    header('Location: connecter.php');
    exit();
}
}
else{
    header('Location: connecter.php');
}
    ?>

    <main>
            <section>
                <h2>Bienvenue sur l'Assistant Cinémathèque</h2>
                <p>Comment puis-je vous aider aujourd'hui? Posez-moi vos questions sur les films, trouvez des informations sur les séances à venir, ou explorez notre cinémathèque.</p>
            </section>
    
            <section>
                <h2>Films à l'affiche</h2>
                <p>Découvrez les derniers films qui enchantent nos écrans en ce moment. Que recherchez-vous?</p>
                <!-- Ajoutez ici des informations sur les films à l'affiche -->
            </section>
    
            <section>
                <h2>Recherche de films</h2>
                <p>Besoin d'aide pour trouver un film spécifique? Entrez le titre ou le genre ci-dessous pour obtenir des informations détaillées.</p>
                <!-- Ajoutez ici un formulaire de recherche de films -->
            </section>
        </main>
    <br><br><br><br>
   

    <footer>
        <p>Assistant Cinémathèque - Où chaque réponse est une aventure cinématographique.</p>
    </footer>
</body>
</html>
