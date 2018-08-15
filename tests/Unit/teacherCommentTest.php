<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class teacherCommentTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /**
     * A basic test example.
     * @test
     * @return void
     */
	public function it_validates_the_open_windows()
    {	
    	$this->get('/teacherReview/1')
    		->assertStatus(200);
    }
     /**
     * A basic test example.
     * @test
     * @return void
     */
    public function TeacherCommentTest()
    {
	    $response = $this->json('POST','/teacherReview/1', ['opinion' => 'kfhfh','score' => '1','id' => '1']);
	    $response->assertSuccessful();

    }
   

}
