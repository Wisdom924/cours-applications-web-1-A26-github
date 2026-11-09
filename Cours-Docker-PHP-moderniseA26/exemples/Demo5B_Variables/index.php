<?php
// DEMO 5B – Variables, types et comparaisons
// ÉTAPE 1 : déclarer $nom (chaîne), $age (entier), $poids (décimal).
$nom = 'Michel'; // String chaine
$age = 21;
$poids = 60.5;
// TODO : compléter les déclarations.
// ÉTAPE 2 : créer $titre.
$titre = "Variables et types";

// TODO : compléter.
// ÉTAPE 3 : comparer 9.5 avec "9.5" avec == puis ===.
// TODO : créer $egalValeur et $egalStrict.
$egalValeur = (9.5 == '9.5');
$egalStrict = (9.5 === '9.5');


?><!doctype html><html lang="fr"><head><meta charset="utf-8"><title>PHP – Cours 5</title><style>body{font:16px system-ui;max-width:850px;margin:35px auto;line-height:1.6}section{padding:12px;border-bottom:1px solid #ddd}code{background:#eee;padding:2px}</style></head><body>
    <h1>DEMO 5B – Variables</h1>
<!-- TODO : afficher le titre et le nom avec htmlspecialchars(..., ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') -->

    <h1><?= htmlspecialchars($titre, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></h1>
    <p>Bonjour je m'appelle <?= $nom ?>, j'ai <?= $age ?> ans, et je pese <?= $poids ?> kg.</p>
    
<!-- TODO : afficher les types avec var_dump() dans <pre> -->
    <pre><?php var_dump($nom, $age, $poids); ?></pre>
    <pre><?php echo gettype($nom) ?></pre>
    <pre><?php echo gettype($age) ?></pre>
    <pre><?php echo gettype($poids) ?></pre>
<!-- TODO : afficher les résultats booléens sous forme « vrai » ou « faux » -->
    <p>9.5 == "9.5" : <?= $egalValeur? 'vrai' : 'faux' ?></p>

    <p>9.5 === "9.5" : <?= $egalStrict? 'vrai' : 'faux' ?></p>

    <a href="/">Retour aux démonstrations</a>
</body></html>