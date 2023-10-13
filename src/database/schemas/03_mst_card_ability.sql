-- セットアップ
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET CHARSET utf8mb4;
-- テーブル破棄
DROP TABLE IF EXISTS `mst_card_ability`;

-- テーブル作成
CREATE TABLE `mst_card_ability` (
    `id` int(11) NOT NULL PRIMARY KEY,
    `mst_card_id` int(11) NOT NULL,
    `hp` int(3) NOT NULL,
    `mp` int (3) NOT NULL,
    `strength` int(3) NOT NULL,
    `intelligence` int(3) NOT NULL,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

INSERT INTO `mst_card_ability` (`id`, `mst_card_id`, `hp`, `mp`, `strength`, `intelligence`) VALUES
(1, 1, 250, 30, 50, 50),
(2, 2, 300, 20 ,30, 20),
(3, 3, 400, 40 ,50, 30),
(4, 4, 200, 10 , 80, 30),
(5, 5, 500, 10 ,20, 10),
(6, 6, 300,50, 20, 100),
(7, 7, 250, 30, 50, 50),
(8, 8, 300, 20 ,30, 20),
(9, 9, 400, 40 ,50, 30);
