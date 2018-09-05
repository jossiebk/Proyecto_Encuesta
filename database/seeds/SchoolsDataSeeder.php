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
    }
}
