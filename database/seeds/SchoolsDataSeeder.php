<?php

use Illuminate\Database\Seeder;

class SchoolsDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('schools')->insert([
        	 'name' => 'Ciencias y Sistemas',
        ]);
        DB::table('schools')->insert([
        	 'name' => 'Ciencias',
        ]);           
        DB::table('schools')->insert([
        	 'name' => 'Postgrado',
        ]);        
        DB::table('schools')->insert([
        	 'name' => 'Quimica',
        ]);

       DB::table('reviews')->insert([
        'puntuality' => '10' ,
        'knowledge' => '5',
        'presentation' => '10',
        'notes' => '3',
        'assistance' => '10',
        'comment' => 'regular',
        'id_user_evaluator' => '1',
        'id_user_evaluated' => '11',
        'id_course' => '17',
        ]);

              DB::table('reviews')->insert([
        'puntuality' => '10' ,
        'knowledge' => '5',
        'presentation' => '10',
        'notes' => '3',
        'assistance' => '10',
        'comment' => 'regular',
        'id_user_evaluator' => '5',
        'id_user_evaluated' => '12',
        'id_course' => '21',
        ]);

               DB::table('reviews')->insert([
        'puntuality' => '10' ,
        'knowledge' => '5',
        'presentation' => '10',
        'notes' => '3',
        'assistance' => '10',
        'comment' => 'regular',
        'id_user_evaluator' => '2',
        'id_user_evaluated' => '13',
        'id_course' => '18',
        ]);
        
               DB::table('reviews')->insert([
        'puntuality' => '10' ,
        'knowledge' => '5',
        'presentation' => '10',
        'notes' => '3',
        'assistance' => '10',
        'comment' => 'regular',
        'id_user_evaluator' => '8',
        'id_user_evaluated' => '11',
        'id_course' => '25',
        ]);

               DB::table('reviews')->insert([
        'puntuality' => '10' ,
        'knowledge' => '5',
        'presentation' => '10',
        'notes' => '3',
        'assistance' => '10',
        'comment' => 'regular',
        'id_user_evaluator' => '7',
        'id_user_evaluated' => '12',
        'id_course' => '11',
        ]);

               DB::table('reviews')->insert([
        'puntuality' => '10' ,
        'knowledge' => '5',
        'presentation' => '10',
        'notes' => '3',
        'assistance' => '10',
        'comment' => 'regular',
        'id_user_evaluator' => '3',
        'id_user_evaluated' => '13',
        'id_course' => '26',
        ]);      
    }
}
