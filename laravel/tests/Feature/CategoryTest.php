<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_if_we_can_get_all_categories_api(): void
    {
        $response = $this->get('/api/categories');

        $response->assertStatus(200);
    }
}
