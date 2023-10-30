<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\Models\Train;
use Carbon\Carbon;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(FAKER $faker): void
    {
        for ($i = 0; $i < 15; $i++) {
            $train = new Train();
            $train->company = $faker->company();
            $train->departure_station = $faker->city();

            $train->departure_time = $faker->dateTimeInInterval('now', '+10 days');

            $train->arrival_station = $faker->city();

            $train->arrival_time = $faker->dateTimeInInterval($train->departure_time, '+3 days');

            $train->train_code = $faker->numberBetween(0, 200);
            $train->carriages = $faker->randomDigitNotNull();
            $train->delay = $faker->boolean();
            $train->canceled = $faker->boolean();

            #save data
            $train->save();
        }
    }
}
