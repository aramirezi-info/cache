<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Support\Facades\Cache;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_there_is_the_cache_for_categories()
    {
        Category::factory()->count(4)->create();

        $response = $this->get('/');

        $categories = Cache::get('categories');
        $response->assertOk();
        $this->assertEquals(4, $categories->count());
    }
}
