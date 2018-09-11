<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TeacherDashboardTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function it_loads_the_dashboard_teacher_page()
    {
        $this->get('/teacher/dashboard')
            ->assertStatus(500);
    }

    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function it_update_academic_information()
    {
        $this->json('POST','/teacher/dashboard/titles', [
        	'id' => '1',
        	'title1' => 'Ingeniero en Sistemas',
        	'title2' => 'Master en Seguridad Informatica',
        	'title3' => 'Certificacion PMP',
        ]);
        $this->assertDatabaseHas('teachers', [
        	'academic_title_1' => 'Ingeniero en Sistemas',
        	'academic_title_2' => 'Master en Seguridad Informatica',
        	'academic_title_3' => 'Certificacion PMP',
        ]);
    }

    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function it_update_work_experience()
    {
        $this->json('POST','/teacher/dashboard/works', [
        	'id' => '1',
        	'work1' => 'Programador Sr',
        	'work2' => 'Project Manager',
        ]);
        $this->assertDatabaseHas('teachers', [
        	'work_experience_1' => 'Programador Sr',
        	'work_experience_2' => 'Project Manager',
        ]);
    }

    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function it_update_personal_reference()
    {
        $this->json('POST','/teacher/dashboard/reference', [
        	'id' => '1',
        	'reference1' => 'http://www.github.com/username',
        ]);
        $this->assertDatabaseHas('teachers', [
        	'references' => 'http://www.github.com/username',
        ]);
    }

}
