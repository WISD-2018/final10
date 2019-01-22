-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `restaurants`;
CREATE TABLE `restaurants` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `restaurants` (`id`, `name`, `photo`, `created_at`, `updated_at`) VALUES
(1,	'勤美麵食館',	'https://i.imgur.com/rLZ7YsJ.jpg',	'2019-01-09 16:18:30',	'2019-01-22 10:11:00'),
(2,	'湯才滷味',	'https://i.imgur.com/05HlTGX.jpg',	'2018-12-28 01:51:35',	'2019-01-22 10:11:00'),
(3,	'李記燒臘便當店',	'https://i.imgur.com/ehpdZrY.jpg',	'2018-12-24 06:36:05',	'2019-01-22 10:11:00'),
(4,	'高佳便當',	'https://i.imgur.com/QteWYQZ.jpg',	'2018-12-27 01:38:13',	'2019-01-22 10:11:00'),
(5,	'紅豆餅店',	'https://i.imgur.com/W0R31CJ.jpg',	'2019-01-20 11:56:35',	'2019-01-22 10:11:00'),
(6,	'傑克與魔豆',	'https://i.imgur.com/J45n3LO.jpg',	'2018-12-24 00:00:12',	'2019-01-22 10:11:00'),
(7,	'廟口米糕',	'https://i.imgur.com/s2yq6kv.jpg',	'2019-01-21 06:45:11',	'2019-01-22 10:11:00'),
(8,	'鄉巴佬美食館',	'https://i.imgur.com/KVQViLv.jpg',	'2019-01-11 21:33:42',	'2019-01-22 10:11:00'),
(9,	'餃佼者',	'https://i.imgur.com/ejphldi.jpg',	'2019-01-20 11:15:40',	'2019-01-22 10:11:00'),
(10,	'小噗拉麵',	'https://i.imgur.com/QDyxGYI.jpg',	'2018-12-26 18:44:56',	'2019-01-22 10:11:00'),
(11,	'平凡之屋',	'https://i.imgur.com/MiqveVD.jpg',	'2018-12-25 13:36:24',	'2019-01-22 10:11:00'),
(12,	'早安美之城',	'https://i.imgur.com/DJJsB4i.jpg',	'2019-01-13 01:28:22',	'2019-01-22 10:11:00'),
(13,	'校園餐廳',	'https://i.imgur.com/N3cMqWJ.jpg',	'2019-01-13 06:14:30',	'2019-01-22 10:11:00'),
(14,	'大台北肉羹',	'https://i.imgur.com/nZ7S2eB.jpg',	'2018-12-28 12:44:22',	'2019-01-22 10:11:00'),
(15,	'辣媽創意廚房',	'https://i.imgur.com/uZs79DN.jpg',	'2019-01-20 20:02:35',	'2019-01-22 10:11:00'),
(16,	'Q喵食堂',	'https://i.imgur.com/4QHZMmJ.jpg',	'2019-01-21 01:53:58',	'2019-01-22 10:11:00'),
(17,	'何記港式燒臘',	'https://i.imgur.com/KtxrLkh.jpg',	'2019-01-07 12:57:50',	'2019-01-22 10:11:00'),
(18,	'龍門現炒',	'https://i.imgur.com/dE9xwO3.jpg',	'2019-01-04 04:25:42',	'2019-01-22 10:11:00'),
(19,	'湯材滷味',	'https://i.imgur.com/oXvxl8F.jpg',	'2018-12-24 05:17:44',	'2019-01-22 10:11:00'),
(20,	'呼拉貓鬆餅舖',	'https://i.imgur.com/InLaTPT.jpg',	'2019-01-14 05:46:42',	'2019-01-22 10:11:00');

-- 2019-01-22 18:33:10
