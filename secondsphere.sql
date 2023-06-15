-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:8889
-- Tid vid skapande: 15 jun 2023 kl 09:43
-- Serverversion: 5.7.34
-- PHP-version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `secondsphere`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `conditions`
--

CREATE TABLE `conditions` (
  `id` int(11) NOT NULL,
  `quality` varchar(30) NOT NULL,
  `meaning` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `conditions`
--

INSERT INTO `conditions` (`id`, `quality`, `meaning`) VALUES
(1, 'Aldrig använd, med etikett', 'En vara med etikett kvar är en vara som aldrig har använts och som fortfarande har de ursprungliga köpetiketterna på sig.'),
(2, 'Aldrig använd', 'En aldrig använd vara utan etikett är en vara som aldrig har använts och som inte visar några defekter eller förändringar.'),
(3, 'Mycket gott skick', 'En vara i mycket gott skick är en begagnad vara som endast är sparsamt använd och extremt väl omhändertagen, som kan uppvisa mindre defekter vid användning.'),
(4, 'Bra skick', 'En vara i bra skick är en begagnad vara som är använd men väl omhändertagen med en del defekter.'),
(5, 'Okej skick', 'En vara i okej skick är en begagnad vara som har använts ofta och som uppvisar defekter.');

-- --------------------------------------------------------

--
-- Tabellstruktur `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `brand` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `size` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `sold` tinyint(1) NOT NULL DEFAULT '0',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `userId` int(11) NOT NULL,
  `conditionId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `items`
--

INSERT INTO `items` (`id`, `product_name`, `image`, `brand`, `type`, `description`, `size`, `price`, `sold`, `updated`, `userId`, `conditionId`) VALUES
(1, 'hm byxa', 'https://images.unsplash.com/photo-1598532163257-ae3c6b2524b6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8aGFuZGJhZ3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=900&q=60', 'H&M', 'Jeans', 'Ett par mörkblåa jeans', '32', 70, 1, '2023-06-09 08:16:37', 2, 3),
(2, 'Snygg blazer', 'https://images.unsplash.com/photo-1598532163257-ae3c6b2524b6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8aGFuZGJhZ3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=900&q=60', 'H&#38;M', 'Blazer', 'Väl använd glittrig sportjacka med vinfläckar på', 'XL', 125, 0, '2023-06-09 08:15:50', 1, 5),
(3, 'Festlig långklänning', 'https://images.unsplash.com/photo-1598532163257-ae3c6b2524b6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8aGFuZGJhZ3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=900&q=60', 'Rodebjer', 'Klänning', 'En röd klänning i siden med stora blommor.', '34', 500, 1, '2023-06-09 08:25:36', 1, 1),
(4, 'En mycket fin strumpa', 'https://images.unsplash.com/photo-1598532163257-ae3c6b2524b6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8aGFuZGJhZ3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=900&q=60', 'Hemmasydda', 'Strumpa', 'En väldigt fin gul strumpa. Mycket älskad. ', '43', 3499, 1, '2023-06-15 09:22:51', 4, 3),
(5, 'Antikt armband', 'https://images.unsplash.com/photo-1598532163257-ae3c6b2524b6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8aGFuZGJhZ3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=900&q=60', 'Inget känt', 'Armband', 'Ett mycket fint antikt armband från någon gång på 60-talet. Jag tror det är äkta guld. ', 'M', 9999, 0, '2023-06-14 07:08:26', 5, 4),
(6, 'Rosa Blus', 'https://images.unsplash.com/photo-1598532163257-ae3c6b2524b6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8aGFuZGJhZ3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=900&q=60', 'Kappahl ', 'Blus', 'En skir blus i rosa med en väldans massa volanger', 'XL', 100, 0, '2023-06-13 19:57:57', 5, 1),
(7, 'Frack', 'https://images.unsplash.com/photo-1598532163257-ae3c6b2524b6?ixlib=rb-4.0.3&#38;ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8aGFuZGJhZ3xlbnwwfHwwfHx8MA%3D%3D&#38;auto=format&#38;fit=crop&#38;w=900&#38;q=60', 'Oscar Jacobsson', 'Frack', 'En hel frack!', '52', 2999, 0, '2023-06-12 08:08:02', 5, 3),
(8, 'Blommig Bikini', 'https://images.unsplash.com/photo-1598532163257-ae3c6b2524b6?ixlib=rb-4.0.3&#38;ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8aGFuZGJhZ3xlbnwwfHwwfHx8MA%3D%3D&#38;auto=format&#38;fit=crop&#38;w=900&#38;q=60', 'Armani', 'Bikini', 'Bikini som använts väldigt mycket på västkusten. Du kan fortfarande känna lukten av saltvatten. ', 'M', 200, 0, '2023-06-12 18:49:51', 5, 5),
(9, 'Linneskjorta', 'https://images.unsplash.com/photo-1598532163257-ae3c6b2524b6?ixlib=rb-4.0.3&#38;ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8aGFuZGJhZ3xlbnwwfHwwfHx8MA%3D%3D&#38;auto=format&#38;fit=crop&#38;w=900&#38;q=60', 'Stenströms', 'Skjorta', 'En röd skjorta i 100% linne. Väldigt trevlig, har fått mycket komplimanger i denna.', 'L', 400, 1, '2023-06-13 14:10:40', 5, 4),
(10, 'Fejkslitna Jeans', 'https://images.unsplash.com/photo-1598532163257-ae3c6b2524b6?ixlib=rb-4.0.3&#38;ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8aGFuZGJhZ3xlbnwwfHwwfHx8MA%3D%3D&#38;auto=format&#38;fit=crop&#38;w=900&#38;q=60', 'H&#38;M', 'Jeans', 'Blåa jeans med fejkad slitning på ena knäet.', '40', 100, 0, '2023-06-13 19:57:37', 5, 1),
(11, 'Rock', 'https://images.unsplash.com/photo-1598532163257-ae3c6b2524b6?ixlib=rb-4.0.3&#38;ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8aGFuZGJhZ3xlbnwwfHwwfHx8MA%3D%3D&#38;auto=format&#38;fit=crop&#38;w=900&#38;q=60', 'Lindex', 'Ullrock', 'En rock i ull med teddyfoder. Fickorna är djupa', '38', 200, 0, '2023-06-12 18:58:56', 5, 2),
(12, 'Truli', 'https://images.unsplash.com/photo-1598532163257-ae3c6b2524b6?ixlib=rb-4.0.3&#38;ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8aGFuZGJhZ3xlbnwwfHwwfHx8MA%3D%3D&#38;auto=format&#38;fit=crop&#38;w=900&#38;q=60', 'bobo', 'lala', 'fil', 'fjf', 999, 1, '2023-06-13 19:41:25', 7, 1),
(13, 'Märkeskeps', 'https://images.unsplash.com/photo-1598532163257-ae3c6b2524b6?ixlib=rb-4.0.3&#38;ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8aGFuZGJhZ3xlbnwwfHwwfHx8MA%3D%3D&#38;auto=format&#38;fit=crop&#38;w=900&#38;q=60', 'Okänt märke', 'Keps', 'En keps', '?', 50, 0, '2023-06-13 19:45:46', 8, 4),
(14, 'bombajacka', 'https://images.unsplash.com/photo-1598532163257-ae3c6b2524b6?ixlib=rb-4.0.3&#38;ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8aGFuZGJhZ3xlbnwwfHwwfHx8MA%3D%3D&#38;auto=format&#38;fit=crop&#38;w=900&#38;q=60', 'north face', 'jacka', 'varm jacka, cool', 'S', 500, 1, '2023-06-14 09:11:45', 9, 3),
(15, 'En annan strumpa', 'https://images.unsplash.com/photo-1598532163257-ae3c6b2524b6?ixlib=rb-4.0.3&#38;ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8aGFuZGJhZ3xlbnwwfHwwfHx8MA%3D%3D&#38;auto=format&#38;fit=crop&#38;w=900&#38;q=60', 'Hemmasydd också', 'strumpa', 'En svart strumpa med knappar för att sätta fast i byxan', 'Passar det mesta', 4000, 1, '2023-06-15 08:06:55', 4, 5);

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `created`) VALUES
(1, 'Eva', 'Olofsson', 'eva_olofsson@gmail.com', '2023-05-29 10:33:10'),
(2, 'Jonas', 'Eriksson', 'j.eriksson@hotmail.com', '2023-05-29 10:37:22'),
(3, 'Fridolf', 'Borgbolf', 'fridde.b@outlook.com', '2023-05-31 08:31:08'),
(4, 'Pippi', 'Långstrump', 'rullgardina@longstocking.se', '2023-06-09 12:28:50'),
(5, 'Monika', 'Nilsson', 'msphej@didriksson.com', '2023-06-12 06:50:51'),
(8, 'Janet', 'Johansson', 'jj@gmail.com', '2023-06-13 19:43:04'),
(9, 'Måns', 'Månsson', 'mm@hotmail.com', '2023-06-14 09:09:54');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `conditions`
--
ALTER TABLE `conditions`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user-item` (`userId`),
  ADD KEY `condition-item` (`conditionId`);

--
-- Index för tabell `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `conditions`
--
ALTER TABLE `conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT för tabell `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT för tabell `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restriktioner för dumpade tabeller
--

--
-- Restriktioner för tabell `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `condition-item` FOREIGN KEY (`conditionId`) REFERENCES `conditions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
