<?php

namespace Database\Seeders;
use Database\Seeders\PostTableSeeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $value) {
            DB::table('students')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'score' => $faker->numberBetween(1, 10)
            ]);
        }
    }
}
