<?php
// Exercices5B — Exercice 1 : Température
// CONSIGNE : < 0 : Très froid ; de 0 à 15 : Froid ; > 15 : Chaud.
// TODO : écrire votre solution PHP ici.

$temperature = 8;
$resultat;

if($temperature < 0){
    $resultat = "Très froid";
}else if($temperature >= 0 && $temperature <= 15){
    $resultat = "Froid";
}else if($temperature > 15){
    $resultat = "Chaud";
};


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
            <h1>Exercices5B – Exercice 1 : Température</h1>
            <p>< 0 : Très froid ; de 0 à 15 : Froid ; > 15 : Chaud.</p>
            <section><strong>Résultat :</strong> <?= htmlspecialchars((string)$resultat, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8") ?></section>


        </body>
        </html>