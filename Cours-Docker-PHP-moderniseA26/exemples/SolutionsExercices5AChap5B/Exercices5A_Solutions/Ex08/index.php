<?php
// Exercices5A — Corrigé 8 : Suite pair-impair-impair
$coups = 0;
do {
 $a = random_int(1, 100); $b = random_int(1, 100); $c = random_int(1, 100); $coups += 3;
} while (!($a % 2 === 0 && $b % 2 !== 0 && $c % 2 !== 0));
$resultat = "Séquence : $a, $b, $c ; $coups nombres tirés (par groupes de trois).";
?><!doctype html><html lang="fr"><head><meta charset="utf-8"><title>PHP – Cours 5</title><style>body{font:16px system-ui;max-width:850px;margin:35px auto;line-height:1.6}section{padding:12px;border-bottom:1px solid #ddd}code{background:#eee;padding:2px}</style></head><body><h1>Exercices5A – Exercice 8 : Suite pair-impair-impair</h1><p>Effectuer des tirages jusqu’à obtenir trois nombres consécutifs pair, impair, impair avec do...while.</p><section><strong>Résultat :</strong> <?= htmlspecialchars((string)$resultat, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8") ?></section></body></html>