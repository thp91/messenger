# messenger

Pour lancer le projet:

Pour installer toutes les instances:

symfony composer install
docker compose up -d
symfony console make:migration

Pour lancer le serveur:

docker compose up -d -> Lancer le docker pour avoir la base de donnée.
symfony serve -> Pour lancer le serveur de Symfony.
