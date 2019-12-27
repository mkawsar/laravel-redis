<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApiControllerTest extends TestCase
{
    public function testExample()
    {
        $this->json('POST', 'api/test/values')
            ->assertStatus(200);
    }

    public function testGetAll()
    {
        $this->json('GET', 'api/test/values')
            ->assertStatus(200);
    }

    public function testUpdateByKeys()
    {
        $this->json('POST', 'api/test/values')
            ->assertStatus(200);
    }
}
