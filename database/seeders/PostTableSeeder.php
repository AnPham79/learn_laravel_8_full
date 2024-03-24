<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =  Faker::create();
        foreach (range(1, 10) as $index) {
            DB::table('post')->insert([
                'title' => $faker->sentence(5),
                'body' => $faker->sentence(5),
                'user_id' => $faker->randomElement([1, 2])
            ]); 
        }    
    }
}
