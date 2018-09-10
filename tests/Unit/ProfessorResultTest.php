<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProfessorResultTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function validates_id_of_the_teacher()
    {	
    	$this->get('/perCat/1')
    		->assertStatus(200);
    }
}
