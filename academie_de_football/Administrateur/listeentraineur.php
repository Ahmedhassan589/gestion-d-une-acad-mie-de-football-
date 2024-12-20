<?php
$SERVER="localhost";
$utilisateur="root";
$motDepasse="";
$base="gestion_academie";
$E=mysqli_connect($SERVER,$utilisateur,$motDepasse,$base);



$q=("SELECT Id_En,Nom_En,Prenom_En,Addr_En,Salaire_En,Id_jou,Id_equipe FROM entraineur ");
$res=mysqli_query($E,$q);

// Styles CSS pour le tableau
echo "
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
        color: #343a40;
        margin: 0;
        padding: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        text-align: center;
    }
    table {
        width: 90%;
        border-collapse: collapse;
        background-color: brown;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    th, td {
        padding: 15px;
        border: 1px solid #dee2e6;
        text-align: left;
    }
    th {
        background-color: #007bff;
        color: blue;
        font-weight: bold;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #e9ecef;
    }
    tr {
        transition: background-color 0.3s;
    }
    @media (max-width: 600px) {
        table {
            width: 100%;
        }
        th, td {
            padding: 10px;
        }
    }
</style>
";
echo"<br><br><br><center><br><br><br>";
echo"<table border='1'>";
echo"<tr><td>Id_En</td> <td>Nom_En</td> <td>prenom_En</td> <td>Addr_En</td> <td>Salaire_En</td><td>Id_jou</td><td>Id_equipe</td>\n";
 while($row=mysqli_fetch_assoc($res)){
    echo"<tr><td>{$row['Id_En']}</td> <td>{$row['Nom_En']}</td> <td>{$row['Prenom_En']}</td> <td>{$row['Addr_En']}</td> <td>{$row['Salaire_En']}</td> <td>{$row['Id_jou']}</td> <td>{$row['Id_equipe']}</td>\n<br>";
 }
 echo"</center>";
 echo"</table>";

 
 ?>
