<?php

declare(strict_types=1);

// TODO : lire $_REQUEST['prenom'], puis valider la quantité entière
// avec filter_input(INPUT_POST, 'quantite', FILTER_VALIDATE_INT).
// FILTER_VALIDATE_INT renvoie entier, false ou null.
$nom = trim( ($_REQUEST['prenom'] ?? '')) ;

// $quantite = $_POST['quantite'];

$quantite = filter_input(INPUT_POST, 'quantite', FILTER_VALIDATE_INT) ;
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Démo 4 — Formulaire POST : à compléter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <main class="container py-4">
        <h1>Démo 4 — Formulaire POST : à compléter</h1>
        <form method="post" class="mb-3">
            <label>
                Prénom <input name="prenom" required>
            </label>
            <label>
                Quantité <input name="quantite" type="number" min="1" max="20" required>
            </label>
            <button>Envoyer</button>
        </form>
        <p>À compléter : afficher un résultat ou un message d'erreur.</p>

        <p>Bonjour <?= htmlspecialchars($nom, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>.</p>
        <ol>
            <?php for ($i = 1; $i <= $quantite; $i++) : ?>

                <li>Bonjour # <?= $i ?></li>

            <?php endfor; ?>
        </ol>
    </main>
</body>

</html>