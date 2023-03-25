<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Theme;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Theme::create([
            'logo'  => 'logo.png',
            'copy'  => '2020 Health Care Center. All right reserved',
            'search'=> '',
            'title' => 'Health Care Center',
            'tagline'=> 'Being With You'
        ]);
    }
}
