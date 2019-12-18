<?php
$servername = "10.69.8.49";
$username = "bruno";
$password = "password";
$dbname = "stage";

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO stagiaire (nom, prenom) VALUES ('$nom','$prenom')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully with last name:$nom and name:$prenom";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
