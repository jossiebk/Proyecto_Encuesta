<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	//Insercion de 10 estudiantes
		factory(App\User::class, 1)->create([
			'email' => 'student1@mail.com',
    	]);

    	factory(App\User::class, 1)->create([
			'email' => 'student2@mail.com',
    	]);

    	factory(App\User::class, 1)->create([
			'email' => 'student3@mail.com',
    	]);

        factory(App\User::class, 7)->create();

        //Creacion de 3 profesores
        factory(App\User::class, 1)->create([
        	'email' => 'teacher1@mail.com',	
    	])
    	->each(function (App\User $u){
    		factory(App\Teacher::class, 1)->create(['id_user' => $u->id]);
    	});

    	factory(App\User::class, 1)->create([
        	'email' => 'teacher2@mail.com',	
    	])
    	->each(function (App\User $u){
    		factory(App\Teacher::class, 1)->create(['id_user' => $u->id]);
    	});

    	factory(App\User::class, 1)->create([
        	'email' => 'teacher3@mail.com',	
    	])
    	->each(function (App\User $u){
    		factory(App\Teacher::class, 1)->create(['id_user' => $u->id]);
    	});

    	//Creacion de 3 auxiliares
    	factory(App\User::class, 1)->create([
        	'email' => 'assistant1@mail.com',	
    	])
    	->each(function (App\User $u){
    		factory(App\Assistant::class, 1)->create(['id_user' => $u->id]);
    	});

    	factory(App\User::class, 1)->create([
        	'email' => 'assistant2@mail.com',	
    	])
    	->each(function (App\User $u){
    		factory(App\Assistant::class, 1)->create(['id_user' => $u->id]);
    	});

    	factory(App\User::class, 1)->create([
        	'email' => 'assistant3@mail.com',	
    	])
    	->each(function (App\User $u){
    		factory(App\Assistant::class, 1)->create(['id_user' => $u->id]);
    	});

    	//Creacion de 10 Facultades
    	factory(App\Faculty::class, 10)->create();

    	//Creacion de 10 Unidades Academicas
    	factory(App\AcademicUnit::class, 10)->create();

    	//Creacion de 10 Escuelas
    	factory(App\School::class, 10)->create();

    	//Creacion de 30 Cursos y asignacion de profesores y auxiliares
    	factory(App\Course::class, 30)->create()
    	->each(function (App\Course $u){
    		$teacher = App\Teacher::all()->random()->load('courses');
    		$teacher->courses()->attach($u);

    		$assistant = App\Assistant::all()->random()->load('courses');
    		$assistant->courses()->attach($u);
    	});

    	//Creacion de 10 Evaluaciones para catedraticos
    	factory(App\Review::class, 10)->create();

    	//Creacion de 10 Evaluaciones para auxiliares
    	factory(App\Review::class, 10)->create([
    		'id_user_evaluated' => App\Assistant::all()->random()->user->id,
    	]);

    }
}
