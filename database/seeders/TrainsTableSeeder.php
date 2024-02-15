<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Faker\Provider\en_US\Address;
use Faker\Provider\en_US\Company;
use App\Models\Train;
class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $train_1 = new Train();
        $train_1->company = 'Trenitalia';
        $train_1->origin_station = 'Frosinone';
        $train_1->destination_station = 'Roma Tiburtina';
        $train_1->departure_hour = '08:20';
        $train_1->arrival_hour = '09:20';
        $train_1->train_code = 'FR-09304';
        $train_1->number_of_coaches = $faker->randomDigit();
        $train_1->on_time = 1;
        $train_1->cancelled = 0;
        $train_1->departure_date = '2024-02-15';
        $train_1->arrival_date = '2024-02-15';
    $train_1->save();

    $train_2 = new Train();
        $train_2->company = 'Italo';
        $train_2->origin_station = 'Foggia';
        $train_2->destination_station = 'Bologna Centrale';
        $train_2->departure_hour = '14:15';
        $train_2->arrival_hour = '20:03';
        $train_2->train_code = '9928';
        $train_2->number_of_coaches = $faker->randomDigit();
        $train_2->on_time = 1;
        $train_2->cancelled = 0;
        $train_2->departure_date = '2024-02-15';
        $train_2->arrival_date = '2024-02-15';
    $train_2->save();

    $train_3 = new Train();
        $train_3->company = 'Trenitalia';
        $train_3->origin_station = 'Vicenza';
        $train_3->destination_station = 'Padova';
        $train_3->departure_hour = '20:20';
        $train_3->arrival_hour = '20:52';
        $train_3->train_code = 'RE-17332';
        $train_3->number_of_coaches = $faker->randomDigit();
        $train_3->on_time = 1;
        $train_3->cancelled = 0;
        $train_3->departure_date = '2024-02-15';
        $train_3->arrival_date = '2024-02-15';
    $train_3->save();

        for($i=0; $i<20; $i++){
            $new_train = new Train();
            // if($i<2){
            //     $new_train->departure_date = '2024-02-15';
            //     $new_train->arrival_date = '2024-02-15';
            // }else{
                $new_train->company = $faker->company();
                $new_train->origin_station = $faker->city();
                $new_train->destination_station = $faker->city();
                $new_train->departure_hour = $faker->time('H:i');
                $new_train->arrival_hour = $faker->time('H:i');
                $new_train->train_code = $faker->bothify('??-#####');
                $new_train->number_of_coaches = $faker->randomDigit();
                $new_train->on_time = 1;
                $new_train->cancelled = 0;
                $new_train->departure_date = $faker->date('Y/m/d');
                $new_train->arrival_date = $faker->date('Y/m/d');
                $new_train->save();
            // }
        }
    }
}
