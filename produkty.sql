-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Maj 2020, 12:45
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `sklep`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkty`
--

CREATE TABLE `produkty` (
  `symbol` varchar(5) NOT NULL,
  `nazwa` text CHARACTER SET utf16 COLLATE utf16_polish_ci NOT NULL,
  `kat` text CHARACTER SET utf16 COLLATE utf16_polish_ci NOT NULL,
  `sztuk` int(11) NOT NULL,
  `cena` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Zrzut danych tabeli `produkty`
--

INSERT INTO `produkty` (`symbol`, `nazwa`, `kat`, `sztuk`, `cena`) VALUES
('FS001', 'XYZ Siemens 90', 'drukarki', 6, 499),
('FS002', 'CT-70 Siemens', 'laptopy', 7, 1599),
('FS003', 'TYF LG 89', 'skaner', 3, 379),
('FS004', 'PTI LG 45', 'laptop', 2, 1899),
('FS005', 'RT Siemens 100', 'drukarka', 6, 2549);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`symbol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
