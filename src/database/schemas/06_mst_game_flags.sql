-- セットアップ
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET CHARSET utf8mb4;
-- テーブル破棄
DROP TABLE IF EXISTS `mst_game_flags`;

-- テーブル作成
CREATE TABLE `tbl_game_flags` (
    `id` int(1) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `flag_name` VARCHAR(32) NOT NULL,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- 実データ入力
insert into `tbl_game_flags`(`flag_name`) values('pending'), ('user win'), ('user lose');
