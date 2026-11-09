# Démonstration 5A — Bonjour PHP
**Durée indicative : 20 à 25 minutes.**

1. Observer le résultat de `echo 'Bonjour PHP';` (dans un fichier PHP).
2. Définir `$titre = 'Bienvenue dans PHP 8.4';`.
3. Afficher la variable avec `echo $titre;`, puis avec `<?= $titre ?>` dans `<h1>`.
4. Tester temporairement `$titre = '<strong>Bonjour</strong>';` et observer l'interprétation HTML.
5. Remplacer l'affichage direct par `<?= htmlspecialchars($titre, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>`.
6. Tester à nouveau, puis remettre le titre initial. Sécuriser aussi la balise `<title>`.

**Questions :** quelle différence entre `echo` et `<?= ?>` ? Pourquoi le navigateur ne reçoit-il pas le code PHP ? Pourquoi échapper une donnée dynamique ?

**Attention :** l'affichage direct de HTML dynamique sert uniquement à montrer le risque. On termine avec l'échappement.
