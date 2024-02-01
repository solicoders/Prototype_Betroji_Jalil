<?php
 
namespace Database\Seeders\jalilSeeders;
 
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
            ProductSeeder::class,
            OrderSeeder::class,
        ]);
    }
}