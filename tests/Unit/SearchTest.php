<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SearchTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function it_search_a_teacher_that_exits()
    {
        $this->get('/search', [
        	'user_name' => 'Herman',
        ])
        ->assertStatus(200)
        ->assertSee('Resultados de busqueda')
        ->assertSee('Herman')
        ->assertSee('Catedratico');
    }


    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function it_search_a_teacher_that_not_exits(){
    	$this->get('/search', [
        	'user_name' => 'pedro picapiedra',
        ])
        ->assertStatus(200)
        ->assertSee('Resultados de busqueda')
        ->assertDontSee('pedro picapiedra');
    }
}
