<?php

namespace Tests\Feature;

use Tests\TestCase;

class GetCurrentTest extends TestCase
{
    public function testOk()
    {
        $response = $this->get('/api/current?query=new york&api_key=ZrmZqtrmbQnlJxPBNftZ');

        $response->assertStatus(200);
    }

    public function testUnauthorized()
    {
        $response = $this->get('/api/current?query=new york&api_key=123');

        $response->assertStatus(401);
    }

    public function testDatabase()
    {
        $this->assertDatabaseHas('weather', [
            'city' => 'new york',
        ]);
    }
}
