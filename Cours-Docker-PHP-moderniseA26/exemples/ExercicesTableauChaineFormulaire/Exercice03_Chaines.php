<?php
declare(strict_types=1);

$texte = '  HTML:CSS:PHP  ';
// TODO : écrire votre solution ici.
// Chaîne de départ
$chaine = " HTML, CSS, PHP, MySQL ";

// 1. Retirer les espaces au début et à la fin
$chaine = trim($chaine);

// 2. Découper la chaîne avec explode()
$technologies = explode(", ", $chaine);

// 3. Afficher chaque technologie avec foreach
echo "<h2>Liste des technologies :</h2>";

foreach ($technologies as $technologie) {
    echo $technologie . "<br>";
}

// 4. Remplacer CSS par JavaScript
$chaineModifiee = str_replace("CSS", "JavaScript", $chaine);

echo "<h2>Chaîne modifiée :</h2>";
echo htmlspecialchars($chaineModifiee);

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercice 3 — Analyse d’une chaîne</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <main class="container py-4">
        <h1>Exercice 3 — Analyse d’une chaîne</h1>
        <p>Retirer les espaces, découper la chaîne avec <code>explode()</code>, afficher chaque technologie avec <code>foreach</code>, puis remplacer « CSS » par « JavaScript ».</p>
    </main>
</body>
</html>
