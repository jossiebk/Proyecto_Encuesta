<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TopTeacherPerSchoolTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function testPrueba1_a()
    {
    	$this->assertDatabaseHas('schools', ['name' => 'Ciencias y Sistemas']);
    }
        public function testPrueba1_b()
    {
    	$this->assertDatabaseHas('schools', ['name' => 'Ciencias']);
    }
        public function testPrueba1_c()
    {
    	$this->assertDatabaseHas('schools', ['name' => 'Postgrado']);
    }
        public function testPrueba1_d()
    {
    	$this->assertDatabaseHas('schools', ['name' => 'Quimica']);
    }

    	public function testPaginaTop()
    {
    	$this->get('/TopTeacherPerSchool')
    		->assertStatus(200);
    }
}
