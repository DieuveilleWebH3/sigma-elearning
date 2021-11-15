<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CourseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // We iterate through to populate our database
        for ($i=1; $i<=25; $i++) {

            DB::table('courses_categories')->insert([
                'course' => $i,
                'category' => random_int(1, 5),
            ]);

        }
    }
}
