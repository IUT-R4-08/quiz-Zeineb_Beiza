<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Question;
use App\Models\Answer;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $culture = Category::create(['name' => 'Culture Générale']);

        $q1 = Question::create([
            'category_id' => $culture->id,
            'question_text' => 'Quelle est la capitale de la France ?'
        ]);

   
        Answer::create(['question_id' => $q1->id, 'answer_text' => 'Lyon', 'is_correct' => false]);
        Answer::create(['question_id' => $q1->id, 'answer_text' => 'Paris', 'is_correct' => true]);
        Answer::create(['question_id' => $q1->id, 'answer_text' => 'Marseille', 'is_correct' => false]);
    }
}
