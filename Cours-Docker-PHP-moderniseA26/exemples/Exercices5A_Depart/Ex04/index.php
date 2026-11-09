<?php
// Exercices5A — Exercice 4 : and et &&
// CONSIGNE : Comparer les deux if du document et la priorité de l’affectation avec and / &&.
// TODO : écrire votre solution PHP ici.
$resultat = 'À compléter';

$a = true;
$b = false;

// Exemple 1 : avec and
$resultat1 = $a and $b;

// Exemple 2 : avec &&
$resultat2 = $a && $b;

var_dump($resultat1);
var_dump($resultat2);

?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>PHP – Cours 5</title>
    <style>
        body {
            font: 16px system-ui;
            max-width: 850px;
            margin: 35px auto;
            line-height: 1.6
        }

        section {
            padding: 12px;
            border-bottom: 1px solid #ddd
        }

        code {
            background: #eee;
            padding: 2px
        }
    </style>
</head>

<body>
    <h1>Exercices5A – Exercice 4 : and et &&</h1>
    <p>Comparer les deux if du document et la priorité de l’affectation avec and / &&.</p>
    <section><strong>Résultat :</strong> <?= htmlspecialchars((string)$resultat, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8") ?></section>
</body>

</html>