<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GachaWeightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mst_gacha_weight')->insert([
            [
                'id' => 1,
                'gacha_id' => 1,
                'rarity_id' => 1,
                'weight' => 50,
            ],
            [
                'id' => 2,
                'gacha_id' => 1,
                'rarity_id' => 2,
                'weight' => 30,
            ],
            [
                'id' => 3,
                'gacha_id' => 1,
                'rarity_id' => 3,
                'weight' => 15,
            ],
            [
                'id' => 4,
                'gacha_id' => 1,
                'rarity_id' => 4,
                'weight' => 4,
            ],
            [
                'id' => 5,
                'gacha_id' => 1,
                'rarity_id' => 5,
                'weight' => 1,
            ],
        ]);
    }
}
