<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>Dashboard</title>
</head>

<body>

<div class="bg">
  <div class="blob blob1"></div>
  <div class="blob blob2"></div>
</div>

<header class="header">
  <div class="logo">Biodelya</div>

  <nav>
    logout.phpDéconnexion</a>
  </nav>
</header>

<section class="hero">
  <h1>Bienvenue <?php echo $_SESSION["user"]; ?></h1>
  <p>Vous êtes connecté</p>
</section>

</body>
</html>
