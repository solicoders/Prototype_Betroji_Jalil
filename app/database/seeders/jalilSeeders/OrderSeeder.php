<?php

namespace Database\Seeders\jalilSeeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrderSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table("orders")->insert([
            [
                'nom' => 'Jalil',
                'city' => 'Tetouan',
                'quantity' => 2,
                'productId' => 1,
                'created_at' => $now
            ],
            [
                'nom' => 'Hamid',
                'city' =>'Tanger',
                'quantity' => 6,
                'productId' => 1,
                'created_at' => $now
            ],
            [
                'nom' => 'Soufiane',
                'city' => 'Tanger',
                'quantity' => 20,
                'productId' => 2,
                'created_at' => $now
            ]
        ]);
    }
}
