<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\Train; 
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker){

    for ($i = 0; $i < 10; $i++) {

        $train = new Train();
        $train->Azienda = $faker->sentences(1);
        $train->Stazione_di_partenza = $faker->sentences(1);
        $train->Stazione_di_arrivo = $faker->sentences(1);
        $train->Data_Partenza = $faker->date('Y_m_d'); 
        $train->Orario_di_partenza = $faker->time('H_i_s');
        $train->Orario_di_arrivo = $faker->time('H_i_s');
        $train->Codice_Treno = $faker->regexify('[A-Z]{3}[0-4]{3}');
        $train->Numero_Carrozze = $faker->numberBetween(6, 15);
        $train->In_orario = $faker->boolean();
        $train->Cancellato = $faker->boolean();
        $train->save(); 
    }
}
}