<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstCardAbility2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('mst_card_ability', function (Blueprint $table){
    $table->id();
    $table->integer('mst_card_id');
    $table->integer('hp');
    $table->integer('mp');
    $table->integer('strength');
    $table->integer('intelligence');
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
DROP TABLE 'mst_card_ability';
SQL;
        DB::statement($sql);
    }
}

