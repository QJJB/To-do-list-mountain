# Etapes pour cloner le projet

## Dans le dossier backend:

- Dans le dossier backend, réinstaller les packages avec:
    ```php 
        composer install 
    ```
- Ensuite créer le fichier .env grâce au .env.example avec la commande:
    ```php
        cp .env.example .env
    ```
- Dans le .env, configurer sa base de données et ensuite faire la commande:
    ```php 
        php artisan migrate
    ```
    _Cette commande sert à créer toute les tables dans la base de données_  

- Démarrer son serveur backend avec la commande:
    ```php 
        php artisan serve
    ```
- Si vous avez l'erreur: "No application encryption key has been specified.", faite la commande:
    ```php 
        php artisan key:generate
    ```
## Dans le dossier frontend:

- Dans le dossier frontend, installer les packages avec la commande:
    ```js
        npm install
    ```

- Créer un fichier .env.local avec ceci a l'intérieur:
    ```js
        APP_URL=http://127.0.0.1:8000/api
    ```

- Lancer ensuite son serveur front-end:
    ```js
        npm run dev
    ```
