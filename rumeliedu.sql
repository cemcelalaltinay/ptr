-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 14 Nis 2020, 18:06:17
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `rumeliedu`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abdulsametciftci`
--

CREATE TABLE `abdulsametciftci` (
  `page_id` int(100) NOT NULL,
  `page_title` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `page_text` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `page_img` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `page_kategori` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `page_info` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `abdulsametciftci`
--

INSERT INTO `abdulsametciftci` (`page_id`, `page_title`, `page_text`, `page_img`, `page_kategori`, `page_info`) VALUES
(1, 'Çiftçi ilk yazı', 'Çiftçi ilk yazıÇiftçi ilk yazıÇiftçi ilk yazıÇiftçi ilk yazıÇiftçi ilk yazıÇiftçi ilk yazı', 'img/post/post_12.png', 'Çiftçi ilk kategori', 'Çiftçi ilk info');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abdulsametefendioglu`
--

CREATE TABLE `abdulsametefendioglu` (
  `page_id` int(100) NOT NULL,
  `page_title` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `page_text` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `page_img` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `page_kategori` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `page_info` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `abdulsametefendioglu`
--

INSERT INTO `abdulsametefendioglu` (`page_id`, `page_title`, `page_text`, `page_img`, `page_kategori`, `page_info`) VALUES
(1, 'Efendioğlu ilk yazısı', 'Efendioğlu ilk yazısıEfendioğlu ilk yazısıEfendioğlu ilk yazısıEfendioğlu ilk yazısıEfendioğlu ilk yazısı', 'img/post/post_12.png', 'Efendioğlu ilk kategori', 'Efendioğlu ilk info');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `acelyabasak`
--

CREATE TABLE `acelyabasak` (
  `page_id` int(100) NOT NULL,
  `page_title` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `page_text` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `page_img` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `page_kategori` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `page_info` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `acelyabasak`
--

INSERT INTO `acelyabasak` (`page_id`, `page_title`, `page_text`, `page_img`, `page_kategori`, `page_info`) VALUES
(1, 'Açelyanın İLK yazısı', 'Açelya Açelya Açelya Açelya AçelyaAçelya Açelya Açelya Açelya AçelyaAçelya Açelya Açelya Açelya AçelyaAçelya Açelya Açelya Açelya AçelyaAçelya Açelya Açelya Açelya Açelya', 'img/post/post_12.png', 'Açelya Kategori', 'Açelya info');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `batuhanhuner`
--

CREATE TABLE `batuhanhuner` (
  `page_id` int(100) NOT NULL,
  `page_title` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `page_text` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `page_img` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `page_kategori` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `page_info` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `batuhanhuner`
--

INSERT INTO `batuhanhuner` (`page_id`, `page_title`, `page_text`, `page_img`, `page_kategori`, `page_info`) VALUES
(1, 'Batuhan ilk yazısı', 'Batuhan ilk yazısıBatuhan ilk yazısıBatuhan ilk yazısıBatuhan ilk yazısıBatuhan ilk yazısı', 'img/post/post_12.png', 'Batuhan ilk kategorisi', 'Batuhan ilk info');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cemcelalaltinay`
--

CREATE TABLE `cemcelalaltinay` (
  `page_id` int(100) NOT NULL,
  `page_title` varchar(50) NOT NULL,
  `page_text` text NOT NULL,
  `page_img` varchar(50) NOT NULL,
  `page_kategori` varchar(50) NOT NULL,
  `page_info` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `cemcelalaltinay`
--

INSERT INTO `cemcelalaltinay` (`page_id`, `page_title`, `page_text`, `page_img`, `page_kategori`, `page_info`) VALUES
(1, 'Merhaba Bu Benim İlk Yazım', 'Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla Bla ', 'img/post/post_12.png', 'Yeni dünya düzeni', 'henüz atanmamış bölge'),
(2, 'Düzenleme', ' Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu Blu', 'img/post/post_12.png', 'Güzel Yaşam', 'Düzenleme'),
(3, 'Bu da bir yazı sonuçta', 'bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. bu bir yazıdır. ', 'img/post/post_18.png', 'Dünya Güzellikleri', 'Bilgi Düzenleme'),
(4, 'Yeni yazı ekle', 'Yeni yazi içerik eklemesi', 'img/post/post_12.png', 'Giriş denemesi', 'ekleme denemesi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `damlayildiz`
--

CREATE TABLE `damlayildiz` (
  `page_id` int(100) NOT NULL,
  `page_title` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `page_text` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `page_img` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `page_kategori` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `page_info` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `damlayildiz`
--

INSERT INTO `damlayildiz` (`page_id`, `page_title`, `page_text`, `page_img`, `page_kategori`, `page_info`) VALUES
(1, 'Damla İlk Yazısı', 'Damla İlk YazısıDamla İlk YazısıDamla İlk YazısıDamla İlk YazısıDamla İlk YazısıDamla İlk YazısıDamla İlk YazısıDamla İlk YazısıDamla İlk Yazısı', 'img/post/post_12.png', 'Damla İlk Kategoi', 'Damla İlk Yazısı info ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `patron`
--

CREATE TABLE `patron` (
  `user_id` int(11) NOT NULL,
  `user_admin` varchar(70) COLLATE utf8mb4_turkish_ci NOT NULL,
  `user_pass` varchar(70) COLLATE utf8mb4_turkish_ci NOT NULL,
  `user_mail` varchar(200) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `patron`
--

INSERT INTO `patron` (`user_id`, `user_admin`, `user_pass`, `user_mail`) VALUES
(1, 'cemcelalaltinay', '123456', 'cemcelal95@hotmail.com'),
(2, 'acelyabasak', 'Acelya2020.', 'acelyabasak2015@gmail.com'),
(3, 'batuhanhuner', 'Batuhan2020.', 'batu@batu.com'),
(4, 'damlayildiz', 'Damla2020.', 'damla@damla.com'),
(5, 'senaavcu', 'Sena2020.', 'sena@siskosena.com'),
(6, 'abdulsametciftci', 'Ciftci2020.', 'abdulsamet@ciftci.com'),
(7, 'abdulsametefendioglu', 'Efendioglu2020.', 'abdulsamet@efendioglu.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `senaavcu`
--

CREATE TABLE `senaavcu` (
  `page_id` int(100) NOT NULL,
  `page_title` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `page_text` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `page_img` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `page_kategori` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `page_info` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `senaavcu`
--

INSERT INTO `senaavcu` (`page_id`, `page_title`, `page_text`, `page_img`, `page_kategori`, `page_info`) VALUES
(1, 'Sena İlk Yazsı', 'Ben bir şişkoyum Ben bir şişkoyumBen bir şişkoyumBen bir şişkoyumBen bir şişkoyumaa', 'img/post/post_12.png', 'Sena İlk kategori', 'Sena İlk Yazsı info'),
(2, 'Düzenleme', 'qrqr', 'img/post/post_12.png', 'wafaw', 'afawf');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `abdulsametciftci`
--
ALTER TABLE `abdulsametciftci`
  ADD PRIMARY KEY (`page_id`);

--
-- Tablo için indeksler `abdulsametefendioglu`
--
ALTER TABLE `abdulsametefendioglu`
  ADD PRIMARY KEY (`page_id`);

--
-- Tablo için indeksler `acelyabasak`
--
ALTER TABLE `acelyabasak`
  ADD PRIMARY KEY (`page_id`);

--
-- Tablo için indeksler `batuhanhuner`
--
ALTER TABLE `batuhanhuner`
  ADD PRIMARY KEY (`page_id`);

--
-- Tablo için indeksler `cemcelalaltinay`
--
ALTER TABLE `cemcelalaltinay`
  ADD PRIMARY KEY (`page_id`);

--
-- Tablo için indeksler `damlayildiz`
--
ALTER TABLE `damlayildiz`
  ADD PRIMARY KEY (`page_id`);

--
-- Tablo için indeksler `patron`
--
ALTER TABLE `patron`
  ADD PRIMARY KEY (`user_id`);

--
-- Tablo için indeksler `senaavcu`
--
ALTER TABLE `senaavcu`
  ADD PRIMARY KEY (`page_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `abdulsametciftci`
--
ALTER TABLE `abdulsametciftci`
  MODIFY `page_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `abdulsametefendioglu`
--
ALTER TABLE `abdulsametefendioglu`
  MODIFY `page_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `acelyabasak`
--
ALTER TABLE `acelyabasak`
  MODIFY `page_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `batuhanhuner`
--
ALTER TABLE `batuhanhuner`
  MODIFY `page_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `cemcelalaltinay`
--
ALTER TABLE `cemcelalaltinay`
  MODIFY `page_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `damlayildiz`
--
ALTER TABLE `damlayildiz`
  MODIFY `page_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `patron`
--
ALTER TABLE `patron`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `senaavcu`
--
ALTER TABLE `senaavcu`
  MODIFY `page_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
