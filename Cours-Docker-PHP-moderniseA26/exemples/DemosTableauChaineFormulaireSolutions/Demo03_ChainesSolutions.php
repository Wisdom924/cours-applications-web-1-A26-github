<?php
declare(strict_types=1);

$texteOriginal = '  PARIS : capitale de la France  ';
// trim() retire les espaces au début et à la fin, pas ceux au milieu.
$texteNettoye = trim($texteOriginal);
// strtolower() transforme les lettres ASCII en minuscules.
$texteMinuscule = strtolower($texteNettoye);
// strlen() compte les octets (pour cet exemple ASCII, un octet = un caractère).
$longueur = strlen($texteNettoye);
// strpos() cherche une sous-chaîne et retourne sa position ou false.
$position = strpos($texteNettoye, 'capitale');
// IMPORTANT : utiliser !== false, car la position 0 est valide.
$remplace = str_replace('France', 'Portugal', $texteNettoye);
// substr() extrait une partie de chaîne : début à 0, longueur de 5.
$extrait = substr($texteNettoye, 0, 5);
// explode() découpe une chaîne en tableau à partir d'un séparateur.
$morceaux = explode(':', $texteNettoye);
// htmlspecialchars() protège l'affichage de texte dans le HTML.
// ENT_QUOTES échappe les guillemets simples et doubles ; ENT_SUBSTITUTE
// remplace les séquences UTF-8 invalides plutôt que de faire échouer l'affichage.

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Démo 3 — Chaînes : solution</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <main class="container py-4">
        <h1>Démo 3 — Chaînes : solution</h1>
        <p>Texte de départ : <code>  PARIS : capitale de la France  </code></p>
        <ul>
            <li>Nettoyé : <?= htmlspecialchars($texteNettoye, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></li>
            <li>Minuscules : <?= htmlspecialchars($texteMinuscule, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></li>
            <li>Longueur : <?= $longueur ?></li>
            <li>Position de « capitale » : <?= $position === false ? 'absente' : $position ?></li>
            <li>Extrait : <?= htmlspecialchars($extrait, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></li>
            <li>Remplacement : <?= htmlspecialchars($remplace, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></li>
            <li>Parties séparées : <?php foreach ($morceaux as $morceau): ?>
                <span class="badge text-bg-secondary me-1">
                    <?= htmlspecialchars(trim($morceau), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>
                </span>
                <?php endforeach; ?></li>
        </ul>
    </main>
</body>
</html>
