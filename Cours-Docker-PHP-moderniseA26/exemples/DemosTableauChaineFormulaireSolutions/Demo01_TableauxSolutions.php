<?php

declare(strict_types=1);

// Trois tableaux indexés parallèles : même indice = même étudiant.
$etudiants = ['Al', 'Bob', 'Carla', 'Dan'];
$notes = [68, 70, 76, 78];
$numerosDa = [1234, 2345, 3456, 4567];

// Deux tableaux associatifs : la clé est le nom du pays.
$capitales = ['France' => 'Paris', 'Portugal' => 'Lisbonne', 'Espagne' => 'Madrid', 'Royaume-Uni' => 'Londres'];
$populations = ['France' => 65.1, 'Portugal' => 10.2, 'Espagne' => 46.7, 'Royaume-Uni' => 67.5];

// Recherche de la population la plus élevée avec une comparaison.
// On conserve le pays correspondant afin de retrouver sa capitale.
$paysPlusPeuple = '';
$populationMax = -1;

foreach ($populations as $pays => $population) {
    // Si la population actuelle dépasse le maximum, on mémorise ce pays.
    if ($population > $populationMax) {
        $populationMax = $population;
        $paysPlusPeuple = $pays;
    }
}

// Les deux tableaux utilisent la même clé (le nom du pays).
$capitalePlusPeuplee = $capitales[$paysPlusPeuple];

// count() retourne le nombre d'éléments d'un tableau.
$nombreEtudiants = count($etudiants);
$sommeNotes = 0;
foreach ($notes as $note) {
    $sommeNotes += $note;
}
$moyenne = $nombreEtudiants > 0 ? $sommeNotes / $nombreEtudiants : 0;

?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Démo 1 — Tableaux : solution</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <main class="container py-4">
        <h1>Démo 1 — Tableaux : solution</h1>
        <p class="lead">Objectifs : indices numériques, clés associatives, <code>count()</code>, <code>for</code> et <code>foreach</code>.</p>
        <h2>1. Étudiants, DA et notes</h2>
        <!-- Expliquer pourquoi les trois tableaux doivent avoir le même nombre de cases. -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Étudiant</th>
                    <th>Numéro DA</th>
                    <th>Note</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < count($etudiants); $i++): ?>
                    <tr>
                        <td><?= htmlspecialchars($etudiants[$i], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></td>
                        <td><?= $numerosDa[$i] ?></td>
                        <td><?= $notes[$i] ?></td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
        <p>Moyenne : <?= number_format($moyenne, 1, ',', ' ') ?> / 100</p>
        <h2>2. Pays, capitales et populations</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Pays</th>
                    <th>Capitale</th>
                    <th>Population (millions)</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($capitales as $pays => $capitale): ?>
                    <?php // La classe Bootstrap met en évidence la ligne du pays le plus peuplé. 
                    ?>
                    <tr class="<?= $pays === $paysPlusPeuple ? 'table-success fw-bold' : '' ?>">
                        <td><?= htmlspecialchars($pays, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></td>
                        <td><?= htmlspecialchars($capitale, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></td>
                        <td><?= $populations[$pays] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <p class="alert alert-success">
            <strong>Population la plus élevée :</strong>
            <?= htmlspecialchars($paysPlusPeuple, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>
            (capitale : <?= htmlspecialchars($capitalePlusPeuplee, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>),
            avec <?= number_format($populationMax, 1, ',', ' ') ?> millions d'habitants.
        </p>
        <p class="text-muted small">Remarque : les populations indiquées sont celles des pays, et non celles de leurs capitales.</p>
    </main>
</body>

</html>