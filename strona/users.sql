-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 16 Sty 2020, 22:07
-- Wersja serwera: 10.4.8-MariaDB
-- Wersja PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `ksiegarnia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `adress`, `date`, `password`, `email`) VALUES
(1, 'Marcinek', 'Komar', 'addw', '2020-01-18', 'qwertyuiop', ''),
(2, 'Justynamarcinek', 'komar', 'Kamila Baczynskiego 4 / m 68', '2020-01-16', 'qwertyuiop', 'dssd@gmail.com'),
(3, 'Justyna', 'Replin', 'Kamila Baczynskiego 4 / m 68', '2020-01-10', 'qwertyuiop', 'justynareplin@gmail.com'),
(4, 'cdscd', '', '', '0000-00-00', '', ''),
(5, 'a', '', '', '0000-00-00', '', ''),
(6, 'asxsa', '', '', '0000-00-00', '', ''),
(7, 'fewfeefw', 'afasvsd', '', '0000-00-00', '', 'afsfs'),
(8, '', '', '', '0000-00-00', '', 'njadsajnsd@gmail.com'),
(9, 'dda', 'cCSA', '', '0000-00-00', '', ''),
(10, 'dfghjkl', 'dfghjk', '', '0000-00-00', '', ''),
(11, 'cscsc', 'esse', '', '0000-00-00', '', ''),
(12, 'csces', '', '', '0000-00-00', '', ''),
(13, 'sasasa', '', '', '0000-00-00', '', ''),
(14, 'dacd', '', '', '0000-00-00', '', ''),
(15, 'qwertyuiop', 'qwertyuiop', 'Kamila Baczynskiego 4 / m 68', '2020-01-17', 'qwertyuiop', 'dsdsn@gmail.com'),
(16, 'Justyna', 'Replin', 'Kamila', '2020-01-24', 'qwertyuiop', 'csdsin@gmail.com');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
