<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->insert([
            [
                "animal" => "girafe",
                "src" => "girafle.jpg"
            ],
            [
                "animal" => "paon",
                "src" => "paon.jpg"
            ],

        ]);
    }
}
