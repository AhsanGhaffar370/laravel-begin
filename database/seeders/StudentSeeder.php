<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->
        insert([
            'firstName'=>Str::random(6),
            'lastName'=>Str::random(6),
            'address'=>Str::random(10),
        ]);
    }
}
