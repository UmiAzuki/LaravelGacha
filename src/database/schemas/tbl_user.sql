CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL COMMENT 'User ID',
  `age` tinyint(3) UNSIGNED COMMENT 'User age',
  PRIMARY KEY (`user_id`),
  KEY `id_age` (`user_id`, `age`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin COMMENT='User management table';