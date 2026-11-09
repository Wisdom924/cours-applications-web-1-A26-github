<?php
// EXERCICE 5A — DÉPART : travail autonome.
declare(strict_types=1);

$nomSite = 'Ma bibliothèque';
echo $nomSite;

echo '<br/>';

// TODO : définir $slogan et $annee.

$slogan = "Le choix de la confiance";
echo $slogan;
echo '<br/>';

$annee = "2026";
echo $annee;
echo '<br/>';

?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $nomSite ?></title>
</head>
<body>
  <!-- TODO : afficher le nom du site dans h1, le slogan dans p,
       et l'année dans un footer. Échapper les textes dynamiques. -->

       <h1><?= $nomSite ?></h1>

       <strong><?= $slogan ?></strong>
       <p><?= htmlspecialchars($slogan, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></p>
       

       

  <a href="/">Retour aux démonstrations</a>
</body>
<footer>
  <?=$annee ?>
</footer>
</html>
