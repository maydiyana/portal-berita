<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use App\Models\Catagory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();

        Catagory::create([
            'name' => 'Web developer',
            'slug' => 'web-developer',
        ]);

        Catagory::create([
            'name' => 'UI UX desain',
            'slug' => 'ui-ux-desain',
        ]);
        Catagory::create([
            'name' => 'Komputer',
            'slug' => 'komputer',
        ]);

        Post::factory(20)->create();
    }
}
