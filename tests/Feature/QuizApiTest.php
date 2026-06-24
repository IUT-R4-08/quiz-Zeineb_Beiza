<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class QuizApiTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_categories_api_returns_data()
    {
        // creation de categories pour le test
        Category::create(['name' => 'Sport']);
        Category::create(['name' => 'Culture']);

        // appel de l'API pour récupérer les catégories
        $response = $this->getJson('/api/categories');

        // vérification de la réponse
        $response->assertStatus(200)
            ->assertJsonStructure([
                '*' => [
                    'id',
                    'name',
                    'created_at',
                    'updated_at',
                ]
            ])
            ->assertJsonFragment([
                'name' => 'Sport'
            ]);
    }


}