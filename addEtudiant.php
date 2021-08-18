

<?php
// récupération des infos

$nom = $_GET['nom'];
$email = $_GET['email'];
$ville = $_GET['ville'];
//echo $nom." ".$email." ".$ville;

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
mysqli_select_db($conn,'isika2021');

// insertion d'un nouveau etudiant
$conn->query("insert into etudiant(nom,email,ville) values('".$nom."','".$email."','".$ville."')");  // query = requette

// afficher les données dans un tableau
/*
echo"<table align=center border=1>";
echo"<tr><th>ID</th><th>Nom</th><th>Email</th><th>Ville</th></tr>";

foreach ($etudiants as $etudiant) {
    
    echo"<tr><td>".$etudiant["id"]."</td><td>".$etudiant["nom"]."</td><td>".$etudiant["email"]."</td><td>".$etudiant["ville"]."</tr>";
}

echo"</table>";*/
?>