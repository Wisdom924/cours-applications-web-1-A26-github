<?php
// MINISHOP 5A — SOLUTION : seulement les notions du chapitre 5A.
declare(strict_types=1);
$nom = 'MiniShop';
$slogan = 'Un catalogue simple, moderne et évolutif';
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($nom, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?> — Accueil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-dark bg-dark"><div class="container">
    <a class="navbar-brand" href="/MiniShop_5A/"><?= htmlspecialchars($nom, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></a>
  </div></nav>
  <main class="container py-5">
    <h1>Bienvenue chez <?= htmlspecialchars($nom, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></h1>
    <p class="lead"><?= htmlspecialchars($slogan, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></p>
    <div class="row g-3">
      <div class="col-md-6"><div class="card h-100"><div class="card-body">
        <h2 class="h5">Produits</h2><p>Catalogue à développer au chapitre 5B.</p>
      </div></div></div>
      <div class="col-md-6"><div class="card h-100"><div class="card-body">
        <h2 class="h5">Catégories</h2><p>Classement à développer progressivement.</p>
      </div></div></div>
    </div>
  </main>
  <footer class="container pb-4"><a href="/">Retour aux démonstrations</a></footer>
</body>
</html>
