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

    $response = $this->json('POST','/teacher_form/evaluate', ['P1' => '1','P2' => '1','P3' => '1','P4' => '1','P5' => '1','comment' => 'PHPUNIT_5']);
        $this->assertDatabaseHas('reviews', ['comment' => 'PHPUNIT_5']);

    }
}
