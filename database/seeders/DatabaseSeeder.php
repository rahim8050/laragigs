<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

    // User::factory(10)-> create();
    Listing::factory(10)->create();

    // Listing::create([
    //     'title' => 'PHP Developer',
    //     'tags' => 'php, developer, backend',
    //     'company' => 'PHP Devs',
    //     'location' => 'Remote',
    //     'email' => 'joseph@gmail.com',
    //     'website' => 'https://phpdevs.com',
    //     'description' => 'We are looking for a PHP Developer to join our team. You will be working with a team of developers to develop and maintain high quality web applications. If you are passionate about PHP and have experience with Laravel, we would love to hear from you.',
    // ]);
    // Listing::create([
    //     'title' => 'Frontend Developer',
    //     'tags' => 'frontend, developer, javascript',
    //     'company' => 'JS Devs',
    //     'location' => 'Remote',
    //     'email' => 'peterjohn@gmail.com',
    //     'website' => 'https://jsdevs.com',
    //     'description' => 'We are looking for a Frontend Developer to join our team. You will be working with a team of developers to develop and maintain high quality web applications. If you are passionate about JavaScript and have experience with React, we would love to hear from you.',
    // ]);
   

    }
}
