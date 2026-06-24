# Quiz App

![CI](https://github.com/IUT-R4-08/quiz-Zeineb_Beiza/actions/workflows/ci.yml/badge.svg)

Application de quiz fullstack avec Laravel et Vue.js.

## Contributeurs
- Beyza
- Zeineb

## Stack technique
- Back : Laravel 13
- Front : Vue.js 3 (mode composition)
- Base de données : SQLite

## Installation

```bash
git clone https://github.com/IUT-R4-08/quiz-Zeineb_Beiza.git
cd quiz-Zeineb_Beiza
composer install
cp .env.example .env
php artisan key:generate
npm install
```

## Lancer le projet

Terminal 1 :
```bash
php artisan serve
```

Terminal 2 :
```bash
npm run dev
```

Puis ouvrir http://127.0.0.1:8000

## Initialiser la base de données

```bash
php artisan migrate
```

## Exécuter les seeders (données de test)

```bash
php artisan db:seed
```

Ou tout réinitialiser :
```bash
php artisan migrate:fresh --seed
```

## Lancer les tests

```bash
php artisan test
```

## Fonctionnalités
- Plusieurs catégories de questions (Sport, Culture, Jeux Vidéo, Science)
- Interface de jeu avec questions et réponses
- Enregistrement du score avec pseudo
- Scoreboard des meilleurs scores
- Interface d'administration des questions