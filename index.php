Connexion

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biodelya</title>

  <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- BACKGROUND HALO -->
<div class="bg">
  <div class="blob blob1"></div>
  <div class="blob blob2"></div>
</div>

<!-- HEADER -->
<header class="header">
  <div class="logo">Biodelya</div>
  <?php if(isset($_SESSION["user"])): ?>
    <p>Connecté en tant que <?php echo htmlspecialchars($_SESSION["user"]); ?></p>
  <?php endif; ?>

  <nav>
    <a href="#">Produit</a>
    <a href="#">Approche</a>
    <a href="#">Applications</a>

    <!-- MENU DYNAMIQUE -->
    <?php if(isset($_SESSION["user"])): ?>
      <a href="dashboard.php">Dashboard</a>
      <a href="logout.php">Déconnexion</a>
    <?php else: ?>
      <a href="login.php">Connexion</a>
      <a href="register.php">Créer compte</a>
    <?php endif; ?>
  </nav>
</header>

<!-- HERO -->
<section class="hero">
  <h1>Comprenez. Analysez. Décidez.</h1>
  <p>Transformez la complexité en décisions claires.</p>

  <div class="cta">
    <button class="btn primary" onclick="window.location='register.php'">
      Essayer
    </button>
    <button class="btn secondary">
      Démo
    </button>
  </div>
</section>

<!-- FEATURES -->
<section class="section grid">
  <div class="card">Analyse avancée</div>
  <div class="card">Décisions éclairées</div>
  <div class="card">Résultats concrets</div>
</section>


<div class="auth-container">

  <div class="auth-box">
    <h2>Connexion</h2>

    <form method="POST">
      <input name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Mot de passe" required>

      <button class="btn primary">Se connecter</button>
    </form>

    <p><?php echo htmlspecialchars($message); ?></p>

    <p class="link">
      <a href="register.php">Créer un compte</a>
    </p>
  </div>

</div>


<!-- JS -->
<script>

// Animation apparition
const cards = document.querySelectorAll('.card');

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.style.opacity = 1;
      entry.target.style.transform = "translateY(0)";
    }
  });
});

cards.forEach(card => {
  card.style.opacity = 0;
  card.style.transform = "translateY(40px)";
  observer.observe(card);
});

// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    document.querySelector(this.getAttribute('href'))
      ?.scrollIntoView({ behavior: 'smooth' });
  });
});

</script>

</body>
</html>
