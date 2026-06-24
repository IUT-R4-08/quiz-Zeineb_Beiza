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
        $response = $this->getJson('/api/categories');

        $response->assertStatus(200);
    }


}