<?php
// Connexion à la base de données
$SERVER = "localhost";
$utilisateur = "root";
$motDepasse = "";
$base = "gestion_academie";
$E = mysqli_connect($SERVER, $utilisateur, $motDepasse, $base);

$q = "SELECT num_parent, Nom_parent, prenom_parent, adresse, email, pasword FROM parent";
$res = mysqli_query($E, $q);

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
        background-color: #fff;
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
        color: white;
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

echo "<table>";
echo "<tr><th>Num_parent</th><th>Nom_parent</th><th>Prenom_parent</th><th>Adresse</th><th>Email</th><th>Mot de passe</th></tr>";

while ($row = mysqli_fetch_assoc($res)) {
    echo "<tr>
            <td>{$row['num_parent']}</td>
            <td>{$row['Nom_parent']}</td>
            <td>{$row['prenom_parent']}</td>
            <td>{$row['adresse']}</td>
            <td>{$row['email']}</td>
            <td>{$row['pasword']}</td>
          </tr>";
}

echo "</table>";
?>

