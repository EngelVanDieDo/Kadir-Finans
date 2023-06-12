-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 Haz 2023, 22:20:19
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `yorum-ajax`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bilet`
--

CREATE TABLE `bilet` (
  `ID` int(30) NOT NULL,
  `kod` varchar(8) NOT NULL,
  `kullanıcı_ad` varchar(30) NOT NULL,
  `ip_adresi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kisiler`
--

CREATE TABLE `kisiler` (
  `ID` int(11) NOT NULL,
  `kullanıcı_ad` varchar(30) NOT NULL,
  `kullanıcı_sifre` varchar(30) NOT NULL,
  `ad` varchar(30) NOT NULL,
  `soyad` varchar(30) NOT NULL,
  `ban` int(1) NOT NULL,
  `admin` int(1) NOT NULL,
  `ip_adresi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `kisiler`
--

INSERT INTO `kisiler` (`ID`, `kullanıcı_ad`, `kullanıcı_sifre`, `ad`, `soyad`, `ban`, `admin`, `ip_adresi`) VALUES
(1, 'Admin', '13', 'Admin', 'Admin', 0, 1, '::1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `ID` int(30) NOT NULL,
  `tarih` varchar(15) NOT NULL,
  `baslik` varchar(15) NOT NULL,
  `icerik` varchar(150) NOT NULL,
  `image` varchar(30) NOT NULL,
  `eklenme_tarih` varchar(30) NOT NULL,
  `eklenme_zaman` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tb_upload`
--

CREATE TABLE `tb_upload` (
  `id` int(11) NOT NULL,
  `image` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `ID` int(11) NOT NULL,
  `ad` varchar(30) NOT NULL,
  `soyad` varchar(30) NOT NULL,
  `yorum` varchar(300) NOT NULL,
  `gün` varchar(15) NOT NULL,
  `zaman` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bilet`
--
ALTER TABLE `bilet`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `kisiler`
--
ALTER TABLE `kisiler`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `tb_upload`
--
ALTER TABLE `tb_upload`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bilet`
--
ALTER TABLE `bilet`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kisiler`
--
ALTER TABLE `kisiler`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `tb_upload`
--
ALTER TABLE `tb_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
