<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "biodelya";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erreur connexion DB : " . $conn->connect_error);
}
?>
