<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for ($i=13; $i < 60; $i++) { 
            DB::table('t_ages')->insert([
                'number' => $i 
            ]);
       }
    }
}
