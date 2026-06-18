<?php
session_start();
include "db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (email, password)
            VALUES ('$email', '$password')";

    if ($conn->query($sql)) {
        $message = "Compte créé ✅";
    } else {
        $message = "Email déjà utilisé ❌";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>Inscription</title>
</head>

<body class="auth">

<div class="bg">
  <div class="blob blob1"></div>
  <div class="blob blob2"></div>
</div>

<div class="auth-box">
  <h2>Créer un compte</h2>

  <form method="POST">
    <input name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Mot de passe" required>

    <button class="btn primary">S'inscrire</button>
  </form>

  <p><?php echo $message; ?></p>

  login.phpDéjà un compte ? Se connecter</a>

</div>

</body>
</html>
