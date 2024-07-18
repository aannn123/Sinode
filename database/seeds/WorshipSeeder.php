<?php

use Illuminate\Database\Seeder;
use
    Illuminate\Support\Facades\DB;

class WorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('t_worships')->insert([
            [
                'name' => 'Ibadah Satu',
                'time' => '07:00',
                'quota'=> 100,
                'r_quota' => 100,
                'status' => 'Active',
                'date' => '2021-06-06'
            ],
            [
                'name' => 'Ibadah sua',
                'time' => '08:00',
                'quota'=> 100,
                'r_quota' => 100,
                'status' => 'Active',
                'date' => '2021-06-07'
            ]
        ]);
    }
}
