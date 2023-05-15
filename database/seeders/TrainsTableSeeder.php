<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvContent = Helpers::getCSVContent(__DIR__ . '/trains.csv');

        foreach ($csvContent as $index => $row) {
            if ($index > 0){
                $train = new Train();
                $train->azienda = $row[0];
                $train->stazione_di_partenza = $row[1];
                $train->stazione_di_arrivo = $row[2];
                $train->data_di_partenza = $row[3];
                $train->data_di_arrivo = $row[4];
                $train->orario_di_partenza = $row[3];
                $train->orario_di_arrivo = $row[4];
                $train->codice_treno = $row[5];
                $train->numero_carrozze = $row[6];
                $train->in_orario = $row[7];
                $train->cancellato = $row[8];
                $train->save();
            }
        }
    }
}
