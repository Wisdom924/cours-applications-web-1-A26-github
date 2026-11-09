<?php
// Exercices5A — Corrigé 6 : Moyenne pondérée et switch
$notes = [80, 85, 75, 83.5]; $coeffs = [10, 30, 20, 40];
$moyenne = array_sum(array_map(fn($n,$c)=>$n*$c,$notes,$coeffs)) / array_sum($coeffs);
// Les intervalles sont sur 100. switch(true) conserve les seuils exacts.
switch (true) {
 case $moyenne < 0 || $moyenne > 100: $mention = 'Note invalide'; break;
 case $moyenne < 60: $mention = 'Échec'; break;
 case $moyenne < 70: $mention = 'Mention Passable'; break;
 case $moyenne < 80: $mention = 'Mention Assez bien'; break;
 case $moyenne < 90: $mention = 'Mention Bien'; break;
 default: $mention = 'Mention Très bien';
}
$resultat = 'Moyenne : '.number_format($moyenne, 2, ',', ' ').' / 100 — '.$mention;
?><!doctype html><html lang="fr"><head><meta charset="utf-8"><title>PHP – Cours 5</title><style>body{font:16px system-ui;max-width:850px;margin:35px auto;line-height:1.6}section{padding:12px;border-bottom:1px solid #ddd}code{background:#eee;padding:2px}</style></head><body><h1>Exercices5A – Exercice 6 : Moyenne pondérée et switch</h1><p>Notes n1...n4 et coefficients 10, 30, 20, 40. Mentions : [0,60[ Échec, [60,70[ Passable, [70,80[ Assez bien, [80,90[ Bien, [90,100] Très bien. Utiliser switch.</p><section><strong>Résultat :</strong> <?= htmlspecialchars((string)$resultat, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8") ?></section></body></html>