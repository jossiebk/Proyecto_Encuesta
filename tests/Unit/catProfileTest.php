<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class catProfile extends TestCase
{
	 /**
     * A basic test example.
     * @test
     * @return void
     */
    public function it_validates_the_pull_of_the_teacher()
    {	
    	$this->get('/perCat/1')
    		->assertStatus(200);
    }
}
