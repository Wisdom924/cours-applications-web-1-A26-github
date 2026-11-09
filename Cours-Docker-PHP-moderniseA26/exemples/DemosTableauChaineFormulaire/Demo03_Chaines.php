<?php

declare(strict_types=1);

$texteOriginal = '  PARIS : capitale de la France  ';
// TODO : appliquer trim(), strtolower(), strlen(), strpos(),
// substr(), str_replace() et explode() dans cet ordre.
$texteOriginalNettoye = trim($texteOriginal);
$texteMiniscule = strtolower($texteOriginal);
$longeur = strlen($texteOriginal);
$longeurnettoye = strlen($texteOriginalNettoye);
// 
$position = strpos($texteOriginal, 'capitale');
// str_replace("ViewMot","NouveauMot", "TextOrigine")
$remplace = str_replace('France', 'Portugal', $texteOriginal);
// substr extrait une partie d chaine : debut à 0, longueur de 5
$extrait = substr($texteOriginalNettoye,0, 5);
// explode découpe une chaine en tableau à partir d'un separateur
$morceaux = explode(':', $texteOriginalNettoye);

?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Démo 3 — Chaînes : à compléter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <main class="container py-4">
        <h1>Démo 3 — Chaînes : à compléter</h1>
        <p>Complétez les fonctions étudiées au chapitre 5B.</p>
        <ol>
            <li>Nettoyer les espaces, convertir en minuscules.</li>
            <li>Calculer la longueur et rechercher « capitale ».</li>
            <li>Extraire « PARIS », remplacer « France », découper sur « : ».</li>
        </ol>
        <ol>
            <li>No Nettoyé : <?= htmlspecialchars($texteOriginal, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></li>
            <li>Nettoyé : <?= htmlspecialchars($texteOriginalNettoye, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></li>

            <li>Miniscule : <?= htmlspecialchars($texteMiniscule, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></li>

            <li>longeur du texte original : <?= $longeur ?></li>
            <li>longeur du texte nettoye : <?= $longeurnettoye ?></li>
            <li>Position de "capitale" : <?= $position === false? 'absence' : $position?></li>

            <li>Remplace : <?= htmlspecialchars($remplace, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></li>
            <li>extrait : <?= htmlspecialchars($extrait, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></li>
            <li>Partie séparée : <?php foreach($morceaux as $morceau) :  ?>
                <span class="badge text-bg-secondary me-1"> <?= htmlspecialchars($morceau, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></span>
                <?php endforeach;  ?>
            </li>
        </ol>
    </main>
</body>

</html>