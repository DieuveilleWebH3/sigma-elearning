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
        $category_table = [
            'Web Programming',
            'Web Design',
            'Project Management',
            'Data Science',
            'Programming',
        ];

        foreach ($category_table as $i) {

            DB::table('categories')->insert([
                'title' => $i,
                'slug' => \Illuminate\Support\Str::slug($i, '-'),
            ]);

        }

    }
}
