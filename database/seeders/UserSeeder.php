<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Shankar Khadka',
            'email' => 'khadka@gmail.com',
            'password' =>Hash::make('1234'),
        ]);
        User::create([
            'name' => 'laxman',
            'email' => 'laxman@gmail.com',
            'password' =>bcrypt('1234'),
        ]);
        User::create([
            'name' => 'CM',
            'email' => 'cm@gmail.com',
            'password' =>bcrypt('1234'),
        ]);
        User::create([
            'name' => 'mahata',
            'email' => 'mahata@gmail.com',
            'password' =>bcrypt('1234'),
        ]);
        
    }
}