<?php

use Illuminate\Database\Migrations\Migration;

class CreateTblUser1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = <<<SQL
CREATE TABLE `tbl_user` (
  `user_id` int NOT NULL COMMENT 'User ID',
  `age` tinyint UNSIGNED DEFAULT NULL COMMENT 'User age',
  PRIMARY KEY (`user_id`),
  KEY `id_age` (`user_id`, `age`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin COMMENT='User management table';
SQL;
        DB::statement($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $sql = <<<SQL
DROP TABLE `tbl_user`;
SQL;
        DB::statement($sql);
    }
}

