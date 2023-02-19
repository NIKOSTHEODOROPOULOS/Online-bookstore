-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 06 Ιαν 2019 στις 23:32:18
-- Έκδοση διακομιστή: 10.1.31-MariaDB
-- Έκδοση PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `nikos2`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `vivlia`
--

CREATE TABLE `vivlia` (
  `ID` int(11) NOT NULL,
  `BOOK` varchar(25) NOT NULL,
  `N_BOOK` int(11) NOT NULL,
  `BOOK_two` varchar(25) NOT NULL,
  `N_BOOK_two` int(11) NOT NULL,
  `BOOK_Three` varchar(25) NOT NULL,
  `N_BOOK_Three` int(11) NOT NULL,
  `BOOK_Four` varchar(25) NOT NULL,
  `N_BOOK_Four` int(11) NOT NULL,
  `BOOK_Five` varchar(25) NOT NULL,
  `N_BOOK_Five` int(11) NOT NULL,
  `Email` text NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `vivlia`
--

INSERT INTO `vivlia` (`ID`, `BOOK`, `N_BOOK`, `BOOK_two`, `N_BOOK_two`, `BOOK_Three`, `N_BOOK_Three`, `BOOK_Four`, `N_BOOK_Four`, `BOOK_Five`, `N_BOOK_Five`, `Email`, `cost`) VALUES
(1, 'Harry Potter και το καταρ', 10, 'THE LORD OF THE RING', 0, 'Εγκλημα και τιμωρία', 0, 'Οδύσσεια', 0, 'Ζορμπάς', 0, 'kkkk@coo.com', 105);

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `vivlia`
--
ALTER TABLE `vivlia`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `vivlia`
--
ALTER TABLE `vivlia`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
