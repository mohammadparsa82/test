<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        foreach(range(1,10) as $index){
            DB::table('people')->insert([
                'first name'=>$faker->name,
                'last name'=>$faker->lastname
            ]);
        }
        
    }
}
