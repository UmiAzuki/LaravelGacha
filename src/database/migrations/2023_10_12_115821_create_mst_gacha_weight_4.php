<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateMstGachaWeight4 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('mst_gacha_weight', function (Blueprint $table){
    $table->id();
    $table->integer('gacha_id');
    $table->integer('rarity_id');
    $table->integer('weight');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $sql = <<<SQL
DROP TABLE 'mst_gacha_weight';
SQL;
        DB::statement($sql);
    }
}


