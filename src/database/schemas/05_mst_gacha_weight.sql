-- セットアップ
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET CHARSET utf8mb4;
-- テーブル破棄
DROP TABLE IF EXISTS `mst_gacha_weight`;
-- テーブル作成
CREATE TABLE `mst_gacha_weight` (
    `id` int(11) NOT NULL PRIMARY KEY,
    `gacha_id` int(11) NOT NULL,
    `rarity_id` int(11) NOT NULL,
    `weight` int(4) NOT NULL,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- 夏のインターンガチャ重み付け
INSERT INTO `mst_gacha_weight` (`id`, `gacha_id`, `rarity_id`, `weight`)
VALUES -- NORMAL
    (1, 1, 1, 50),
    -- NORMAL+
    (2, 1, 2, 30),
    -- RARE
    (3, 1, 3, 15),
    -- RARE+
    (4, 1, 4, 4),
    -- SRARE
    (5, 1, 5, 1);
