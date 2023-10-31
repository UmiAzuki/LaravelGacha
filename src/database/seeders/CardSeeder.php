<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mst_card')->insert([
            [
                'id' => 1,
                'rarity_id' => 1,
                'card_name' => 'test1',
                'file_name' => 'normal/f017.png',
            ],
            [
                'id' => 2,
                'rarity_id' => 2,
                'card_name' => 'test2',
                'file_name' => 'normal/f021.png',
            ],
            [
                'id' => 3,
                'rarity_id' => 3,
                'card_name' => 'test3',
                'file_name' => 'normal/f029.png',
            ],
            [
                'id' => 4,
                'rarity_id' => 4,
                'card_name' => 'test4',
                'file_name' => 'normal/f038.png',
            ],
            [
                'id' => 5,
                'rarity_id' => 5,
                'card_name' => 'test5',
                'file_name' => 'normal/f045.png',
            ],
        ]);
    }
}
