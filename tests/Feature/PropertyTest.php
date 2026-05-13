<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PropertyTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_home_page_is_accessible(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('LIVING');
        $response->assertSee('DEFINED');
    }

    public function test_can_see_published_properties(): void
    {
        $response = $this->get('/');
        
        $response->assertSee('Luxury Sea Facing Apartment');
    }
}
