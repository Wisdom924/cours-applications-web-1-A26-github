<?php

declare(strict_types=1);

// TODO : lire $_REQUEST['prenom'], puis valider la quantité entière
// avec filter_input(INPUT_POST, 'quantite', FILTER_VALIDATE_INT).
// FILTER_VALIDATE_INT renvoie entier, false ou null.
$nom = $_REQUEST['nom'];
$age = $_REQUEST['age'];

$quantite = $_REQUEST['nombre'];
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Démo 5 — Traitement REQUEST : à compléter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <main class="container py-4">
        <h1>Démo 5 — Traitement REQUEST : à compléter</h1>
        <p>À compléter : lire <code>$_REQUEST</code>, vérifier <code>isset()</code> et valider les entiers.</p>
        
        
        <ol>
            <li>Nom non vide après <code>trim()</code>.</li>
            <li>Âge entier entre 1 et 120.</li>
            <li>Nombre entier entre 1 et 10.</li>
            <li>Afficher autant de salutations que demandé avec <code>for</code>.</li>
        </ol>
        
        <p>Bonjour <?= htmlspecialchars($nom, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>, vous avez <?= $age ?> ans.</p>
        <ol>
            <?php for ($i = 1; $i <= $quantite; $i++) : ?>
        
            <li>Bonjour # <?= $i ?></li>
            
            <?php endfor; ?>
        </ol>
        
        
        <a href="Demo02_Formulaire.html">Retour</a>

    </main>
</body>

</html>