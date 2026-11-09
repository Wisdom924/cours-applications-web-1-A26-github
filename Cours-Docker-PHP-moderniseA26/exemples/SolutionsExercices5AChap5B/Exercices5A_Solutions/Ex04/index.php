<?php
// Exercices5A — Corrigé 4 : and et &&
$a = 100; $b = 50; $test1 = ($a == 100 and $b == 10);
$a = 100; $b = 10; $test2 = ($a == 100 && pow($b, 2) == $a);
$expr1 = true && false; $expr2 = true and false;
$resultat = 'if and : '.($test1?'Vrai':'Faux').'; if && : '.($test2?'Vrai':'Faux').'; affectation && : '.($expr1?'TRUE':'FALSE').'; affectation and : '.($expr2?'TRUE':'FALSE').'. Le dernier vaut TRUE car l’affectation est évaluée avant and.';
?><!doctype html><html lang="fr"><head><meta charset="utf-8"><title>PHP – Cours 5</title><style>body{font:16px system-ui;max-width:850px;margin:35px auto;line-height:1.6}section{padding:12px;border-bottom:1px solid #ddd}code{background:#eee;padding:2px}</style></head><body><h1>Exercices5A – Exercice 4 : and et &&</h1><p>Comparer les deux if du document et la priorité de l’affectation avec and / &&.</p><section><strong>Résultat :</strong> <?= htmlspecialchars((string)$resultat, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8") ?></section></body></html>