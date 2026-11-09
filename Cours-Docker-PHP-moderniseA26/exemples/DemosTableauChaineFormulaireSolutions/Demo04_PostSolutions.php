<?php

declare(strict_types=1);

// POST transmet les données dans le corps de la requête (pas dans l'URL).
// $_REQUEST peut lire les champs, mais $_POST identifie explicitement leur source.
$prenom = trim((string) ($_REQUEST['prenom'] ?? ''));
// FILTER_VALIDATE_INT valide un entier; false = invalide, null = absent.
$quantite = filter_input(INPUT_POST, 'quantite', FILTER_VALIDATE_INT);
$envoye = $_SERVER['REQUEST_METHOD'] === 'POST';
$erreur = $envoye && ($prenom === '' || $quantite === false || $quantite === null || $quantite < 1 || $quantite > 20);

?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Démo 4 — Formulaire POST : solution</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <main class="container py-4">
        <h1>Démo 4 — Formulaire POST : solution</h1>
        <p>Comparez la méthode POST avec le formulaire GET de la démonstration 2.</p>
        <form method="post" class="row g-3 mb-4">
            <div class="col-md-6"><label class="form-label" for="prenom">Prénom</label><input class="form-control" id="prenom" name="prenom" required></div>
            <div class="col-md-3"><label class="form-label" for="quantite">Quantité (1 à 20)</label>
            <input class="form-control" id="quantite" name="quantite" type="number" min="1" max="20" required></div>
            <div class="col-12"><button class="btn btn-primary">Envoyer en POST</button></div>
        </form>
        <?php if ($envoye && $erreur): ?>
            <div class="alert alert-danger">Vérifiez le prénom et la quantité.</div><?php elseif ($envoye): ?>
                <div class="alert alert-success">Bonjour <?= htmlspecialchars($prenom, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>. Quantité : <?= $quantite ?>.</div><?php endif; ?>
    </main>
</body>

</html>