<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Question;
use App\Models\Answer;

class QuestionSeeder extends Seeder
{
    public function run(): void
    {
        $data = [

            // ===================== SPORT =====================
            'Sport' => [
                [
                    'question' => 'Combien de joueurs dans une équipe de football ?',
                    'answers' => [
                        ['answer' => '11', 'is_correct' => true],
                        ['answer' => '9', 'is_correct' => false],
                        ['answer' => '10', 'is_correct' => false],
                        ['answer' => '12', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Quel pays a gagné la Coupe du Monde 2018 ?',
                    'answers' => [
                        ['answer' => 'France', 'is_correct' => true],
                        ['answer' => 'Croatie', 'is_correct' => false],
                        ['answer' => 'Brésil', 'is_correct' => false],
                        ['answer' => 'Allemagne', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Combien de points vaut un essai au rugby ?',
                    'answers' => [
                        ['answer' => '5', 'is_correct' => true],
                        ['answer' => '3', 'is_correct' => false],
                        ['answer' => '7', 'is_correct' => false],
                        ['answer' => '10', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Quel sport utilise une raquette et un volant ?',
                    'answers' => [
                        ['answer' => 'Badminton', 'is_correct' => true],
                        ['answer' => 'Tennis', 'is_correct' => false],
                        ['answer' => 'Squash', 'is_correct' => false],
                        ['answer' => 'Ping-pong', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Combien de temps dure un match de football sans prolongation ?',
                    'answers' => [
                        ['answer' => '90 minutes', 'is_correct' => true],
                        ['answer' => '80 minutes', 'is_correct' => false],
                        ['answer' => '100 minutes', 'is_correct' => false],
                        ['answer' => '70 minutes', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Quel sport pratique Usain Bolt ?',
                    'answers' => [
                        ['answer' => 'Athlétisme', 'is_correct' => true],
                        ['answer' => 'Football', 'is_correct' => false],
                        ['answer' => 'Basketball', 'is_correct' => false],
                        ['answer' => 'Natation', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Combien de joueurs dans une équipe de basketball ?',
                    'answers' => [
                        ['answer' => '5', 'is_correct' => true],
                        ['answer' => '6', 'is_correct' => false],
                        ['answer' => '7', 'is_correct' => false],
                        ['answer' => '4', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Dans quel sport utilise-t-on un ring ?',
                    'answers' => [
                        ['answer' => 'Boxe', 'is_correct' => true],
                        ['answer' => 'Judo', 'is_correct' => false],
                        ['answer' => 'Karate', 'is_correct' => false],
                        ['answer' => 'Escrime', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Quel pays est connu pour le sumo ?',
                    'answers' => [
                        ['answer' => 'Japon', 'is_correct' => true],
                        ['answer' => 'Chine', 'is_correct' => false],
                        ['answer' => 'Corée', 'is_correct' => false],
                        ['answer' => 'Thaïlande', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Quel est le but du jeu au handball ?',
                    'answers' => [
                        ['answer' => 'Marquer des buts', 'is_correct' => true],
                        ['answer' => 'Faire des paniers', 'is_correct' => false],
                        ['answer' => 'Courir le plus vite', 'is_correct' => false],
                        ['answer' => 'Toucher le ballon', 'is_correct' => false],
                    ],
                ],
            ],

            // ===================== CULTURE =====================
            'Culture' => [
                [
                    'question' => 'Qui a peint la Joconde ?',
                    'answers' => [
                        ['answer' => 'Léonard de Vinci', 'is_correct' => true],
                        ['answer' => 'Picasso', 'is_correct' => false],
                        ['answer' => 'Van Gogh', 'is_correct' => false],
                        ['answer' => 'Michel-Ange', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Quelle est la capitale de la France ?',
                    'answers' => [
                        ['answer' => 'Paris', 'is_correct' => true],
                        ['answer' => 'Lyon', 'is_correct' => false],
                        ['answer' => 'Marseille', 'is_correct' => false],
                        ['answer' => 'Nice', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Qui a écrit Les Misérables ?',
                    'answers' => [
                        ['answer' => 'Victor Hugo', 'is_correct' => true],
                        ['answer' => 'Zola', 'is_correct' => false],
                        ['answer' => 'Molière', 'is_correct' => false],
                        ['answer' => 'Balzac', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Dans quel pays se trouve la Tour de Pise ?',
                    'answers' => [
                        ['answer' => 'Italie', 'is_correct' => true],
                        ['answer' => 'France', 'is_correct' => false],
                        ['answer' => 'Espagne', 'is_correct' => false],
                        ['answer' => 'Grèce', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Quel est le plus grand océan ?',
                    'answers' => [
                        ['answer' => 'Pacifique', 'is_correct' => true],
                        ['answer' => 'Atlantique', 'is_correct' => false],
                        ['answer' => 'Indien', 'is_correct' => false],
                        ['answer' => 'Arctique', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Qui a découvert l’Amérique ?',
                    'answers' => [
                        ['answer' => 'Christophe Colomb', 'is_correct' => true],
                        ['answer' => 'Magellan', 'is_correct' => false],
                        ['answer' => 'Vasco de Gama', 'is_correct' => false],
                        ['answer' => 'Marco Polo', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Quel est l’alphabet utilisé en France ?',
                    'answers' => [
                        ['answer' => 'Latin', 'is_correct' => true],
                        ['answer' => 'Cyrillique', 'is_correct' => false],
                        ['answer' => 'Arabe', 'is_correct' => false],
                        ['answer' => 'Grec', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Quel est le symbole de la paix ?',
                    'answers' => [
                        ['answer' => 'Colombe', 'is_correct' => true],
                        ['answer' => 'Aigle', 'is_correct' => false],
                        ['answer' => 'Lion', 'is_correct' => false],
                        ['answer' => 'Serpent', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Quelle langue parle-t-on au Brésil ?',
                    'answers' => [
                        ['answer' => 'Portugais', 'is_correct' => true],
                        ['answer' => 'Espagnol', 'is_correct' => false],
                        ['answer' => 'Français', 'is_correct' => false],
                        ['answer' => 'Anglais', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Quelle est la monnaie en Europe ?',
                    'answers' => [
                        ['answer' => 'Euro', 'is_correct' => true],
                        ['answer' => 'Dollar', 'is_correct' => false],
                        ['answer' => 'Livre', 'is_correct' => false],
                        ['answer' => 'Yen', 'is_correct' => false],
                    ],
                ],
            ],

            // ===================== JEUX VIDEO =====================
            'Jeux Vidéo' => [
                [
                    'question' => 'Quel est le personnage principal de Mario ?',
                    'answers' => [
                        ['answer' => 'Mario', 'is_correct' => true],
                        ['answer' => 'Luigi', 'is_correct' => false],
                        ['answer' => 'Bowser', 'is_correct' => false],
                        ['answer' => 'Yoshi', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Quel jeu contient des creepers ?',
                    'answers' => [
                        ['answer' => 'Minecraft', 'is_correct' => true],
                        ['answer' => 'Fortnite', 'is_correct' => false],
                        ['answer' => 'Roblox', 'is_correct' => false],
                        ['answer' => 'Valorant', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Quel jeu est un battle royale ?',
                    'answers' => [
                        ['answer' => 'Fortnite', 'is_correct' => true],
                        ['answer' => 'Minecraft', 'is_correct' => false],
                        ['answer' => 'The Sims', 'is_correct' => false],
                        ['answer' => 'Mario Kart', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Quelle entreprise a créé PlayStation ?',
                    'answers' => [
                        ['answer' => 'Sony', 'is_correct' => true],
                        ['answer' => 'Microsoft', 'is_correct' => false],
                        ['answer' => 'Nintendo', 'is_correct' => false],
                        ['answer' => 'Sega', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Quel jeu contient Pikachu ?',
                    'answers' => [
                        ['answer' => 'Pokémon', 'is_correct' => true],
                        ['answer' => 'Digimon', 'is_correct' => false],
                        ['answer' => 'Yu-Gi-Oh', 'is_correct' => false],
                        ['answer' => 'Dragon Ball', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Quel jeu est connu pour les blocks ?',
                    'answers' => [
                        ['answer' => 'Minecraft', 'is_correct' => true],
                        ['answer' => 'Call of Duty', 'is_correct' => false],
                        ['answer' => 'FIFA', 'is_correct' => false],
                        ['answer' => 'GTA', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Quel jeu est un FPS ?',
                    'answers' => [
                        ['answer' => 'Valorant', 'is_correct' => true],
                        ['answer' => 'Minecraft', 'is_correct' => false],
                        ['answer' => 'Animal Crossing', 'is_correct' => false],
                        ['answer' => 'Mario Party', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Quel jeu est développé par Riot Games ?',
                    'answers' => [
                        ['answer' => 'League of Legends', 'is_correct' => true],
                        ['answer' => 'CS:GO', 'is_correct' => false],
                        ['answer' => 'Dota 2', 'is_correct' => false],
                        ['answer' => 'FIFA', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Quel jeu simule le football ?',
                    'answers' => [
                        ['answer' => 'FIFA', 'is_correct' => true],
                        ['answer' => 'Minecraft', 'is_correct' => false],
                        ['answer' => 'Roblox', 'is_correct' => false],
                        ['answer' => 'The Witcher', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Quel jeu permet de construire des villes ?',
                    'answers' => [
                        ['answer' => 'SimCity', 'is_correct' => true],
                        ['answer' => 'Fortnite', 'is_correct' => false],
                        ['answer' => 'Valorant', 'is_correct' => false],
                        ['answer' => 'Zelda', 'is_correct' => false],
                    ],
                ],
            ],

            // ===================== SCIENCE =====================
            'Science' => [
                [
                    'question' => 'Quelle est la formule de l’eau ?',
                    'answers' => [
                        ['answer' => 'H2O', 'is_correct' => true],
                        ['answer' => 'CO2', 'is_correct' => false],
                        ['answer' => 'O2', 'is_correct' => false],
                        ['answer' => 'H2SO4', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Quelle planète est la plus proche du Soleil ?',
                    'answers' => [
                        ['answer' => 'Mercure', 'is_correct' => true],
                        ['answer' => 'Vénus', 'is_correct' => false],
                        ['answer' => 'Terre', 'is_correct' => false],
                        ['answer' => 'Mars', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Quel gaz respirons-nous ?',
                    'answers' => [
                        ['answer' => 'Oxygène', 'is_correct' => true],
                        ['answer' => 'Azote', 'is_correct' => false],
                        ['answer' => 'CO2', 'is_correct' => false],
                        ['answer' => 'Hydrogène', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Quelle est la vitesse de la lumière ?',
                    'answers' => [
                        ['answer' => '300 000 km/s', 'is_correct' => true],
                        ['answer' => '150 000 km/s', 'is_correct' => false],
                        ['answer' => '1 000 km/s', 'is_correct' => false],
                        ['answer' => '3 000 km/s', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Qui a découvert la gravité ?',
                    'answers' => [
                        ['answer' => 'Newton', 'is_correct' => true],
                        ['answer' => 'Einstein', 'is_correct' => false],
                        ['answer' => 'Galilée', 'is_correct' => false],
                        ['answer' => 'Tesla', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Quel organe pompe le sang ?',
                    'answers' => [
                        ['answer' => 'Cœur', 'is_correct' => true],
                        ['answer' => 'Poumon', 'is_correct' => false],
                        ['answer' => 'Foie', 'is_correct' => false],
                        ['answer' => 'Rein', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Quel est l’état de l’eau à 0°C ?',
                    'answers' => [
                        ['answer' => 'Glace', 'is_correct' => true],
                        ['answer' => 'Liquide', 'is_correct' => false],
                        ['answer' => 'Gaz', 'is_correct' => false],
                        ['answer' => 'Plasma', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Quel est le plus grand organe du corps ?',
                    'answers' => [
                        ['answer' => 'Peau', 'is_correct' => true],
                        ['answer' => 'Cœur', 'is_correct' => false],
                        ['answer' => 'Foie', 'is_correct' => false],
                        ['answer' => 'Cerveau', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Quel métal est liquide à température ambiante ?',
                    'answers' => [
                        ['answer' => 'Mercure', 'is_correct' => true],
                        ['answer' => 'Fer', 'is_correct' => false],
                        ['answer' => 'Or', 'is_correct' => false],
                        ['answer' => 'Cuivre', 'is_correct' => false],
                    ],
                ],
                [
                    'question' => 'Quelle planète est appelée planète rouge ?',
                    'answers' => [
                        ['answer' => 'Mars', 'is_correct' => true],
                        ['answer' => 'Vénus', 'is_correct' => false],
                        ['answer' => 'Jupiter', 'is_correct' => false],
                        ['answer' => 'Saturne', 'is_correct' => false],
                    ],
                ],
            ],
        ];

        foreach ($data as $categoryName => $questions) {

            $category = Category::firstOrCreate([
                'name' => $categoryName
            ]);

            foreach ($questions as $q) {

                $question = Question::create([
                    'category_id' => $category->id,
                    'question' => $q['question']
                ]);

                foreach ($q['answers'] as $a) {
                    Answer::create([
                        'question_id' => $question->id,
                        'answer' => $a['answer'],
                        'is_correct' => $a['is_correct']
                    ]);
                }
            }
        }
    }
}