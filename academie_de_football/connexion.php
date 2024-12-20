<?php
// db_connect.php
$serveur="localhost";
$utilisateur="root";
$motdepasse="";
$base="gestion_academie";
$conn=new mysqli($serveur,$utilisateur,$motdepasse,$base);
if ($conn->connect_error) {
	die("la connexion a échoué :".$conn->connect_error);
}
?>
<?php
// index.php
include 'db_connect.php';
$sql = "select * from joueur";
$resultat = $conn->query($sql);
if($resultat->num_rows >0){
while($row = $result ->fetch_assoc()){
     echo"ID: " . $row["id"]. " - joueur: " . $row["joueur". "<br>";
 }
}else{
     echo "0 resultat";
}
$conn->close();
?>