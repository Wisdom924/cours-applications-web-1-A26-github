<?php
// DÉMO 5A — DÉPART : compléter les étapes dans l'ordre.
declare(strict_types=1);

// Étape 1 : afficher « Bonjour PHP » avec echo.
// echo 'Bonjour PHP';
echo 'Bienvenue au cours Application Web 1';


echo '<br/>';

// Étape 2 : créer une variable $titre contenant « Bienvenue dans PHP 8.4 ».
// $titre = ...;

$titre = 'Bienvenue dans PHP 8.4';

// Étape 3 : utiliser echo pour afficher la variable.

echo $titre;

echo '<br/>';



// Étape 4 : utiliser  dans le HTML pour afficher le titre.
// Étape 5 : sécuriser cet affichage avec htmlspecialchars().
// Pour le test : essayer $titre = '<strong>Bonjour</strong>';
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Démo 5A — À compléter</title>
</head>
<body>
  <h1>À remplacer par le titre PHP</h1>
  <p>Cette page sera générée par PHP sur le serveur.</p>

  <h2><?= $titre ?></h2>

  <h3><?= htmlspecialchars($titre, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></h3>

  <a href="/">Retour aux démonstrations</a>
</body>
</html>
