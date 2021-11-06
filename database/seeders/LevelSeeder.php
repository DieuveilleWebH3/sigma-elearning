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
        $level_table = [
            'Easy',
            'Medium',
            'Hard',
            'Expert',
        ];

        foreach ($level_table as $i) {

            DB::table('levels')->insert([
                'name' => $i,
            ]);

        }
    }
}
