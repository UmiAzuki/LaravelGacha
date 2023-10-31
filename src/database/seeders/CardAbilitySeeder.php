<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardAbilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mst_card_ability')->insert([
            [
                'id' => 1,
                'mst_card_id' => 1,
                'hp' => 100,
                'mp' => 100,
                'strength' => 100,
                'intelligence' => 100,
            ],
            [
                'id' => 2,
                'mst_card_id' => 2,
                'hp' => 200,
                'mp' => 200,
                'strength' => 200,
                'intelligence' => 200,
            ],
            [
                'id' => 3,
                'mst_card_id' => 3,
                'hp' => 300,
                'mp' => 300,
                'strength' => 300,
                'intelligence' => 300,
            ],
            [
                'id' => 4,
                'mst_card_id' => 4,
                'hp' => 400,
                'mp' => 400,
                'strength' => 400,
                'intelligence' => 400,
            ],
            [
                'id' => 5,
                'mst_card_id' => 5,
                'hp' => 500,
                'mp' => 500,
                'strength' => 500,
                'intelligence' => 500,
            ],
        ]);
    }
}

