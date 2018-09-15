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
    	$this->get('/teacher/ProfessorResult/15')
    		->assertStatus(200);
    }

     public function if_serch_professor_course_exist()
    {
        $response = $this->json('GET',  '/teacher/ProfessorResult/15');
        $response->assertViewIs('ProfessorCourse');
        if ($response->assertSee('Notas obtenidas por Curso:')){
        	$response->assertSuccessful();
        }
    }


    /**
     * A basic test
     * @test
     * @return void
     */
    public function if_serch_professor_course_not_exist()
    {
        $response = $this->json('GET',  '/teacher/ProfessorResult/15lkji');
        $response->assertViewIs('ProfessorCourse');
        if ($response->assertSee('')){
        	$response->assertSuccessful();
        }
    }
}
