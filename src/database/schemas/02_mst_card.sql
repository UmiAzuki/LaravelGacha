
--
-- テーブルの構造 `mst_card`
--

CREATE TABLE `mst_card` (
    `id` int(11) NOT NULL,
    `rarity_id` tinyint(4) NOT NULL,
    `card_name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
    `file_name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
-- テーブルのデータのダンプ `mst_card`
--

INSERT INTO `mst_card` (
        `id`,
        `rarity_id`,
        `card_name`,
        `file_name`
    )
VALUES -- NORMAL
    (1, 1, 'test1', 'normal/f017.png'),
    (2, 1, 'test2', 'normal/f021.png'),
    (3, 1, 'test3', 'normal/f029.png'),
    -- NORMAL+
    (4, 2, 'test11', 'normalplus/f022.png'),
    (5, 2, 'test12', 'normalplus/f036.png'),
    -- RARE
    (6, 3, 'test21', 'rare/f001.png'),
    (7, 3, 'test22', 'rare/f003.png'),
    -- RARE+
    (8, 3, 'test31', 'rareplus/f090.png'),
    -- SUPER RARE
    (9, 5, 'test41', 'srare/f347.png');
