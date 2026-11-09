<?php
declare(strict_types=1);

$capitales = ['France' => 'Paris', 'Portugal' => 'Lisbonne', 'Espagne' => 'Madrid', 'Royaume-Uni' => 'Londres'];
// TODO : écrire votre solution ici.

// Récupérer le pays envoyé avec GET
$pays = '';
$resultat = '';

if (isset($_GET['pays'])) {
    $pays = trim($_GET['pays']);

    // Rechercher le pays dans le tableau
    if (isset($capitales[$pays])) {
        $resultat = "La capitale de $pays est " . $capitales[$pays];
    } else {
        $resultat = "Pays inconnu.";
    }
}

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercice 2 — Recherche de capitale</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <main class="container py-4">
        <h1>Exercice 2 — Recherche de capitale</h1>
        <p>Créer un formulaire GET <code>pays</code>, appliquer <code>trim()</code> et rechercher dans le tableau associatif. Prévoir le pays inconnu.</p>
        <form method="GET">
            <label for="pays" class="form-label">Entrez un pays :</label>
            <input
                type="text"
                name="pays"
                id="pays"
                class="form-control mb-3"
                value="<?= htmlspecialchars($pays) ?>"
            >

            <button type="submit" class="btn btn-primary">
                Rechercher
            </button>
        </form>

        <?php if ($resultat !== ''): ?>
            <p class="mt-3">
                <?= htmlspecialchars($resultat) ?>
            </p>
        <?php endif; ?>
    </main>
</body>
</html>
