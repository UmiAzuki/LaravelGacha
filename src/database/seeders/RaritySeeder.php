<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RaritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mst_rarity')->insert([
            [
                'id' => 1,
                'name' => 'NORMAL',
            ],
            [
                'id' => 2,
                'name' => 'NORMAL+',
            ],
            [
                'id' => 3,
                'name' => 'RARE',
            ],
            [
                'id' => 4,
                'name' => 'RARE+',
            ],
            [
                'id' => 5,
                'name' => 'SRARE',
            ],
        ]);
    }
}
