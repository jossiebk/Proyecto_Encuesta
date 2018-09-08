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
    /**
     * A basic test example.
     * @test
     * @return void
     */
        public function testPruebaParacontenido()
    {
        $this->assertDatabaseHas('schools', ['name' => 'Mylene Berge']);
    }
    /**
     * A basic test example.
     * @test
     * @return void
     */

        public function generate_top_position_change()
    {
        $response = $this->json('GET',  '/Generate_Top', ['school_name' => 'Mylene Berge']);
        $response->assertViewIs('/Reports/TopASP');
        $response->assertSuccessful();
    }   
}
