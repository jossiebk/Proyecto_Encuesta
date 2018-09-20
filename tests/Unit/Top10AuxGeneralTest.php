<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Top10AuxGeneralTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function Top10AuxGeneralTest()
    {
        $this->get('/Reports/Top10AuxGeneral')
        ->assertStatus(200);
    }
}
