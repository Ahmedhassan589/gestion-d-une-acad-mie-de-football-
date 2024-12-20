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
    <title></title>
</head>
<body>

    <div class="slidebar .short">
            <a href="../Accueil/animatedheade.php" class="slidebar-brand">
                    <span class="fas fa-user"></span>
                    Deconnexion
            </a>
            <div class="slidebar-menu">
            <body  background="C:\wamp64\www\siteweb\Administrateur\images/Im5.JPG">
                    <ul>
                            <li>
                                    <a href="#" class="active" id="Administrateur">
                                            <span class="fas fa-igloo"></span>
                                            <span>Administrateur</span>
                                    </a>
                            </li>
                            <li>
                                        <a href="Menu principale parent.html" id="parent">
                                                <span class="fas fa-person-shelter"></span>
                                                <span>Parents</span>
                                        </a>
                            </li>
                            <li>
                                        
                                        <a href="Menu principalejoueur.html" id="joueur">

                                                <span class=" fas fa-user"></span>
                                                <span>joueurs</span>
                                        </a>
                            </li>
                            <li>
                                        <a href="Menu principale Equipe.html" id="Equiper">
                                                <span class="fas fa-user-plus"></span>
                                                <span>Equipes</span>
                                        </a>
                          </li>
                          <li>
                                        <a href="Menu principaleEntraieur.html" id="Entraineur">
                                                <span class="fas fa-user"></span>
                                                <span>Entraineur</span>
                                        </a>
                         </li>
                         <li>
                                        <a href="Menu principaleFormateur.html" id="Formateur">
                                                <span class="fas fa-user"></span>
                                                <span>Formateur</span>
                                        </a>
                        </li>
                    <li>
                                <a href="SMS.html" id="SMS">
                                        <span class="fas fa-envelope"></span>
                                        <span>messages</span>
                                </a>
                    </li>

                    </ul>
            </div>
    </div>
    <div class="main-content">
            <header id="header">
                    <h2>
                            <label for="">
                                    <span class="fas fa-bars"></span>
                                    Administrateur
                            </label>
                    </h2>
                    <div class="search-wrapper">
                            <span class="fas fa-search"></span>
                            <input type="search" placeholder="Rechercher...">
                    </div>
                    <div class="user-wrapper">
                            <img src="images/23.jpg" width="30px" height="30px" alt="">
                            <div>
                                    <h4>
                                            ahmedhassan awaleh
                                    </h4>
                                    <small>Super admin</small>
                            </div>
                    </div>
            </header>
             <main>

                <div class="tables">
                    <div class="tableau">
                        <div class="addbtn">
                            <button id="ajouterParent">Ajouter</button>
                        </div>
                     
                        <table>
                                    <thead>
                                        <tr>
                                            <th>num_parent</th>
                                            <th>Nom_parent</th>
                                            <th>Prenom_parent</th>
                                            <th>adresse</th>
                                            <th>email</th>
                                            <th>pasword</th>
                                            <th colspan="2">operation</th>
                                        </tr>
                                    </thead>
                                    
                                            <tbody>
                                                                    <tr>
                                                                        <td data-label="S.No"><?php echo"$num_parent";?></td>
                                                                        <td data-label="Name"><?php echo"$Nom_parent";?></td>
                                                                        <td data-label="Age"><?php echo"$Prenom_parent";?></td>
                                                                        <td data-label="Marks%"><?php echo"$adresse";?></td>
                                                                        <td data-label="status"><?php echo"$email";?></td>
                                                                        <td data-label="status"><?php echo"$pasword";?></td>
                                                                        <td data-label="status"> <a href="modifier.php?idmodif=<?php echo"$num_parent";?>"> <span class="fas fa-pencil "></span></a>
                                                                        </td>
                                                                        <td data-label="status"><a href="suprimer.php?idsup=<?php echo"$num_parent";?>"><span class="fas fa-cancel"></span></a></td>
                                                                    </tr>
                                                                    </tbody>

                                        
                                        
                                            
                
                                            }
                                            ?>
                                                                                
                
                            </table>
   
                        

                    

                    <form action="ajouter.php" method="POST" id="ajouter" class="ajouter">
                                    <div class="form-element">
                                                    <button class="btn-close-inscrit">X</button>
                                    </div>
                                        <h2>Ajouter</h2>
                                        <div class="form-element">
                                            <label for="num">Identifiant</label>
                                            <input type="number" name="num" placeholder="identifiant" id="num">
                                        </div>
                                        <div class="form-element">
                                            <label for="Nom">Nom</label>
                                            <input type="text" name="nom" placeholder="Entrez  Nom" id="Nom">
                                        </div>
                                        <div class="form-element">
                                            <label for="Prenom">Prenom</label>
                                            <input type="text" name="prenom" placeholder="Entrez  Prenom" id="Prenom">
                                        </div>
                                        <div class="form-element">
                                            <label for=" Adresse">Adresse</label>
                                            <input type="text" name="adresse" placeholder="Entrez  Adresse" id=" Adresse">
                                        </div>
                                        <div class="form-element">
                                            <label for="email">email</label>
                                            <input type="email" name="email" placeholder="Entrez  email" id="email">
                                        </div>
                                       
                                        <div class="form-element">
                                            <label for="motpass">Pasword</label>
                                            <input type="pasword" name="pasword" placeholder="Entrez  mot de passe" id="motpass">
                                        </div>
                                        <div class="form-element">
                                               <input type="submit" name="connexion" value="connexion" class="button">
                                        </div>
                                        <!-- <div class="form-element">
                                            <a href="#" >sign in</a>
                                        </div> -->
                        </form>
            </div>

        </div>

        <div class="tables2">
            <div class="tableau1">
                <div class="addbtn">
                    <button id="ajouterJoueur">Ajouter</button>
                </div>
             
                <table>
                                    <thead>
                                        <tr>
                                            <th>Id.Jou</th>
                                            <th>Nom_jou</th>
                                            <th>Prenom_jou</th>
                                            <th>addr_jou</th>
                                            <th>Age_jou</th>
                                            <th>Date_Naissance</th>
                                            <th>Id_equipe</th>
                                            <th>num_Parent</th>
                                            <th colspan="2">operation</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $serveur="localhost";
                                    $utilisateur="root";
                                    $motdepasse="";
                                    $base="gestion_academie";
                                    $connect = mysqli_connect($serveur,$utilisateur,$motdepasse,$base);
                                    if (!$connect) {
                                        die("connexion échouée :". mysqli_connect_error() );
                                    }
                                    $Id_jou=$ligne[0];
                                    $Nom_jou=$ligne[1];
                                    $Prenom_jou=$ligne[2];
                                    $Addr_jou=$ligne[3];
                                    $Age_jou=$ligne[4];
                                    $Date_Naissance=$ligne[5];
                                    $Id_equipe=$ligne[6];
                                    $num_parent=$ligne[7];
                                    $requete="insert into joueur(Id_jou,Nom_lou,Prenom_jou,Addr_jou,Age_jou,Date_Naissance,Id_equipe,num_parent) 
                                                          values('$Id_jou','$Nom_jou','$prenom_jou','$Addr_jou','$Date_Naissance','$Id_equipe','$num_parent')";
                                    $resultat=mysqli_query($connect,$requete);
                                    if($resultat){
                                        header("location:interfaceAdministrateur.php");
                                        exit();
                                    }else{
                                        die("erreur lors de l'insertion : " .mysqli_error($connect));
                                    }
                                    mysqli__close($connect);
            

                                    ?>
                                            <tbody>
                                                                    <tr>
                                                                        <td data-label="S.No"><?php echo"$Id";?></td>
                                                                        <td data-label="Name"><?php echo"$nom";?></td>
                                                                        <td data-label="Age"><?php echo"$prenom";?></td>
                                                                        <td data-label="Marks%"><?php echo"$addr";?></td>
                                                                        <td data-label="status"><?php echo"$Age";?></td>
                                                                        <td data-label="status"><?php echo"$DateNaissance";?></td>
                                                                        <td data-label="status"><?php echo"$Id_equipe";?></td>
                                                                        <td data-label="status"><?php echo"$Responsable";?></td>
                                                                        <td data-label="status"> <a href="modifierjouer.php?idmodif=<?php echo"$Id";?>"> <span class="fas fa-pencil "></span></a>
                                                                        </td>
                                                                        <td data-label="status"><a href="suprimerjouer.php?idsup=<?php echo"$Id";?>"><span class="fas fa-cancel"></span></a></td>
                                                                    </tr>
                                                                    </tbody>

                                            <?php
                                        
                                            
                
                                        
                                            ?>
                                                                                
                
                            </table>

                

            

            <form action="ajouterjoueur.php" method="POST" id="ajouter" class="Ajouterjoueur">
                    <div class="form-element">
                                    <button class="btn-close-inscrit">X</button>
                    </div>
                        <h2>Ajouter</h2>
                        <div class="form-element">
                            <label for="Id">Id_jou</label>
                            <input type="number"  name="Id">
                        </div>
                        <div class="form-element">
                            <label for="Nom">Nom</label>
                            <input type="text"  id="Nom" name="lastname">
                        </div>
                        <div class="form-element">
                            <label for="Prenom">Prenom</label>
                            <input type="text"  id="Prenom" name="fistname">
                        </div>
                        <div class="form-element">
                            <label for=" Addr">Addr</label>
                            <input type="text"  id=" Addr" name="addr">
                        </div>
                        <div class="form-element">
                            <label for=" age">Age</label>
                            <input type="text" id=" age" name="age">
                        </div>
                        <div class="form-element">
                            <label for="Date_Naissance">Date_Naissance</label>
                            <input type="date"  id="Date_Naissance" name="DateNaissance">
                        </div>
                        <div class="form-element">
                            <label for="motpass">equipe</label>
                            <input type="number" id="motpass" name="equipe">
                        </div>
                        <div class="form-element">
                            <label for="parent">parent</label>
                            <input type="number" id="parent" name="parent">
                        </div>
                        <div class="form-element">
                           <input type="submit" name="Executer" value="Executer" class="button">
                        </div>  
                        <!-- <div class="form-element">
                            <a href="#" >sign in</a>
                        </div> -->
        </form>

    </div>

</div>

<div class="tables3">
                    <div class="tableau2">
                        <div class="addbtn">
                            <button id="ajouterEquipe">Ajouter</button>
                        </div>
                     
                        <table>
                                    <thead>
                                        <tr>
                                            <th>Id_equipe</th>
                                            <th>Nom_equipe</th>
                                            <th>Logo</th>
                                            <th colspan="2">operation</th>
                                        </tr>
                                    </thead>
                                    <?php
                                     $serveur="localhost";
                                     $utilisateur="root";
                                     $motdepasse="";
                                     $base="gestion_academie";
                                     $connect = mysqli_connect($serveur,$utilisateur,$motdepasse,$base);
                                     if (!$connect) {
                                         die("connexion échouée :". mysqli_connect_error() );
                                     }
                                    
                                        $Id_equipe=$ligne[0];
                                        $Nom_equipe=$ligne[1];
                                        $Logo=$ligne[2];
                                        $requete="insert into equipe(Id_equipe,Nom_equipe,Logo) 
                                                          values('$Id_equipe','$Nom_equipe','$Logo')";
                                    $resultat=mysqli_query($connect,$requete);
                                    if($resultat){
                                        header("location:interfaceAdministrateur.php");
                                        exit();
                                    }else{
                                        die("erreur lors de l'insertion : " .mysqli_error($connect));
                                    }
                                    mysqli__close($connect);
            
                                            ?>
                                            <tbody>
                                                                    <tr>
                                                                        <td data-label="S.No"><?php echo"$Id_equipe";?></td>
                                                                        <td data-label="Name"><?php echo"$Nom_equipe";?></td>
                                                                        <td data-label="Age"><?php echo"$Logo";?></td>
                                                                        <td data-label="status"> <a href="modifierEquipe.php?idmodif=<?php echo"$Id";?>"> <span class="fas fa-pencil "></span></a>
                                                                        </td>
                                                                        <td data-label="status"><a href="suprimerEquipe.php?idsup=<?php echo"$Id";?>"><span class="fas fa-cancel"></span></a></td>
                                                                    </tr>
                                                                    </tbody>

                                            <?php
                                               
                                            
                
                                            
                                            ?>
                                                                                
                
                            </table>
   
                        

                    

                    <form action="jouterEquiper.php" method="POST" id="ajouter" class="Ajouterequipes">
                            <div class="form-element">
                                            <button class="btn-close-inscrit">X</button>
                            </div>
                                <h2>Ajouter</h2>
                                <div class="form-element">
                                    <label for="num">Id_equipe</label>
                                    <input type="number" name="Id_equipe" placeholder="identifiant" id="num">
                                </div>
                                <div class="form-element">
                                    <label for="Nom">Nom</label>
                                    <input type="text" name="name" placeholder="Nom equiper" id="Nom">
                                </div>
                                <div class="form-element">
                                    <label for="Prenom">Logo</label>
                                    <input type="text" name="logo" placeholder="logo" id="Prenom">
                                </div>
                                <div class="form-element">
                                   <input type="submit" name="Executer" value="Executer" class="button">
                               </div>  
                                <!-- <div class="form-element">
                                    <a href="#" >sign in</a>
                                </div> -->
                </form>

            </div>

        </div>

        <div class="tables4">
            <div class="tableau3">
                <div class="addbtn">
                    <button id="ajouterEntraineur">Ajouter</button>
                </div>
             
                <table>
                                    <thead>
                                        <tr>
                                            <th>Id_En</th>
                                            <th>Nom Enr</th>
                                            <th>prenom_En</th>
                                            <th>Addr_En</th>
                                            <th>Salaire_En</th>
                                            <th>Id-jou</th>
                                            <th>Id_equipe</th>
                                            <th colspan="2">operation</th>
                                        </tr>
                                    </thead>
                                    <?php
                                     $serveur="localhost";
                                     $utilisateur="root";
                                     $motdepasse="";
                                     $base="gestion_academie";
                                     $connect = mysqli_connect($serveur,$utilisateur,$motdepasse,$base);
                                     if (!$connect) {
                                         die("connexion échouée :". mysqli_connect_error() );
                                     }
                                       $Id_En=$ligne[0];
                                       $Nom_En=$ligne[1];
                                       $prenom_En=$ligne[2];
                                       $Addr_En=$ligne[3];
                                       $Salaire_En=$ligne[4];
                                       $Id_jou=$ligne[5];
                                       $Id_equipe=$ligne[6];
                                       $requete="insert into entraineur(Id_En,Nom_En,Prenom_En,Addr_En,Salaire_En,Id_jou,Id_equipe,) 
                                                             values('$Id_En','$Nom_En','$Prenom_En','$Addr_En','$Salaire_En','$Id_jou','$Id_equipe')";
                                       $resultat=mysqli_query($connect,$requete);
                                       if($resultat){
                                          header("location:interfaceAdministrateur.php");
                                        exit();
                                     }else{
                                         die("erreur lors de l'insertion : " .mysqli_error($connect));
                                    }
                                    mysqli__close($connect); 
            
                                    ?>
                                            <tbody>
                                                                    <tr>
                                                                        <td data-label="S.No"><?php echo"$Id_En";?></td>
                                                                        <td data-label="Name"><?php echo"$Nom_En";?></td>
                                                                        <td data-label="Age"><?php echo"$Prenom_En";?></td>
                                                                        <td data-label="Age"><?php echo"$addr_En";?></td>
                                                                        <td data-label="Age"><?php echo"$Salaire_En";?></td>
                                                                        <td data-label="S.No"><?php echo"$Id_jou";?></td>
                                                                        <td data-label="S.No"><?php echo"$Id_equipe";?></td>
                                                                        <td data-label="status"> <a href="modifierEntraineur.php?idmodif=<?php echo"$id_En";?>"> <span class="fas fa-pencil "></span></a>
                                                                        </td>
                                                                        <td data-label="status"><a href="suprimerEntraineur.php?idsup=<?php echo"$Id_En";?>"><span class="fas fa-cancel"></span></a></td>
                                                                    </tr>
                                                                    </tbody>

                                            <?php
                                               
                                            
                
                                            
                                            ?>
                                                                                
                
                            </table>

                

            

            <form action="AjouterEntraineur.php" method="POST" id="ajouter" class="AjouterEntraineur">
                    <div class="form-element">
                                    <button class="btn-close-inscrit">X</button>
                    </div>
                        <h2>Ajouter</h2>
                        <div class="form-element">
                            <label for="Id_En">Identifiant</label>
                            <input type="number"   id="Id_En"  name="Id_En">
                        </div>
                        <div class="form-element">
                            <label for="Nom">Nom</label>
                            <input type="text" id="Nom" name="lastname">
                        </div>
                        <div class="form-element">
                            <label for="Prenom">Prenom</label>
                            <input type="text" id="Prenom" name="fistname">
                        </div>
                        <div class="form-element">
                            <label for=" Addr">Addr</label>
                            <input type="text"  id=" Addr" name="addr">
                        </div>
                        <div class="form-element">
                            <label for=" Adresse">Salaire</label>
                            <input type="text" id=" Addr" name="salaire">
                        </div>
                        <div class="form-element">
                           <input type="submit" name="connexion" value="connexion" class="button">
                        </div>  
        </form>

    </div>

</div>

<div class="tables5">
    <div class="tableau4">
        <div class="addbtn">
            <button id="ajouterFormateur">Ajouter</button>
        </div>
     
        <table>
                                    <thead>
                                        <tr>
                                            <th>Id_For</th>
                                            <th>Non_For</th>
                                            <th>Prenom_For</th>
                                            <th>Addr_For</th>
                                            <th>Id_equipe</th>
                                            <th colspan="2">operation</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $serveur="localhost";
                                    $utilisateur="root";
                                    $motdepasse="";
                                    $base="gestion_academie";
                                    $connect = mysqli_connect($serveur,$utilisateur,$motdepasse,$base);
                                    if (!$connect) {
                                        die("connexion échouée :". mysqli_connect_error() );
                                    }
                                     $Id_For=$ligne[0];
                                     $Nom_For=$ligne[1];
                                     $Prenom_For=$ligne[2];
                                     $addr_For=$ligne[3];
                                     $Id_equipe=$ligne[4];
                                     $requete="insert into formateur(Id_For,Nom_For,Prenom_For,Addr_For,Id_equipe,) 
                                                             values('$Id_For','$Nom_For','$Prenom_For','$Addr_For','$Id_equipe')";
                                       $resultat=mysqli_query($connect,$requete);
                                       if($resultat){
                                          header("location:interfaceAdministrateur.php");
                                        exit();
                                     }else{
                                         die("erreur lors de l'insertion : " .mysqli_error($connect));
                                    }
                                    mysqli__close($connect); 
            
                                    ?>
                                            <tbody>
                                                                    <tr>
                                                                        <td data-label="S.No"><?php echo"$Id_For";?></td>
                                                                        <td data-label="Name"><?php echo"$Nom_For";?></td>
                                                                        <td data-label="Age"><?php echo"$prenom_For";?></td>
                                                                        <td data-label="Age"><?php echo"$addr_For";?></td>
                                                                        <td data-label="Age"><?php echo"$Id_equipe";?></td>
                                                                        <td data-label="status"> <a href="modifierFormateur.php?idmodif=<?php echo"$Id_For";?>"> <span class="fas fa-pencil "></span></a>
                                                                        </td>
                                                                        <td data-label="status"><a href="suprimerFormateur.php?idsup=<?php echo"$Id_For";?>"><span class="fas fa-cancel"></span></a></td>
                                                                    </tr>
                                                                    </tbody>

                                            <?php
                                               
                                            
                
                                            
                                            ?>
                                                                                
                
                            </table>

        

    

    <form action="AjouterFormateur.php" method="POST" id="ajouter" class="AjouterFormateur">
            <div class="form-element">
                            <button class="btn-close-inscrit">X</button>
            </div>
                <h2>Ajouter</h2>
                <div class="form-element">
                            <label for="Id">Identifiant</label>
                            <input type="number"   id="Id"  name="Id">
                        </div>
                        <div class="form-element">
                            <label for="Nom">Nom</label>
                            <input type="text" id="Nom" name="lastname">
                        </div>
                        <div class="form-element">
                            <label for="Prenom">Prenom</label>
                            <input type="text" id="Prenom" name="fistname">
                        </div>
                        <div class="form-element">
                            <label for=" Adresse">Addr</label>
                            <input type="text"  id=" Adresse" name="addr">
                        </div>
                        <div class="form-element">
                            <label for=" Adresse">Equipe</label>
                            <input type="text" id=" Adresse" name="equipe">
                        </div>
                        <div class="form-element">
                           <input type="submit" name="connexion" value="connexion" class="button">
                        </div>  
</form>

</div>

</div>

<div class="tables6">
    <div class="tableau5">
<?php
    if (isset($_POST["send"])) {
            
            $texte=$_POST["text"];
            $req="insert into  information(info) values('$texte')";
            $resultat=mysqli_query($sum,$req);
            if ($resultat) {
                // header("Location:interfaceAdministrateur.php");
            }else{
                die(mysqli_error($sum));
             }
     }
        ?>
        
             <p class="error">
               Veuiller remplir le champ.
             </p>
             <form method="POST" >
                 <!-- <label for="photo">Ajouter une photo</label>
                 <input type="file" name="image" id="photo"> -->
                 <label for="text">Description</label>
                 <textarea name="text" id="text" cols="30" rows="10"></textarea>
                 <input type="submit" value="Ajouter" name="send">
             </form>
        
     

</div>

</div>
      
      
              
                      
              
                      

    </main>
                            
            
                   
    </div>
    

    <script src="script.js"></script>
</body>
</html>