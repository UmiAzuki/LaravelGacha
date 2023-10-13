-- セットアップ
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET CHARSET utf8mb4;

-- テーブル破棄
DROP TABLE IF EXISTS `mst_gacha`;
-- テーブル作成
CREATE TABLE `mst_gacha` (
    `id` int(11) NOT NULL PRIMARY KEY,
    `name` VARCHAR(64) NOT NULL,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

INSERT INTO `mst_gacha` (`id`, `name`)
VALUES (1, '夏のインターンガチャ');
