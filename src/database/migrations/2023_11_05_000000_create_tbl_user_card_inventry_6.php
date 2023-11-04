<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTblUserCardInventry6 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('tbl_user_card_inventory', function (Blueprint $table){
    $table->id();
    $table->integer('user_id');
    $table->integer('card_id');
    $table->integer('num');
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
DROP TABLE 'tbl_user_card_inventory';
SQL;
        DB::statement($sql);
    }
}

