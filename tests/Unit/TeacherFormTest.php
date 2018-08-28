<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TeacherFormTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function TeacherFormTest()
    {

    $response = $this->json('POST','/teacher_form/evaluate', ['R1' => '4','R2' => '7','R3' => '3','R4' => '6','R5' => '10','comment' => '8/21/2018']);
        $this->assertDatabaseHas('reviews', ['comment' => '8/21/2018']);

    }
}
