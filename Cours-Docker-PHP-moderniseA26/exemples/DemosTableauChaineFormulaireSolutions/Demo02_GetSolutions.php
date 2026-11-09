<?php
declare(strict_types=1);

// $_REQUEST est un tableau associatif qui peut contenir des données GET et POST
// (et, selon la configuration du serveur, des cookies). Pour une validation
// propre à GET, il est préférable de préciser INPUT_GET avec filter_input().
$nom = trim((string) ($_REQUEST['nom'] ?? ''));
// filter_input(INPUT_GET, 'age', FILTER_VALIDATE_INT) :
//   INPUT_GET : lire un paramètre transmis par l'URL (méthode GET).
//   'age' : nom exact de l'attribut name du champ HTML.
//   FILTER_VALIDATE_INT : accepter seulement un entier valide.
//   Résultat : entier si valide, false si invalide, null si absent.
// On ne doit donc PAS tester simplement « if ($age) » : zéro est un entier.
$age = filter_input(INPUT_GET, 'age', FILTER_VALIDATE_INT);
$nombre = filter_input(INPUT_GET, 'nombre', FILTER_VALIDATE_INT);
$erreurs = [];
if ($nom === '') {
    $erreurs[] = 'Le nom est obligatoire.';
}
if ($age === false || $age === null || $age < 1 || $age > 120) {
    $erreurs[] = 'L’âge doit être un entier entre 1 et 120.';
}
if ($nombre === false || $nombre === null || $nombre < 1 || $nombre > 10) {
    $erreurs[] = 'Le nombre doit être un entier entre 1 et 10.';
}

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Démo 2 — Traitement GET : solution</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <main class="container py-4">
        <h1>Démo 2 — Traitement GET : solution</h1>
        <?php if ($erreurs !== []): ?>
            <div class="alert alert-danger"><ul class="mb-0">
                <?php foreach ($erreurs as $erreur): ?><li><?= htmlspecialchars($erreur, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></li>
                    <?php endforeach; ?></ul></div>
        <?php else: ?>
            <p>Bonjour <?= htmlspecialchars($nom, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>, vous avez <?= $age ?> ans.</p>
            <ol><?php for ($i = 1; $i <= $nombre; $i++): ?>
                <li>Bonjour #<?= $i ?></li><?php endfor; ?>
            </ol>
        <?php endif; ?>
        <a href="Demo02_FormulaireSolutions.html">Retour au formulaire</a>
    </main>
</body>
</html>
