<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        User::create([
            'name' => 'Wiki',
            'email' => 'wikiramadan@gmail.com',
            'password' => bcrypt('menyala123'),
        ]);
        
        User::create([
            'name' => 'Afifi',
            'email' => 'afifiabdulhadi0@gmail.com',
            'password' => bcrypt('122007'),
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin23@gmail.com',
            'password' => bcrypt('admin123'),
        ]);
    }
}