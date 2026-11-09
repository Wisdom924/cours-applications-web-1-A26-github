<?php
// Exercices5B — Exercice 5 : Mention finale
// CONSIGNE : note >=90 Excellent ; 70 à 89 Bien ; 50 à 69 Passable ; sinon Échec.
// TODO : écrire votre solution PHP ici.
$resultat = 'À compléter';
?><!doctype html><html lang="fr"><head><meta charset="utf-8"><title>PHP – Cours 5</title><style>body{font:16px system-ui;max-width:850px;margin:35px auto;line-height:1.6}section{padding:12px;border-bottom:1px solid #ddd}code{background:#eee;padding:2px}</style></head><body><h1>Exercices5B – Exercice 5 : Mention finale</h1><p>note >=90 Excellent ; 70 à 89 Bien ; 50 à 69 Passable ; sinon Échec.</p><section><strong>Résultat :</strong> <?= htmlspecialchars((string)$resultat, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8") ?></section></body></html>