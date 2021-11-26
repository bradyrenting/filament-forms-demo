<?php

namespace Database\Seeders;

use Database\Factories\CategoryFactory;
use Database\Factories\PostFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        CategoryFactory::new()->count(2)->create();
        
        PostFactory::new()->withCategories()->create();
    }
}
