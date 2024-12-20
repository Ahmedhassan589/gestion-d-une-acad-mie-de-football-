<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>inscription</title>
    <link rel="stylesheet" href="test.css">
  
</head>
<body> 
    <header>
        <h1>Bienvenue sur academie football</h1>
        <p>La ou Chaque joueur Devient une talent</p>
    </header>

    <nav>
        <ul>
            <li><a href="Accueil.html.html" class="nav-button">Accueil</a></li>
            <li><a href="connecter.php" class="nav-button">Se connecter</a></li>
            <li><a href="formulairejoueur.php" class="nav-button">Inscription</a></li>
        </ul>
    </nav>

   
   <div class="mo"> 
         
                <!-- Votre formulaire d'inscription -->
                <h1><center>Formulaire d'inscription</center></h1>
                <form method="post" action="formulairejou.php" class="center-form">
                   <center> <table>
                        <tr>
                            <td><label for="no">Nom de la famille : </label></td>
                            <td><input type="text" name="Nom_jou" id="no" required="required" placeholder="Ex.ahmed hassan"></td>
                        </tr>
                        <tr>
                            <td><label for="pre">Prenom : </label></td>
                            <td><input type="text" name="Prenom_jou" id="pre" required="required" placeholder="Ex.ahmed"></td>
                        </tr>
                        <tr>
                            <td><label for="a">Adresse_Email : </label></td>
                            <td><input type="email" name="Addr_jou" id="a" required="required" placeholder="Ex:ahmedsamir@gmail.com"></td>
                        </tr>
                        <tr>
                            <td><label for="n">Numero : </label></td>
                            <td><input type="number" name="Id_jou" id="n" required="required" placeholder="Ex.77192598"></td>
                        </tr>
                        <tr>
                            <td><label for="m">Mot de passe : </label></td>
                            <td><input type="password" name="Motdepasse_joueur" id="m" required="required"></td>
                        </tr>
                        <tr>
                            <td>Nom de payment : </td>
                            <td>
                                <select name="genre" id="no">
                                    <?php
                                    $serveur = "localhost";
                                    $utilisateur = "root";
                                    $motdepasse = "";
                                    $base = "gestion_academie";
                                    $ab = mysqli_connect($serveur, $utilisateur, $motdepasse, $base);
                                    $R = mysqli_query($ab, "SELECT * FROM `joueur` ");
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
        <p>academie football - O� chaque joueur devient une talent.</p>
    </footer>
</body>
</html>
