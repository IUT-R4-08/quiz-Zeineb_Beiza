<?php

namespace Tests\Unit;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_category()
    {
        $category = Category::create([
            'name' => 'Sport'
        ]);

        $this->assertDatabaseHas('categories', [
            'name' => 'Sport'
        ]);
    }

    /** @test */
    public function it_has_a_name_attribute()
    {
        $category = new Category([
            'name' => 'Culture'
        ]);

        $this->assertEquals('Culture', $category->name);
    }
}