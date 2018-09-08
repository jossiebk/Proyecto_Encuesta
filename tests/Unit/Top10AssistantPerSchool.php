<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Top10AssistantPerSchool extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function testExample()
    {
        $this->get('/Reports/Top10AssistantPerSchool')
        ->assertStatus(200);
    }
}
