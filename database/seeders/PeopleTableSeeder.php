<?php

namespace Database\Seeders;

use App\Models\People;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run(): void
    {
        DB::table('people')->delete();

        $faker = Factory::create();

        for ($i = 0; $i < 50; $i++) {
            People::create([
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
                'age' => $faker->numberBetween($min = 1, $max = 100),
                'phonenumber' => $faker->phoneNumber,
                'country' => $faker->country,
                'city' => $faker->city,
                'street' => $faker->streetAddress
            ]);
        }
    }
    
}

