--
-- テーブルの構造 `mst_rarity`
--

CREATE TABLE `mst_rarity` (
    `id` int(11) NOT NULL,
    `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `mst_rarity`
--

-- INSERT INTO `mst_rarity` (`id`, `name`) VALUES
-- (1, 'NORMAL'),
-- (2, 'NORMAL+'),
-- (3, 'RARE'),
-- (4, 'RARE+'),
-- (5, 'SRARE');

