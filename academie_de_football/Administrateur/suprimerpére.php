<?php
// Connexion à la base de données
$SERVER = "localhost";
$utilisateur = "root";
$motDepasse = "";
$base="gestion_academie";
$E=mysqli_connect($SERVER,$utilisateur,$motDepasse,$base);



$q=("SELECT num_parent,Nom_parent,prenom_parent,adresse,email,pasword FROM parent ");
$res=mysqli_query($E,$q);
echo"<br><br><br><center><br><br><br>";
echo"<table border='1'>";
echo"<tr><td>Num_parent</td><td>Nom_parent</td><td>prenom_parent</td><td>adresse</td><td>email</td><td>pasword</td> <td>Action</td>\n";
 while($row=mysqli_fetch_assoc($res)){
    echo"<tr><td>{$row['num_parent']}</td> <td>{$row['Nom_parent']}</td>  <td>{$row['prenom_parent']}</td> <td>{$row['adresse']}</td> <td>{$row['email']}</td> <td>{$row['pasword']}<td>supprimier </td>\n<br>";
 }
 echo"</center>";
 echo"</table>";

 
 ?>
 

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Catégories</title>
    <!-- Lien vers Google Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Lien vers le fichier CSS -->
    <link rel="stylesheet" href="CATEGORIE.css">
    <!-- Vous pouvez personnaliser le style ici -->
    <center><bouton><a href="admin.php">Retour au page D'acceul</a></bouton></center>

</head>
<body>
    <div class="container">
      <center>  <h1>Gestion des </h1></center>
        
       
        
        <!-- Affichage des catégories -->
        <table>
            <thead>
                <tr>
                    <th>num_parent</th>
                    <th>Nom_parent</th>
                    <th>Prenom_parent</th>
                    <th>Addresse</th>
                    <th>email</th>
                    <th>pasword</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($res)) { ?>
                    <tr>
                        <td><?php echo $row['num_parent']; ?></td>
                        <td><?php echo $row['Nom_parent']; ?></td>
                        <td><?php echo $row['Prenom_parent']; ?></td>
                        <td><?php echo $row['Addresse']; ?></td>
                        <td><?php echo $row['pasword']; ?></td>
                        
                        <td>
                            <!-- Boutons Modifier et Supprimer -->
                            <a href="MODIFIERCATEGORIE2.php?id=<?php echo $row['num_parent']; ?>" class="btn-modifier">
                                <span class="material-icons">edit</span>
                            </a>
                            <a href="SUPRIMERCATEGORIE.php?id=<?php echo $row['num_parent']; ?>" class="btn-supprimer" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?');">
                                <span class="material-icons">delete</span>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    
    <!-- Script JS pour confirmer la suppression -->
    <script>
        function confirmDelete() {
            return confirm('Êtes-vous sûr de vouloir supprimer cette parent ?');
        }
    </script>
    <h2 style="text-align:center; color: #4CAF50;">Ajouter  parent</h2>
    <form action="pére.php" method="POST" style="width: 50%; margin: 20px auto; display: flex; flex-direction: column;">
        <input type="number" name="num_parent" placeholder="num_parent" required style="margin: 10px 0; padding: 10px;">
        <input type="text" name="Nom_parent" placeholder="Nom_parent" style="margin: 10px 0; padding: 10px;">
        <input type="text" name="Prenom_parent" placeholder="Prenom_parent" required style="margin: 10px 0; padding: 10px;">
        <input type="text" name="Addrese" placeholder="Addresse" required style="margin: 10px 0; padding: 10px;">
        <input type="text" name="email" placeholder="email" required style="margin: 10px 0; padding: 10px;">
        <input type="text" name="pasword" placeholder="pasword" required style="margin: 10px 0; padding: 10px;">
        
        
        <button type="submit" style="background-color: #4CAF50; color: white; border: none; padding: 10px; cursor: pointer;">Ajouter</button>
    </form>
</body>
</html>

<?php
// Fermer la connexion à la base de données
mysqli_close($E);
?>
