<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\People;


use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;


class PeopleSeeder extends Seeder
{
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 200; $i++) {
            DB::table('people')->insert([
                
                    'name' => $faker->firstName(),
                    'surname' => $faker->lastName(),
                    'phone_number' => $faker->phoneNumber(),
                    'address' => $faker->address(),
                    'city' => $faker->city(),
                    'country' => $faker->country(),   
            ]);
        }
    }
}

