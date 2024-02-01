<?php

namespace Database\Seeders\jalilSeeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table("products")->insert([
            [
                'nom' => 'Smart watch',
                'description' => 'Bluetooth Answer Call, Bluetooth Dial Call, Messages Reminder, Alarm clock, Timer, Weather, Music remote, Camera remote, Find phone, Calculator, Dynamic watch face, watch face market (100+ watch faces), ',
                'quantity' => 15,
                'prix' => 300,
                'created_at' => $now
            ],
            [
                'nom' => 'Iphone 12',
                'description' => 'Simple Set: 1 X Mobile Phone, 1 X Charger, 1 X Data Cable',
                'quantity' => 6,
                'prix' => 10120,
                'created_at' => $now
            ],
            [
                'nom' => 'PC Screen',
                'description' => 'ELSA 34 Inch Display 120Hz Display WQHD Desktop Gameing Computer Screen 3440x1440 Monitor 34G1',
                'quantity' => 20,
                'prix' => 3500,
                'created_at' => $now
            ]
        ]);
    }
}
