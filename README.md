# Reproduction d'une Page Web avec Laravel

Ce projet est une reproduction d'une page internet réalisée à l'aide du framework PHP Laravel. Il s'agit d'un projet réalisé durant mon stage pour l'ULB.

## 📋 Fonctionnalités

- Structure propre et modulaire avec Laravel.
- Mise en œuvre d'un design précis basé sur un modèle donné.
- Utilisation des routes, contrôleurs et vues Laravel.
- Intégration de ressources front-end (HTML, CSS, JavaScript) pour une interface utilisateur attrayante.

---

## 🛠️ Technologies utilisées

- **Laravel** 
- **PHP** 
- **Composer**
- Frontend :
  - HTML5, CSS3
  - JavaScript
  - Bootstrap

---

## 🚀 Installation et configuration

1. **Cloner le dépôt** :
   ```bash
   git clone https://github.com/anthosaxe/care-test.git
   ```
   ```bash
   cd care-test
    ```

2. **Installer les dépendances** :
    ```bash
   composer install
   ```
   ```bash
   npm install 

   ```

3. **Configurer l'environnement** :
    - retirer .exemple du  fichier .env.exemple

4. **Générer une clé d'application** :
    ```bash
   php artisan key:generate

   ```

5. **Lancer le serveur local** :
    ```bash
   php artisan serve


   ```

6. **Accéder à l'application** :
    - Ouvrez votre navigateur et accédez à http://localhost:8000
---
   
## 📚 Structure du projet

- routes/web.php : Définit les routes de l'application.
- resources/views/ : Contient les fichiers Blade pour les vues.
- public/ : Contient les fichiers CSS/JS/Images publics.
- app/Http/Controllers/ : Contient les contrôleurs.
