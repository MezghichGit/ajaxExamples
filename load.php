

<?php

// connexion via php à mysql
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// selection de la base de données
mysqli_select_db($conn,'stock2');

// récupération des produits
$produits = $conn->query("SELECT * FROM produit");  // query = requette

// afficher les données dans un tableau

echo"<table align=center border=1>";
echo"<tr><th>ID</th><th>Libelle</th><th>Prix</th><th>Quantite</th></tr>";

foreach ($produits as $produit) {
    
    echo"<tr><td>".$produit["id"]."</td><td>".$produit["libelle"]."</td><td>".$produit["prix"]."</td><td>".$produit["qte"]."</tr>";
}

echo"</table>";
?>