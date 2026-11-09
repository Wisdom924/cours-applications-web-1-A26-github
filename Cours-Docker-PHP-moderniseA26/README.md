# Modernisation de votre Cours-Docker-PHP

**But :** conserver les noms et dossiers de vos démonstrations existantes, et les lancer avec PHP 8.4/Apache. MiniShop peut coexister avec les démos 5B–5F.

## Installation (Windows / Docker Desktop)
1. Copier les dossiers existants `Demo5B_SyntaxeBasePHP`, `Demo5C_FonctionsClassesPHP`, etc. dans `exemples/`. Ne pas copier les solutions dans le dépôt étudiant.
2. Copier `.env.example` vers `.env` et définir deux mots de passe locaux.
3. Exécuter `docker compose up --build -d` dans ce dossier.
4. Ouvrir http://localhost:8080/ et choisir une démonstration.
5. Pour phpMyAdmin : `docker compose --profile admin up -d` puis http://localhost:8081/.
6. Arrêter : `docker compose down` (conserve les données MySQL).

## Important pour vos anciens dossiers
Apache ne génère plus de liste automatique de fichiers. Si une démo n'a pas de `index.php`, ouvrir son fichier explicitement dans l'URL (par exemple `/Demo5B_SyntaxeBasePHP/demo5B_01.php`) ou ajouter un `index.php` de navigation à ce dossier. Le portail racine liste les sous-dossiers, pas leurs fichiers.

## Accès à MySQL depuis PHP
Les scripts PDO existants doivent lire `getenv('DB_HOST')`, `getenv('DB_NAME')`, `getenv('DB_USER')` et `getenv('DB_PASSWORD')` au lieu de coder les identifiants en dur. L'hôte de la base est `db` par défaut (nom du service Docker), **pas** `localhost`.

## Variante pour conserver MySQL installé sur votre poste
Exécuter `docker compose -f compose.mysql-local.yaml up --build -d` au lieu de la commande habituelle. Vérifier que MySQL Windows accepte les connexions depuis Docker, que le compte applicatif existe et que ses permissions sont limitées à la base `commerce`. Cette variante ne lance pas MySQL dans Docker.

## Points de vigilance
- Désactivation de l'indexation automatique : elle exposait des fichiers non destinés au public.
- Suppression de `chown -R` : évite les modifications de permissions des fichiers montés depuis Windows.
- Le portail est destiné au **développement local** ; ne pas publier ce dépôt comme site public.
- Les corrigés restent dans un dépôt GitLab privé séparé.
- Le CDN Bootstrap nécessite Internet ; prévoir une copie locale pour une salle hors ligne.
- Si le port 8080 ou 8081 est occupé, modifier la liaison des ports.
- Une vraie application déployée devrait avoir un répertoire `public/` distinct ; le montage `exemples/` reste volontairement pédagogique pour préserver vos démonstrations.

## Vérifications proposées
`docker compose config` puis `docker compose ps` ; ouvrir l'accueil, la démo 5A, MiniShop 5A, et vérifier ensuite une requête PDO dans une démo 5D.

**Limite :** Docker n'était pas disponible dans l'environnement de génération. Les fichiers PHP ont été vérifiés syntaxiquement, mais le démarrage réel des conteneurs reste à tester sur votre poste.
