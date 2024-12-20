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
            <li><a href="formulaireclient.php" class="nav-button">Inscription</a></li>
             
            <li><a href="propos.html" class="nav-button">À propos</a></li>
        </ul>
    </nav>

   
   <div class="mo"> 
         
                <!-- Votre formulaire d'inscription -->
                <h1><center>Formulaire d'inscription</center></h1>
                <form method="post" action="formulairecli.php" class="center-form">
                   <center> <table>
                        <tr>
                            <td><label for="no">Nom de la famille : </label></td>
                            <td><input type="text" name="Nom_client" id="no" required="required" placeholder="Ex.Mahamoud Ali"></td>
                        </tr>
                        <tr>
                            <td><label for="pre">Prénom : </label></td>
                            <td><input type="text" name="Prenom_client" id="pre" required="required" placeholder="Ex.Loukman"></td>
                        </tr>
                        <tr>
                            <td><label for="a">Adresse_Email : </label></td>
                            <td><input type="email" name="Adresse" id="a" required="required" placeholder="Ex:ilkaaseh@gmail.com"></td>
                        </tr>
                        <tr>
                            <td><label for="n">Numéro de télephone : </label></td>
                            <td><input type="number" name="Num_tel_client" id="n" required="required" placeholder="Ex.77192598"></td>
                        </tr>
                        <tr>
                            <td><label for="m">Mot de passe : </label></td>
                            <td><input type="password" name="Motdepasse_client" id="m" required="required"></td>
                        </tr>
                        <tr>
                            <td>Nom de payment : </td>
                            <td>
                                <select name="genre" id="no">
                                    <?php
                                    $serveur = "localhost";
                                    $utilisateur = "root";
                                    $motdepasse = "";
                                    $base = "projet";
                                    $ab = mysqli_connect($serveur, $utilisateur, $motdepasse, $base);
                                    $R = mysqli_query($ab, "SELECT * FROM `payement` ");
                                    while ($ligne = mysqli_fetch_array($R)) {
                                        echo "<option value='$ligne[0]'>$ligne[1]</option>";
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr> </table> <br><br><center><table>
                        <tr>
                            <td><input type="submit" value="S'inscrire"></td>
                            <td><input type="reset" value="Annuler"></td>
                        </tr>
                        
                    </table></center>
                </form>
             
        </div>
        <br><br><br>
        </center>
    <footer>
        <p>Cinéma Blids - Où chaque film devient une aventure.</p>
    </footer>
</body>
</html>
