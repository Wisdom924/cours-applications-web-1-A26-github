<?php
// Exercices5A — Corrigé 7 : Tirages while et for
$cible = 357; $coupsWhile = 0;
do { $tirage = random_int(100, 999); $coupsWhile++; } while ($tirage !== $cible);
for ($coupsFor = 1; ; $coupsFor++) { if (random_int(100, 999) === $cible) break; }
$resultat = "Cible $cible — while : $coupsWhile coups ; for : $coupsFor coups (résultats variables).";
?><!doctype html><html lang="fr"><head><meta charset="utf-8"><title>PHP – Cours 5</title><style>body{font:16px system-ui;max-width:850px;margin:35px auto;line-height:1.6}section{padding:12px;border-bottom:1px solid #ddd}code{background:#eee;padding:2px}</style></head><body><h1>Exercices5A – Exercice 7 : Tirages while et for</h1><p>Choisir un nombre à trois chiffres; compter les tirages pour le retrouver avec while puis for.</p><section><strong>Résultat :</strong> <?= htmlspecialchars((string)$resultat, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8") ?></section></body></html>