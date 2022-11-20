<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Models\User::create([
            'name'	=> 'Admin',
            'email'	=> 'retinaphoto@gmail.com',
            'password'	=> Hash::make('admin123'),
        ]);
    }
}
