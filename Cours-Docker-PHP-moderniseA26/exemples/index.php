<?php

declare(strict_types=1);

$titre = "Applications Web I — Démonstrations PHP";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1">

    <title><?= htmlspecialchars($titre, ENT_QUOTES, 'UTF-8') ?></title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">

        <h1 class="mb-4">
            <?= htmlspecialchars($titre, ENT_QUOTES, 'UTF-8') ?>
        </h1>

        <p class="lead">
            Cours 420-G16-R — Prof. D. Ahamada
        </p>

        <h1>Chapitre 5A : Introduction au PHP</h1>

        <div class="list-group">

            <h3>Demos et exercices</h3>

            <a href="Demo5A_BonjourPHP/"
                class="list-group-item list-group-item-action">
                Chapitre 5A — Bonjour PHP
            </a>

            <a href="Exercice5A_Presentation/"
                class="list-group-item list-group-item-action">
                Chapitre 5A — Exercice
            </a>

            <a href="MiniShop_5A/"
                class="list-group-item list-group-item-action">
                Chapitre 5A — MiniShop
            </a>

        </div>








        <div class="list-group">

            <h3>Solutions des Demos et exercices</h3>

            <a href="Demo5A_BonjourPHP_Solutions/"
                class="list-group-item list-group-item-action">
                Chapitre 5A — Bonjour PHP
            </a>

            <a href="Exercice5A_Presentation_Solutions/"
                class="list-group-item list-group-item-action">
                Chapitre 5A — Exercice
            </a>

            <a href="MiniShop_5A_Solutions/"
                class="list-group-item list-group-item-action">
                Chapitre 5A — MiniShop
            </a>

        </div>

        <h1>Chapitre 5B : Les bases de la programmation</h1>

        <div class="list-group">

            <h3>Demos et exercices</h3>

            <a href="Demo5B_Variables/"
                class="list-group-item list-group-item-action">
                Chapitre 5B — Les variables
            </a>

            <a href="Demo5C_Conditions/"
                class="list-group-item list-group-item-action">
                Chapitre 5B — Les conditions
            </a>

            <a href="Demo5D_Boucles/"
                class="list-group-item list-group-item-action">
                Chapitre 5B - Les boucles
            </a>

        </div>





        <h1>Travail Semaine 9</h1>

        <div class="list-group">

            <h3>Devoir 29 Octobre</h3>

            <a href="Exercices5A_Depart/"
                class="list-group-item list-group-item-action">
                Exercice5A Depart
            </a>
            <a href="Exercices5B_Depart/"
                class="list-group-item list-group-item-action">
                Exercice5B Depart
            </a>

            <h3>Solutions</h3>
            <a href="SolutionsExercices5AChap5B/Exercices5A_Solutions/"
                class="list-group-item list-group-item-action">
                Exercice5A Solutions
            </a>
            <a href="SolutionsExercices5AChap5B/Exercices5B_Solutions/"
                class="list-group-item list-group-item-action">
                Exercice5B Solutions
            </a>
        </div>

        <!-- À insérer dans exemples/index.php, après les liens du chapitre 5B -->
        <!-- Liens du chapitre 5C : adapter le préfixe exemples/ à votre arborescence -->
   <main class="container py-4">
        <h1>Chapitre 5C : Tableaux, chaînes et formulaires</h1>
        <div class="list-group mb-4">
            <h3>Demos et exercices</h3>

            <a href="DemosTableauChaineFormulaire/"
                class="list-group-item list-group-item-action">
                Chapitre 5C — Les tableaux, chaînes et formulaires
            </a>
            <a href="DemosTableauChaineFormulaireSolutions/"
                class="list-group-item list-group-item-action">
                Chapitre 5C — Les tableaux, chaînes et formulaires (solutions)
            </a>
            <a href="MiniShop5C_TableauChaineFormulaire/"
                class="list-group-item list-group-item-action">
                MINISHOP 5C — Catalogue et formulaire
            </a>
            <a href="ExercicesTableauChaineFormulaire/"
                class="list-group-item list-group-item-action">
                Chapitre 5C — Exercices
            </a>

            
        </div>
    </main>

    </div>







</body>

</html>