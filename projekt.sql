-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Sty 2021, 15:37
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projekt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `bohaterowie`
--

CREATE TABLE `bohaterowie` (
  `bohater_id` int(11) NOT NULL,
  `nazwa` varchar(15) COLLATE utf8mb4_polish_ci NOT NULL,
  `avatarUrl` varchar(50) COLLATE utf8mb4_polish_ci DEFAULT 'Obrazy/avatary/Aatrox.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `bohaterowie`
--

INSERT INTO `bohaterowie` (`bohater_id`, `nazwa`, `avatarUrl`) VALUES
(1, 'Aatrox', 'Obrazy/avatary/Aatrox.png'),
(2, 'Akali', 'Obrazy/avatary/Akali.png'),
(3, 'Ahri', 'Obrazy/avatary/Ahri.png'),
(4, 'Alistar', 'Obrazy/avatary/Alistar.png'),
(5, 'Amumu', 'Obrazy/avatary/Amumu.png'),
(6, 'Anivia', 'Obrazy/avatary/Anivia.png'),
(7, 'Annie', 'Obrazy/avatary/Annie.png'),
(8, 'Ashe', 'Obrazy/avatary/Ashe.png'),
(9, 'Aurelion Sol', 'Obrazy/avatary/AurelionSol.png'),
(10, 'Azir', 'Obrazy/avatary/Azir.png'),
(11, 'Bard', 'Obrazy/avatary/Bard.png'),
(30, 'test', 'Obrazy/avatary/');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `eventy`
--

CREATE TABLE `eventy` (
  `event_id` int(11) NOT NULL,
  `nazwa` varchar(40) COLLATE utf8mb4_polish_ci NOT NULL,
  `opis` varchar(2000) COLLATE utf8mb4_polish_ci DEFAULT NULL,
  `obrazUrl` varchar(40) COLLATE utf8mb4_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `eventy`
--

INSERT INTO `eventy` (`event_id`, `nazwa`, `opis`, `obrazUrl`) VALUES
(1, 'MSI ', 'g2 win', 'Obrazy/esport/MSI.jpg'),
(2, 'Worlds 2021', 'Dużo się działoo', 'Obrazy/esport/MSI.jpg'),
(4, '111', '111', 'Obrazy/esport/worlds2020.jpg'),
(5, 'aaaa', 'opis', 'Obrazy/esport/worlds2020.jpg'),
(6, 'Event', 'EVEnt', 'Obrazy/esport/worlds2020.jpg'),
(7, 'wydarzenie', 'lalalalalalala', 'Obrazy/esport/worlds2020.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `regiony`
--

CREATE TABLE `regiony` (
  `region_id` int(11) NOT NULL,
  `nazwa` varchar(15) COLLATE utf8mb4_polish_ci NOT NULL,
  `obrazUrl` varchar(100) COLLATE utf8mb4_polish_ci DEFAULT NULL,
  `ikonaUrl` varchar(100) COLLATE utf8mb4_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `regiony`
--

INSERT INTO `regiony` (`region_id`, `nazwa`, `obrazUrl`, `ikonaUrl`) VALUES
(1, 'Bandle City', 'Obrazy/Uniwersum/BandleCity.jpg', 'Obrazy/Uniwersum/Bandle_City_Crest_icon.png'),
(2, 'Bilgewater', 'Obrazy/Uniwersum/Bilgewater.jpg', 'Obrazy/Uniwersum/Bilgewater_Crest_icon.png'),
(3, 'Demacia', 'Obrazy/Uniwersum/Demacia.jpg', 'Obrazy/Uniwersum/Demacia_Crest_icon.png'),
(4, 'Frejlord', 'Obrazy/Uniwersum/Freljord.jpg', 'Obrazy/Uniwersum/Freljord_Crest_icon.png'),
(8, 'Góra Targon', 'Obrazy/Uniwersum/mounttargon.jpg', 'Obrazy/Uniwersum/Mount_Targon_Crest_icon.png'),
(9, 'NowyRegionn', 'Obrazy/Uniwersum/Demacia.jpg', 'Obrazy/Uniwersum/Mount_Targon_Crest_icon.png');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id_uzytkownika` int(11) NOT NULL,
  `login` varchar(14) COLLATE utf8mb4_polish_ci NOT NULL,
  `haslo` varchar(14) COLLATE utf8mb4_polish_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_polish_ci NOT NULL,
  `uprawnienia` varchar(16) COLLATE utf8mb4_polish_ci DEFAULT 'uzytkownik'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id_uzytkownika`, `login`, `haslo`, `email`, `uprawnienia`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'admin'),
(17, 'uzytkownik', 'uzytkownik', 'mojemail@op.pl', 'uzytkownik'),
(18, 'fanlola', 'fanlola', 'fanlola@op.pl', 'uzytkownik'),
(20, 'maciek', 'maciek', 'macius@interia.pl', 'uzytkownik'),
(25, 'testuser', 'testuser', 'testowe@gmail.com', 'admin'),
(26, 'useruser', 'useruser', 'user@op.pl', 'uzytkownik');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `bohaterowie`
--
ALTER TABLE `bohaterowie`
  ADD PRIMARY KEY (`bohater_id`);

--
-- Indeksy dla tabeli `eventy`
--
ALTER TABLE `eventy`
  ADD PRIMARY KEY (`event_id`);

--
-- Indeksy dla tabeli `regiony`
--
ALTER TABLE `regiony`
  ADD PRIMARY KEY (`region_id`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id_uzytkownika`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `bohaterowie`
--
ALTER TABLE `bohaterowie`
  MODIFY `bohater_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT dla tabeli `eventy`
--
ALTER TABLE `eventy`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `regiony`
--
ALTER TABLE `regiony`
  MODIFY `region_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id_uzytkownika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
