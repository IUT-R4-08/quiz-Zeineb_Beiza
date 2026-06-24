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
        $data = ['Sport' => [['question' => 'Combien de joueurs dans une équipe de foot ?', 'answers' => [['answer' => '11', 'is_correct' => true], ['answer' => '9', 'is_correct' => false], ['answer' => '10', 'is_correct' => false], ['answer' => '12', 'is_correct' => false],]], ['question' => 'Dans quel sport utilise-t-on un volant ?', 'answers' => [['answer' => 'Badminton', 'is_correct' => true], ['answer' => 'Tennis', 'is_correct' => false], ['answer' => 'Squash', 'is_correct' => false], ['answer' => 'Ping-pong', 'is_correct' => false],]],], 'Culture' => [['question' => 'Qui a peint la Joconde ?', 'answers' => [['answer' => 'Léonard de Vinci', 'is_correct' => true], ['answer' => 'Picasso', 'is_correct' => false], ['answer' => 'Michel-Ange', 'is_correct' => false], ['answer' => 'Raphaël', 'is_correct' => false],]],], 'Jeux Vidéo' => [['question' => 'Quel est le plombier de Nintendo ?', 'answers' => [['answer' => 'Mario', 'is_correct' => true], ['answer' => 'Link', 'is_correct' => false], ['answer' => 'Kirby', 'is_correct' => false], ['answer' => 'Donkey Kong', 'is_correct' => false],]],], 'Science' => [['question' => 'Quelle est la formule de l\'eau ?', 'answers' => [['answer' => 'H2O', 'is_correct' => true], ['answer' => 'CO2', 'is_correct' => false], ['answer' => 'O2', 'is_correct' => false], ['answer' => 'H2SO4', 'is_correct' => false],]],],];
        foreach ($data as $categoryName => $questions) {
            $category = Category::where('name', $categoryName)->first();
            if (!$category)
                continue;
            foreach ($questions as $q) {
                $question = Question::create(['category_id' => $category->id, 'question' => $q['question'],]);
                foreach ($q['answers'] as $a) {
                    Answer::create(['question_id' => $question->id, 'answer' => $a['answer'], 'is_correct' => $a['is_correct'],]);
                }
            }
        }
    }
}