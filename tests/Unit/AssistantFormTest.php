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
    $response->assertSuccessful();
    }
}
