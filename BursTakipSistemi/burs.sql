-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 01 Ara 2022, 22:55:17
-- Sunucu sürümü: 10.4.18-MariaDB
-- PHP Sürümü: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `burs`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bursalan`
--

CREATE TABLE `bursalan` (
  `id` int(11) NOT NULL,
  `adsoyad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `bursfiyat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `bursalan`
--

INSERT INTO `bursalan` (`id`, `adsoyad`, `telefon`, `email`, `bursfiyat`) VALUES
(3, 'Hilal İnce', '05478526545', 'muratcan_123213@gmail.com', 1000),
(4, 'Mürvet Kara', '05687896545', 'murvet.45855@gmail.com', 1600),
(5, 'Sedat Doğan', '05478526545', 'sedat_45631@gmail.com', 1750);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bursveren`
--

CREATE TABLE `bursveren` (
  `id` int(11) NOT NULL,
  `adsoyad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `bagis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `bursveren`
--

INSERT INTO `bursveren` (`id`, `adsoyad`, `telefon`, `email`, `bagis`) VALUES
(11, 'Nihat İnce', '05458345445', 'nht.7812@gmail.com', 1000),
(12, 'Ahmet Koçak', '05486874852', 'ahmet_745854@gmail.com', 2300),
(15, 'Murat İnce', '05963254125', 'muratcan_123213@gmail.com', 650),
(16, 'Dursun İnce', '05479625245', 'dursun_213453@gmail.com', 1750);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `giris`
--

CREATE TABLE `giris` (
  `id` int(11) NOT NULL,
  `kullanici` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `giris`
--

INSERT INTO `giris` (`id`, `kullanici`, `sifre`) VALUES
(1, 'admin', '1234');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bursalan`
--
ALTER TABLE `bursalan`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `bursveren`
--
ALTER TABLE `bursveren`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `giris`
--
ALTER TABLE `giris`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bursalan`
--
ALTER TABLE `bursalan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `bursveren`
--
ALTER TABLE `bursveren`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `giris`
--
ALTER TABLE `giris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
