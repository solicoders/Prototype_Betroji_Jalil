<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
 
class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
 
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        $this->call([
            \Database\Seeders\jalilSeeders\ProductSeeder::class,
            \Database\Seeders\jalilSeeders\OrderSeeder::class,
        ]);
    }
}