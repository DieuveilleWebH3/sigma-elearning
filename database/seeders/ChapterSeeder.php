<?php

namespace Database\Seeders;

use Carbon\Carbon;
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

            $rand_string = Str::random(10);

            DB::table('chapters')->insert([
                'title' => $rand_string,
                'slug' => \Illuminate\Support\Str::slug($rand_string, '-'),
                'content' => Str::random(150),
                'course' => random_int(1, 25),
                'video_url' => 'https://www.youtube.com/embed/tvC1WCdV1XU',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ]);

        }
    }
}
