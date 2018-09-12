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

}
