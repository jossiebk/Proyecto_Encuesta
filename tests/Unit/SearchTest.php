<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;


class SearchTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function the_name_is_required()
    {
        $this->from('/dash')
            ->get('/search', [
                'user_name' => '',
            ])
            ->assertRedirect('/dash')
            ->assertSessionHasErrors(['user_name']);
    }

    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function the_name_is_alphabetic()
    {
        $this->from('/dash')
            ->get('/search', [
                'user_name' => '#',
            ])
            ->assertRedirect('/dash')
            ->assertSessionHasErrors(['user_name']);
    }

    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function it_search_a_teacher_that_exits()
    {
        $response = $this->json('GET',  '/search', ['user_name'=>'Herman']);
        $response->assertViewIs('search.show');
        $response->assertSee('Resultados de busqueda');
        $response->assertSee('Herman');
        $response->assertSee('Catedratico');
        $response->assertSuccessful();
    }

    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function it_search_a_teacher_that_not_exits()
    {
        $response = $this->json('GET',  '/search', ['user_name' => 'Pedro Picapiedra']);
        $response->assertViewIs('search.show');
        $response->assertSee('Resultados de busqueda');
        $response->assertSee('Sin resultados');
        $response->assertDontSee('Pedro Picapiedra');
        $response->assertSuccessful();
    }




}
