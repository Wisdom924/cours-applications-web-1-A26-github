<?php
// EXERCICE 5A — SOLUTION.
declare(strict_types=1);
$nomSite = 'Ma bibliothèque';
$slogan = 'Des livres pour tous <et toutes>';
$annee = (int) date('Y');
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($nomSite, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></title>
</head>
<body>
  <h1><?= htmlspecialchars($nomSite, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></h1>
  <p><?= htmlspecialchars($slogan, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></p>
  <footer>© <?= $annee ?></footer>
  <a href="/">Retour aux démonstrations</a>
</body>
</html>
