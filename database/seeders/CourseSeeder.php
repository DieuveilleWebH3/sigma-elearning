<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i<25; $i++){

            DB::table('courses')->insert([
                'title' => Str::random(10),
                'slug' => \Illuminate\Support\Str::slug('title', '-'),
                'description' => Str::random(50),
                'duration' => random_int(1, 54),
                'level' => random_int(1, 4),
                'user_id' => 1,
            ]);

        }
        /*
        DB::table('courses')->insert([
            'title' => Str::random(10),
            'slug' => \Illuminate\Support\Str::slug('title', '-'),
            'description' => Str::random(50),
            'duration' => random_int(1, 54),
            'level' => random_int(1, 4),
            'user_id' => 1,
        ]);
        */
    }
}
