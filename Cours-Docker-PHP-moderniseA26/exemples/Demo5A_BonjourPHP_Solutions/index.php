<?php
// DÉMO 5A — SOLUTION : progression expliquée ci-dessous.
declare(strict_types=1);

// 1. echo affiche une valeur (exemple à montrer séparément en classe).
// echo 'Bonjour PHP';

// 2. Une variable conserve une valeur pour la réutiliser.
$titre = 'Bienvenue dans PHP 8.4';

// 3. echo $titre; et <?= $titre  affichent la même valeur.
// 4. Mais un texte dynamique peut contenir des balises HTML.
// 5. htmlspecialchars() les convertit en texte sûr pour le HTML.
// ENT_QUOTES : échappe aussi les apostrophes et guillemets.
// ENT_SUBSTITUTE : remplace les séquences invalides.
// UTF-8 : encodage des caractères.
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($titre, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></title>
</head>
<body>
  <h1><?= htmlspecialchars($titre, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></h1>
  <p>Cette page HTML a été générée par PHP sur le serveur.</p>
  <a href="/">Retour aux démonstrations</a>
</body>
</html>
