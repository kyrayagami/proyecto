<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        //$this->call(DiasSemana::class);
        $this->call(DiasSemanaAdair::class);
        //$this->call(ProductorSeeder::class);
        //$this->call(ConductorSeeder::class);
        //$this->call(ProductorSeeder::class);
       // $this->call(conductor2::class);

    }
}