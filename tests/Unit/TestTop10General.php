<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TestTop10General extends TestCase
{
    /**
     * A basic test for top 10 general.
     * @test
     * @return void
     */
    public function test_top10_general()
    {
        $this->get('/Reports/Top10General')
        ->assertStatus(200);
    }
}
