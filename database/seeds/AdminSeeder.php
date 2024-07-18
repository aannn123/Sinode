<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('t_ages')->insert([
            [
                'name' => 'Superadmin',
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make('superadmin123')
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123')
            ]
        ]);
    }
}
