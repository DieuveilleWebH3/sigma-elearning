<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsertypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // I created a list / array of usertypes so, they won't be just be random strings
        $usertype_table = [
            'Admin',
            'Instructor'
        ];

        foreach ($usertype_table as $i) {

            DB::table('usertypes')->insert([
                'role' => $i,
            ]);

        }
    }
}
