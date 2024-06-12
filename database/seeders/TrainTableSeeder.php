<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker\Factory::create('it_IT');

        for ($i=0; $i < 9; $i++) {

            $newTrain = new Train();
            $newTrain->azienda = $faker->name();
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            $newTrain->orario_di_partenza = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->orario_di_arrivo = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->codice_treno = $faker->numberBetween(1000,9999);
            $newTrain->numero_carrozze = $faker->numberBetween(4,25);
            $newTrain->save();
        }
    }
}
