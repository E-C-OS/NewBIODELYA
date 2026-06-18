<?php
session_start();
include "db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user["password"])) {
            $_SESSION["user"] = $user["email"];
            header("Location: dashboard.php");
            exit;
        } else {
            $message = "Mot de passe incorrect ❌";
        }
    } else {
        $message = "Compte introuvable ❌";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>Connexion</title>
</head>

<body class="auth">

<div class="bg">
  <div class="blob blob1"></div>
  <div class="blob blob2"></div>
</div>

<div class="auth-box">
  <h2>Connexion</h2>

  <form method="POST">
    <input name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Mot de passe" required>

    <button class="btn primary">Se connecter</button>
  </form>

  <p><?php echo $message; ?></p>

  register.phpCréer un compte</a>
</div>

</body>
</html>
