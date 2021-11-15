<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
        // We iterate through to populate our database
        for ($i=0; $i<25; $i++){

            // I created a string with value a random string so i can get the right slug
            $rand_string = Str::random(10);

            DB::table('courses')->insert([
                'title' => $rand_string,
                'slug' => \Illuminate\Support\Str::slug($rand_string, '-'),
                'description' => Str::random(50),
                'duration' => random_int(1, 54),
                'level' => random_int(1, 4),
                'user_id' => 1,
                'price' => 10.0,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ]);

        }
    }
}
