<?php
// Exercices5A — Exercice 3 : Types et valeurs
// CONSIGNE : Observer trois variables $x, $y, $z avec gettype() et var_dump().
// Observer l'affichage en utilisant gettype() et var_dump() .
// TODO : écrire votre solution PHP ici.
$resultat = 'À compléter';

$x = 10;
$y = 'Bonjour';
$z = 3.14;

echo "Type de x : " . gettype($x) ."<br>"; 
var_dump($x);

echo "Type de y : ". gettype($y) ."<br>";
var_dump($y);

echo "Type de z : ". gettype($z) ."<br>";
var_dump($z);

?><!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>PHP – Cours 5</title>
        <style>body{font:16px system-ui;max-width:850px;margin:35px auto;line-height:1.6}section{padding:12px;border-bottom:1px solid #ddd}code{background:#eee;padding:2px}</style>
    </head>
    <body>
        <h1>Exercices5A – Exercice 3 : Types et valeurs</h1>
        <p>
            Observer trois variables $x, $y, $z avec gettype() et var_dump(). 
            L’énoncé original ne fournit pas leurs affectations successives : utiliser des valeurs d’exemple.
        </p>
        <section><strong>Résultat :</strong> <?= htmlspecialchars((string)$resultat, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8") ?></section>
    </body></html>