<?php
declare(strict_types=1);

$notes = ['Al' => 68, 'Bob' => 70, 'Carla' => 76, 'Dan' => 78];
// TODO : écrire votre solution ici.

$somme = 0;
$reussites = 0;

foreach ($notes as $note) {
    echo "Note : " . $note . "<br>";

    $somme += $note;

    if ($note >= 60) {
        $reussites++;
    }
}

$moyenne = $somme / count($notes);

echo "<br>";
echo "Moyenne : " . $moyenne . "<br>";
echo "Nombre de réussites : " . $reussites;

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercice 1 — Relevé de notes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <main class="container py-4">
        <h1>Exercice 1 — Relevé de notes</h1>
        <p>Afficher les notes, la moyenne et le nombre de réussites (note ≥ 60). Utilisez <code>foreach</code>.</p>
    </main>
</body>
</html>
