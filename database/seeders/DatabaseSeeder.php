<?php

namespace Database\Seeders;

use App\Models\Category;
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
        // \App\Models\User::factory(10)->create();
        // We call the seeder classes in this order to avoid missing key arguments for fk fields
        $this->call([
            UsertypeSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            LevelSeeder::class,
            CourseSeeder::class,
            CourseCategorySeeder::class,
            ChapterSeeder::class,
        ]);
    }
}
