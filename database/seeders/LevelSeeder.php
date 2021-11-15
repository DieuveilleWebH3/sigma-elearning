<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // I created a list / array of levels so, they won't be just random strings
        $level_table = [
            'Easy',
            'Medium',
            'Hard',
            'Expert',
        ];

        // We iterate through the list to populate our database
        foreach ($level_table as $i) {

            DB::table('levels')->insert([
                'name' => $i,
            ]);

        }
    }
}
