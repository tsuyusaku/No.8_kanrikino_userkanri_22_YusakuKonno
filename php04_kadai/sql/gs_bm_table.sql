-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 2021 年 4 月 01 日 13:51
-- サーバのバージョン： 5.7.32
-- PHP のバージョン: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_kadai_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `title` varchar(64) NOT NULL,
  `url` text NOT NULL,
  `isbn` text NOT NULL,
  `comment` text NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `title`, `url`, `isbn`, `comment`, `indate`) VALUES
(1, '失敗の本質', 'www.test.com', '0', 'なるほどー', '2021-03-29 11:39:25'),
(12, 'ファクトフルネス', 'https://books.google.co.jp/books?id=4GqdwAEACAAJ&dq=%E3%83%95%E3%82%A1%E3%82%AF%E3%83%88%E3%83%95%E3%83%AB%E3%83%8D%E3%82%B9&hl=ja&newbks=1&newbks_redir=0&sa=X&ved=2ahUKEwiQzLP8z9XvAhXWZt4KHUO3CfQQ6AEwAHoECAIQAg', '9784822289607', '買って勧められてもいるのに読んでません。。。', '2021-03-29 23:28:17'),
(14, '失敗の本質', 'https://www.google.co.jp/books/edition/%E5%A4%B1%E6%95%97%E3%81%AE%E6%9C%AC%E8%B3%AA/YC2LMAEACAAJ?hl=ja', '9784478021552', '日本は何も変わっていない！', '2021-03-29 23:38:15'),
(18, '動かして学ぶ! Laravel開発入門', 'https://www.amazon.co.jp/%E5%8B%95%E3%81%8B%E3%81%97%E3%81%A6%E5%AD%A6%E3%81%B6-Laravel%E9%96%8B%E7%99%BA%E5%85%A5%E9%96%80-NEXT-ONE-%E5%B1%B1%E5%B4%8E/dp/4798168653/ref=sr_1_3?dchild=1&keywords=laravel&qid=1617031005&s=books&sr=1-3', '9784798168654', '山崎校長さすがです！\r\n', '2021-03-30 00:18:13'),
(23, 'なせこの店で買ってしまうのか', 'https://www.amazon.co.jp/%E3%81%AA%E3%81%9C%E3%81%93%E3%81%AE%E5%BA%97%E3%81%A7%E8%B2%B7%E3%81%A3%E3%81%A6%E3%81%97%E3%81%BE%E3%81%86%E3%81%AE%E3%81%8B-%E3%82%B7%E3%83%A7%E3%83%83%E3%83%94%E3%83%B3%E3%82%B0%E3%81%AE%E7%A7%91%E5%AD%A6-%E3%83%8F%E3%83%A4%E3%82%AB%E3%83%AF%E3%83%BB%E3%83%8E%E3%83%B3%E3%83%95%E3%82%A3%E3%82%AF%E3%82%B7%E3%83%A7%E3%83%B3%E6%96%87%E5%BA%AB-%E3%83%91%E3%82%B3%E3%83%BB%E3%82%A2%E3%83%B3%E3%83%80%E3%83%BC%E3%83%92%E3%83%AB/dp/4150504067/ref=sr_1_1?dchild=1&keywords=%E3%81%A4%E3%81%84%E3%81%93%E3%81%AE%E5%BA%97%E3%81%A7&qid=1617032169&s=books&sr=1-1', '9784150504069', 'ショッピングを科学するという考え方がよかった', '2021-03-30 00:45:14'),
(24, '嫌われる勇気', 'https://www.amazon.co.jp/s?k=%E5%AB%8C%E3%82%8F%E3%82%8C%E3%82%8B%E5%8B%87%E6%B0%97&i=stripbooks', '9784478025819', '嫌われる勇気というタイトルってすげえな', '2021-04-01 22:41:00'),
(26, '1冊ですべて身につくHTML & CSSとWebデザイン入門講座', 'https://www.amazon.co.jp/1%E5%86%8A%E3%81%A7%E3%81%99%E3%81%B9%E3%81%A6%E8%BA%AB%E3%81%AB%E3%81%A4%E3%81%8FHTML-CSS%E3%81%A8Web%E3%83%87%E3%82%B6%E3%82%A4%E3%83%B3%E5%85%A5%E9%96%80%E8%AC%9B%E5%BA%A7-Mana/dp/4797398892?ref_=Oct_s9_apbd_orec_hd_bw_b2CjI&pf_rd_r=Y4Q2XMB84Z825V2B24KG&pf_rd_p=7d9f90a3-721c-5cb6-a55d-62f29333e52f&pf_rd_s=merchandised-search-10&pf_rd_t=BROWSE&pf_rd_i=525592', '9784797398892', '一応買ってみた', '2021-04-01 22:43:15');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
