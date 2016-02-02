<?php

use Illuminate\Database\Seeder;

class DiasSemanaAdair extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        DB::table('dias')->insert(array(
			'id'   => 1,
			'dia' => 'lunes'));
        DB::table('dias')->insert(array(
			'id'   => 2,
			'dia' => 'martes'));
        DB::table('dias')->insert(array(
			'id'   =>3,
			'dia' =>'miercoles'));
        DB::table('dias')->insert(array(
			'id'   =>4,
			'dia' => 'jueves'));
        DB::table('dias')->insert(array(
			'id'   => 5,
			'dia' => 'viernes'));
        DB::table('dias')->insert(array(
			'id'   =>6,
			'dia' =>'sabado'));
        DB::table('dias')->insert(array(
			'id'   =>7,
			'dia' =>'domingo'));
    }
}
