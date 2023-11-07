<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
          RaritySeeder::class,
          CardAbilitySeeder::class,
          CardSeeder::class,
          GachaSeeder::class,
          GachaWeightSeeder::class,
        ]);
    }
}
