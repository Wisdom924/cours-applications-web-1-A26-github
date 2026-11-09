<?php

declare(strict_types=1);

// Trois tableaux indexés parallèles : même indice = même étudiant.
$etudiants = ['Al', 'Bob', 'Carla', 'Dan'];
$notes = [68, 70, 76, 78];
$numerosDa = [1234, 2345, 3456, 4567];

// Deux tableaux associatifs : la clé est le nom du pays.
$capitales = ['France' => 'Paris', 'Portugal' => 'Lisbonne', 'Espagne' => 'Madrid', 'Royaume-Uni' => 'Londres'];
$populations = ['France' => 65.1, 'Portugal' => 10.2, 'Espagne' => 46.7, 'Royaume-Uni' => 67.5];

// count() retourne le nombre d'éléments d'un tableau.
$nombreEtudiants = count($etudiants);
$sommeNotes = 0;
foreach ($notes as $note) {
    $sommeNotes += $note;
}
$moyenne = $nombreEtudiants > 0 ? $sommeNotes / $nombreEtudiants : 0;


$paysPlusPeuple = '';
$populationMax = -1;
foreach($populations as $pays => $population) {
    if($population > $populationMax) {
        $populationMax = $population;
        $paysPlusPeuple = $pays;
    }
}

$capitalelePlusPeuplee = $capitales[$paysPlusPeuple];

// EXERCICE : 1) Parcourir les tableaux avec for. 2) Calculer la moyenne.
// 3) Parcourir les capitales avec foreach ($capitales as $pays => $capitale).
// 4) Avec foreach et if, trouver le pays dont la population est la plus élevée.
// 5) Retrouver sa capitale grâce au tableau $capitales et afficher le résultat.
// 6) Mettre en évidence sa ligne dans le tableau HTML.
// Les populations correspondent aux pays et non aux villes.
// Les tableaux de départ restent visibles pour faciliter la compréhension.

?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Démo 1 — Tableaux : à compléter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <main class="container py-4">
        <h1>Démo 1 — Tableaux : à compléter</h1>
        <p>Complétez les étapes dans le code PHP. Les données sont déjà définies.</p>
        <ol>
            <li>Afficher étudiants, DA et notes dans un tableau HTML avec <code>for</code>.</li>
            <li>Afficher le nombre d'étudiants et la moyenne.</li>
            <li>Afficher les pays, capitales et populations avec <code>foreach</code>.</li>
            <li>Avec <code>foreach</code> et <code>if</code>, identifier le pays le plus peuplé et afficher sa capitale sous le tableau.</li>
            <li>Mettre en évidence la ligne correspondante.</li>
        </ol>
        <!-- TODO : insérer le tableau HTML et les boucles PHP. -->

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



                <?php for ($i = 0; $i < count($etudiants); $i++) : ?>
                    <tr>
                        <td><?= $etudiants[$i] ?> </td>
                        <td><?= $numerosDa[$i] ?> </td>
                        <td><?= $notes[$i] ?> </td>

                    </tr>
                <?php endfor; ?>


            </tbody>
        </table>
        <p>Moyenne : <?= number_format($moyenne,1, ',', ' ') ?> / 100 </p>


        <h2>2. Pays, Capitales et Populations</h2>
        <!-- Expliquer pourquoi les trois tableaux doivent avoir le même nombre de cases. -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Pays</th>
                    <th>Capitales</th>
                    <th>Population (millions)</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($capitales as $pays => $capitale) : ?>

                    <tr class="<?= $pays === $paysPlusPeuple ?'table-success fw-bold': '' ?>">
                        <td><?= $pays ?></td>
                        <td><?= $capitale ?></td>
                        <td><?= $populations[$pays] ?></td>
                    </tr>


                    <?php endforeach; ?>
                
            </tbody>
        </table>

        <p class="alert alert-success">
            <strong> Population la plus elevée : </strong>

            <?= $paysPlusPeuple ?>
            Capitale : 
            <?= $capitalelePlusPeuplee ?>
            avec <?= number_format($populationMax,1,',',' ') ?> millions d'habitants
        </p>
    </main>
</body>

</html>