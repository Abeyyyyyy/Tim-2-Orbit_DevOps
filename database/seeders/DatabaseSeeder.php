<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * 
     *
     * @return void
     */
    public function run()
    {
        

        \App\Models\User::create([
            'name' => 'Administrator',
            'email' => 'admin@smkn4bdg.sch.id',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'role' => 'admin',
        ]);

        \App\Models\User::create([
            'name' => 'Regular User',
            'email' => 'user@smkn4bdg.sch.id',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'role' => 'user',
        ]);
    }
}
