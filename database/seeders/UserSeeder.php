<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate(
            [ 'email' => 'admin@gmail.com' ],
            [ 'name' => 'Sebastião', 'email' => 'admin@gmail.com',
            'password' => '1234admin']
        );
        User::firstOrCreate(
            [ 'email' => 'admin1@gmail.com' ],
            [ 'name' => 'Edson', 'email' => 'admin1@gmail.com',
            'password' => '1234admin']
        );
    }
}
