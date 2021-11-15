<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // I created a list / array of categories so, they won't be just random strings
        $category_table = [
            'Web Programming',
            'Web Design',
            'Project Management',
            'Data Science',
            'Programming',
            'Business',
        ];

        // We iterate through the list to populate our database
        foreach ($category_table as $i) {

            DB::table('categories')->insert([
                'title' => $i,
                'slug' => \Illuminate\Support\Str::slug($i, '-'),
            ]);

        }

    }
}
