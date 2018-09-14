<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Top10APSTest extends TestCase
{
	//Pruebas unitarias para Auxiliares por unidad academica
     /**
     * A basic test example.
     * @test
     * @return void
     */
        public function BaseDeDatosTest()
    {
    	$this->assertDatabaseHas('academic_units', ['name' => 'Tom Nader']);
    }

    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function PaginaExistenteTest()
    {
        $this->get('/Top10AssistantPerAcademicUnit')
            ->assertStatus(200);
    }

    /**
     * A basic test example.
     * @test
     * @return void
     */
    	public function VerPagina()
    {
    	$response = $this->get('/Top10AssistantPerAcademicUnit');
        $response->assertSee('TOP 10 AUXILIARES POR UNIDAD ACADEMICA');
        $response->assertSuccessful();
    }

     /**
     * A basic test example.
     * @test
     * @return void
     */
    public function generate_top_nothing()
    {
        $response = $this->json('GET',  '/Top10AssistantPerAcademicUnit/Top_Generado', ['school_name' => 'Sincere Collier']);
        $response->assertSee('Resultados de Reporte');
        $response->assertSuccessful();
    } 
}
