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
    public function testExample()
    {
    	$this->assertDatabaseHas('schools', ['name' => 'Ciencias y Sistemas']);
    	$this->assertDatabaseHas('schools', ['name' => 'Ciencias']);
    }
}
