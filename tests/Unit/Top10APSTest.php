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
    public function PaginaExistenteTest()
    {
        $this->get('/Top10AssistantPerAcademicUnit')
            ->assertStatus(200);
    }
}
