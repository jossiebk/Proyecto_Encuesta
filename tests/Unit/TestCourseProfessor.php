<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class TestCourseProfessor extends TestCase
{
  
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function if_serch_professor_course_exist()
    {
        $response = $this->json('GET',  '/ProfileCourse/1');
        $response->assertViewIs('ProfessorCourse');
        if ($response->assertSee('Los cursos son:')){
        	$response->assertSuccessful();
        }
    }



    public function if_serch_professor_course_not_exist()
    {
        $response = $this->json('GET',  '/ProfileCourse/sdf');
        $response->assertViewIs('ProfessorCourse');
        if ($response->assertSee('No se encontró ningún curso')){
        	$response->assertSuccessful();
        }
    }



}
