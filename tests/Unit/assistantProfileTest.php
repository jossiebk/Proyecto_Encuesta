<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class assistantProfileTest extends TestCase
{
    /**
     * A basic test example.
     *@test
     * @return void
     */
    public function profile_test()
    {	
    	$this->get('/assistantProfile/2')
    		->assertStatus(200);
    }
}
