<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AssistantFormTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    
    public function AssistantFormTest()
    {

    $response = $this->json('POST','/formAux', ['p1' => '1','p2' => '1','p3' => '1','p4' => '1','p5' => '1','comment' => 'pruebaunitaria','id_user_evaluator' => '1','id_user_evaluated' => '1','id_course' => '1']);
     $this->assertDatabaseHas('reviews', ['comment' => 'pruebaunitaria']);
    }

    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function testTop10TestBase()
    {
        $this->get('/Top10AssistantPerSchool')
            ->assertStatus(200);
     //$this->assertDatabaseHas('schools', ['name' => 'Mylene Berge']);
    }


    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function VerPagina()
    {
        $response = $this->get('/Top10AssistantPerSchool');
        $response->assertSee('Top10 Auxiliares por Escuela');
        $response->assertSuccessful();
    }

     /**
     * A basic test example.
     * @test
     * @return void
     */
    public function TestBaseInsert()
    {
        $this->assertDatabaseHas('schools', ['name' => 'Mariam Will']);
    }
 
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function generate_top_success()
    {
        $response = $this->json('GET',  '/Top10AssistantPerSchool/Top_Generado', ['school_name' => 'Carmela Dare I']);
        $response->assertSuccessful();
    }

}
