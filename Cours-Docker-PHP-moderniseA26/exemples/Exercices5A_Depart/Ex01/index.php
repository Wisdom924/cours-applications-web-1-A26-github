<?php
// Exercices5A — Exercice 1 : Noms de variables
// CONSIGNE : Identifier les noms valides : mavar, $mavar, $var5, $_mavar, $_5var, $__élément1, $hotel4*.
// TODO : écrire votre solution PHP ici.
$resultat = 'À compléter';

$mavar = '';
$var5 = '';
$_mavar = '';
$_5var = '';
$__élément1 = '';


?><!doctype html><html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>PHP – Cours 5</title>
        <style>
            body{font:16px system-ui;max-width:850px;margin:35px auto;line-height:1.6}
            section{padding:12px;border-bottom:1px solid #ddd}
            code{background:#eee;padding:2px}
        </style>
    </head>
    <body>
        <h1>Exercices5A – Exercice 1 : Noms de variables</h1>
        <p>Identifier les noms valides : mavar, $mavar, $var5, $_mavar, $_5var, $__élément1, $hotel4*.</p>
        <section>
            <strong>Résultat :</strong> <?= htmlspecialchars((string)$resultat, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8") ?>
        </section>

        
    </body>
</html>