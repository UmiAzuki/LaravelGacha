<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstCard1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('mst_card', function (Blueprint $table){
    $table->id();
    $table->integer('rarity_id');
    $table->string('card_name');
    $table->string('file_name');
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
DROP TABLE 'mst_card';
SQL;
        DB::statement($sql);
    }
}
