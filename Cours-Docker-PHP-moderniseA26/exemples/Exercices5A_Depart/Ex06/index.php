<?php
// Exercices5A — Exercice 6 : Moyenne pondérée et switch
// CONSIGNE : Notes n1...n4 et coefficients 10, 30, 20, 40. Mentions : [0,60[ Échec, [60,70[ Passable, [70,80[ Assez bien, [80,90[ Bien, [90,100] Très bien. Utiliser switch.
// TODO : écrire votre solution PHP ici.
$resultat = 'À compléter';
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
    <h1>Exercices5A – Exercice 6 : Moyenne pondérée et switch</h1>
    <p>Notes n1...n4 et coefficients 10, 30, 20, 40. Mentions : [0,60[ Échec, [60,70[ Passable, [70,80[ Assez bien, [80,90[ Bien, [90,100] Très bien. Utiliser switch.</p>
    <section><strong>Résultat :</strong> <?= htmlspecialchars((string)$resultat, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8") ?></section>
</body>

</html>