# TomTroc

TomTroc est une application PHP de partage de livres. Elle utilise MySQL pour
les comptes, les livres et les conversations.

## Prérequis

- Windows avec [XAMPP](https://www.apachefriends.org/) (Apache, MySQL et PHP).
- Git

## Installation avec XAMPP

1. Démarrez **Apache** et **MySQL** depuis le panneau de contrôle XAMPP.
2. Placez le projet dans le dossier `C:\xampp\htdocs\TomTroc-Project`. Le nom
   `TomTroc-Project` doit être conservé : les liens de l’application utilisent
   ce chemin.
   ```powershell
   git clone https://github.com/magdau5-dev/TomTroc-Project.git TomTroc-Project
   ```
   Si vous téléchargez une archive, décompressez-la dans ce même dossier.
3. Ouvrez [phpMyAdmin](http://localhost/phpmyadmin), créez une nouvelle base de donnée avec le nom de "tomtroc". Puis l’onglet **Import**, exécutez le script qui est dans le dossier "sql" du projet pour insérer toute les données.
4. Vérifiez les identifiants MySQL dans
   [`src/models/Database.php`](src/models/Database.php). Par défaut, l’application
   se connecte à `localhost`, à la base `tomtroc`, avec l’utilisateur `root` et
   un mot de passe vide (configuration XAMPP courante).
5. Accédez à [http://localhost/TomTroc-Project/](http://localhost/TomTroc-Project/).
   Créez un compte depuis la page d’inscription pour commencer à utiliser
   l’application.

Les dossiers `public/img/books` et `public/img/avatars` sont utilisés pour les
images ajoutées depuis l’application. Assurez-vous que le serveur web peut y
écrire.
