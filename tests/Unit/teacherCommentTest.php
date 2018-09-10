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
	   $this->json('POST','/teacherReview', [
            'opinion' => 'letras de prueba',
            'opinionN' => 'es malo',
            'score' => '1',
            'id'=>'1',
            'estrellas'=>'3'
        ]);
	   $this->assertDatabaseHas('teacher_comments', ['comment' => 'letras de prueba']);
    }
    
    
    
}
