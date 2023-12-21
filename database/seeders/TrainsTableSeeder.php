<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; ++$i) {
            $newTrain = new Train();

            $newTrain->agency = $faker->userName();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeBetween('+1 day', '+1 week');
            $newTrain->arrival_time = $faker->dateTimeBetween('+1 week', '+2 weeks');
            $newTrain->train_code = $faker->bothify('???????????');
            $newTrain->number_of_carriages = $faker->numberBetween(5, 20);
            $newTrain->isOnTime = $faker->boolean('false');
            $newTrain->isCancelled = $faker->boolean('false');

            $newTrain->save();
        }
    }
}
