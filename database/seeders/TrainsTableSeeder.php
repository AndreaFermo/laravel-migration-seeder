<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        for($i=0; $i<10; $i++){
            $train = new Train();
            $table->azienda = $faker->company();
            $table->stazione_di_partenza = $faker->city();
            $table->stazione_di_arrivo = $faker->city();
            $table->orario_di_partenza = $faker->dateTimeBetween('-1 week', '+1 week');
            $table->orario_di_arrivo = $faker->dateTimeBetween('-1 week', '+1 week');
            $table->orario_di_partenza = $faker->time();
            $table->orario_di_arrivo = $faker->time();
            $table->codice_treno = $faker->randomNumber(5, true);
            $table->numero_carrozze = $faker->randomDigitNotNull();
            $table->in_orario = $faker->boolean();
            $table->cancellato = $faker->boolean();
        }
    }
}
