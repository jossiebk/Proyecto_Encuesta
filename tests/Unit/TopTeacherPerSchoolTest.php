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
        /**
     * A basic test example.
     * @test
     * @return void
     */
        public function testPrueba1_b()
    {
    	$this->assertDatabaseHas('schools', ['name' => 'Ciencias']);
    }
        /**
     * A basic test example.
     * @test
     * @return void
     */
        public function testPrueba1_c()
    {
    	$this->assertDatabaseHas('schools', ['name' => 'Postgrado']);
    }
        /**
     * A basic test example.
     * @test
     * @return void
     */
        public function testPrueba1_d()
    {
    	$this->assertDatabaseHas('schools', ['name' => 'Quimica']);
    }

        /**
     * A basic test example.
     * @test
     * @return void
     */
    	public function testPaginaTop()
    {
    	$this->get('/TopTeacherPerSchool')
    		->assertStatus(200);
    }

    /**
     * A basic test example.
     * @test
     * @return void
     */
    	public function VerPagina()
    {
    	$response = $this->get('/TopTeacherPerSchool');
        $response->assertSee('TOP 10 CATEDRATICOS POR ESCUELA');
        $response->assertSuccessful();
    }

    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function generate_top_success()
    {
        $response = $this->json('GET',  '/Generate_Top', ['school_name' => 'Miss Kenya Doyle']);
        $response->assertViewIs('teacher.show_top');
        $response->assertSee('Resultados de Reporte');
        $response->assertSee('1. Anastasia Blick');
        $response->assertSuccessful();
    }   


        /**
     * A basic test example.
     * @test
     * @return void
     */
    public function generate_top_nothing()
    {
        $response = $this->json('GET',  '/Generate_Top', ['school_name' => 'Ciencias']);
        $response->assertViewIs('teacher.show_top');
        $response->assertSee('Resultados de Reporte');
        $response->assertSee('Reporte No Generado');
        $response->assertSuccessful();
    }    


        /**
     * A basic test example.
     * @test
     * @return void
     */
    public function generate_top_position_change()
    {
        $response = $this->json('GET',  '/Generate_Top', ['school_name' => 'Ciencias']);
        $response->assertViewIs('teacher.show_top');
        $response->assertSee('Resultados de Reporte');
        $response->assertSee('4. Prof. Calista Strosin');
        $response->assertSuccessful();
    }       
}
