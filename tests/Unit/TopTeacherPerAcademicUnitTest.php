<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TopTeacherPerAcademicUnitTest extends TestCase
{

     /**
     * A basic test example.
     * @test
     * @return void
     */
    	public function testPaginaTop()
    {
    	$this->get('/TopTeacherPerAcademicUnit')
    		->assertStatus(200);
    }

    /**
     * A basic test example.
     * @test
     * @return void
     */
    	public function VerPagina()
    {
    	$response = $this->get('/TopTeacherPerAcademicUnit');
        $response->assertSee('TOP 10 CATEDRATICOS POR UNIDAD ACADEMICA');
        $response->assertSuccessful();
    }    



    /**
     * A basic test example.
     * @test
     * @return void
     */
    	public function Indicaciones_parametro_select()
    {
    	$response = $this->get('/TopTeacherPerAcademicUnit');
        $response->assertSee('Seleccione el nombre de la Unidad Academica desee consultar');
        $response->assertSee('Unidad Academica:');
        $response->assertSuccessful();
    }    


    /**
     * A basic test example.
     * @test
     * @return void
     */
    	public function Indicaciones_parametro_select_2()
    {
    	$response = $this->get('/TopTeacherPerAcademicUnit');
        $response->assertSee('Unidad Academica:');
        $response->assertSuccessful();
    }    


    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function generate_top_nothing()
    {
        $response = $this->json('GET',  '/Generate_TopAU', ['unit_name' => 'Ciencias']);
        $response->assertViewIs('teacher.show_topau');
        $response->assertSee('Resultados de Reporte:');
        $response->assertSee('Reporte No Generado');
        $response->assertSuccessful();
    }    

  
     /**
     * A basic test example.
     * @test
     * @return void
     */
    public function generate_top_generated()
    {
        $response = $this->json('GET',  '/Generate_TopAU', ['unit_name' => 'King Beer I']);
        $response->assertViewIs('teacher.show_topau');
        $response->assertSee('Reporte Top Catedraticos por Unidad Academica');
        $response->assertSee('Resultados de Reporte:');
        $response->assertSuccessful();
    }  


}
