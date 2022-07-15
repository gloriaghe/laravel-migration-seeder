<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {


        for ($i = 0; $i < 50; $i++) {
            $train = new Train();
            $train->azienda = $faker->word();
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->orario_di_partenza = $faker->datetime();
            $train->orario_di_arrivo = $faker->datetime();
            $train->codice_treno = rand(10000, 99999);
            $train->numero_carrozze = rand(10, 100);
            $train->in_orario = !rand(0, 1);
            $train->cancellato = !rand(0, 1);
            $train->save();
        }
    }
}
