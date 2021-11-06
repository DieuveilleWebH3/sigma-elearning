<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ChapterSeeder extends Seeder
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

            DB::table('chapters')->insert([
                'title' => Str::random(10),
                'slug' => \Illuminate\Support\Str::slug('title', '-'),
                'content' => Str::random(150),
                'course' => random_int(1, 24),
                'video_url' => Str::random(15),
            ]);

        }
    }
}
