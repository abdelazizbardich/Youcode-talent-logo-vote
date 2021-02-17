-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 17, 2021 at 11:58 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youcodetalent_sondage`
--

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `fname` varchar(250) DEFAULT NULL,
  `lname` varchar(250) DEFAULT NULL,
  `email` varchar(250) NOT NULL,
  `vote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `fname`, `lname`, `email`, `vote`) VALUES
(18, 'abdelaziz', 'bardich', 'aziz.traceur@gmail.com', 1),
(19, 'Mourad', 'Zo', 'mouradzo@gmail.com', 3),
(20, 'Fadoua', 'Kharroub', 'fadwakharoube00@gmail.com', 3),
(21, 'Abdellatif ', 'Tijani ', 'tijani.idrissi.abdellatif@gmail.com', 2),
(22, 'Oussama', 'Almesskine', 'oussama.almesskine@gmail.com', 2),
(23, 'Houda', 'Ghouizi', 'houda.ghouizi1998@gmail.com', 1),
(24, 'youssef', 'salim', 'ucefsalim@gmail.com', 2),
(25, 'Abdelghafour', 'Rochdi', 'abdelghafour.rochdi96@gmail.com', 1),
(26, 'adam', 'khairi', 'khairiadam1@gmail.com', 2),
(27, 'Doha', 'Feriadi ', 'dohaferiadi@gmail.com', 3),
(28, 'Mohamed', 'Dahreddine', 'dahreddine.med2@gmail.com', 1),
(29, 'ABDELKBIR', 'KHOUILID', 'abdelkbirkhouilid32@ogmail.com', 2),
(30, 'Eladab', 'Rabie', 'eladabrabie@gmail.com', 3),
(31, 'Said', 'Zitouni ', 'zitouni.sd@gmail.com', 3),
(32, 'salah', 'eddib', 'salaheddib.55@gmail.com', 3),
(33, 'douae', 'lasri', 'lasridouae1@gmail.com', 3),
(34, 'akram', 'iguernait youssef', 'akram.iguernait@gmail.com', 3),
(35, 'Ghajsh', 'gihe', 'gihem69671@hancack.com', 1),
(36, 'Nada', 'Elfadili ', 'EFNada98@gmail.com', 3),
(37, 'Zineb ', 'Belassiri ', 'zinebbelassiri123@gmail.com', 2),
(38, 'Khadija', 'Amardoul', 'khadija.amardoul1@gmail.com', 2),
(39, 'chaima', 'marzouk', 'marzouk.chaima.892@gmail.com', 2),
(40, 'Abdelhamid', 'Ait-ayoub', 'abdelhamidaitayoub@gmail.com', 2),
(41, 'khalid', 'saaf', 'khaliid.saaf@gmail.com', 3),
(42, 'ZAKARIA', 'EL ARFAOUI', 'zelar903@gmail.com', 2),
(43, 'Abdelali', 'Elmantagui', 'alix123ph@gmail.com', 1),
(44, 'azdoud', 'yassine', 'yassinelife2030@gmail.com', 1),
(45, 'Belassiri', 'Salma', 'salmabelassiri@gmail.com', 2),
(46, 'Ahmed', 'Moutaalim', 'moutaalimomar@gmail.com', 3),
(47, 'yahya', 'bouhlal', 'yahya.bouhlal.b@gmail.com', 3),
(48, 'Sara', 'Marhoum', 'sara_maroum@hotmail.com', 2),
(49, 'mourad', 'merguoum', 'merguoummourad@gmail.com', 1),
(50, 'Abdellatif', 'OULDELMAALLEM', 'ouldeabdellatif40@gmail.com', 2),
(51, 'Nouaouri', 'Abdelkarim', 'karimovich75@gmail.com', 2),
(52, 'yahia', 'elhabchi', 'yahyaelhabchi476@gmail.com', 3),
(53, 'Dounia', 'Lasfar', 'dounia.lasfar1@gmail.com', 1),
(54, 'Iliass', 'Raihani', 'i.raihani@outlook.com', 2),
(55, 'lahmar', 'khadija', 'khadijalahmar8@gmail.com', 3),
(56, 'hamza', 'elghandour', 'elghandourhamza8@gmail.com', 1),
(57, 'Salma', 'Daiouf', 'daioufsali@gmail.com', 3),
(58, 'abdelilah', 'Zroud', 'abdilahzroud1984@gmail.com', 1),
(59, 'Meriem', 'Benrhebra', 'meriem.benrhabra1@gmail.com', 1),
(60, 'fartmis', 'younes', 'yousfts10@gmail.com', 2),
(61, 'yassine', 'moumen', 'yassinemoumen00@gmail.com', 2),
(62, 'mohamed', 'zoubir', 'simozoubir012@gmail.com', 3),
(63, 'sara ', 'ediani', 'sara.pur187@gmail.com', 3),
(64, 'ahmed', 'ahmed', 'ahlan@gmail.com', 3),
(65, 'oussama', 'mahmoudy', 'ossamamahmoudy@gmail.com', 2),
(66, 'Youssef', 'Bouhalla', 'ybhl83@gmail.com', 2),
(67, 'Abdessamed', 'Massif', 'Massif.abdessamed.11@gmail.com', 3),
(68, 'k', 'm', 'kadourcodeur@gmail.com', 1),
(69, 'FATIMAEZZAHRA', 'zahid', 'fatimaezzahrazahid7@gmail.com', 1),
(70, 'Douaa', 'Larif', 'doua.larif@gmail.com', 2),
(71, 'HILMI', 'Mohammed', 'hilmimohammed97@gmail.com', 2),
(72, 'M\'hamed', 'JAAFAR', 'jaafarmhamed47@gmail.com', 1),
(73, 'Imane', 'Benkhadra', 'imanebenkhadra1998@gmail.com', 3),
(74, 'HAJAR', 'BOUDALI', 'boudali.hajar@gmail.com', 2),
(75, 'Abdelilah', 'ELKORCHI', 'abdelilah.elkorchi1999@gmail.com', 1),
(76, 'sana', 'bengannoune', 'sana.bengannoune@gmail.com', 3),
(77, 'Oumaima', 'ESSAFIR', 'oumaimaessafir@gmail.com', 1),
(78, 'Ilyass', 'chakir', 'ilyasschakir1@gmail.com', 1),
(79, 'hamza', 'ELFOUNIR', 'h.elfounir@gmail.com', 1),
(80, 'Badr', 'KENZI', 'badrkenzi102@gmail.com', 3),
(81, 'MINA', 'Dakiri', 'minadakiri7@gmail.com', 1),
(82, '🤣😂😂😂😂', '🤣😂😂😂😂', '🤣😂😂😂😂@🤣🤣.com', 2),
(83, 'achraf', 'LAHMAM', 'achraflahmam2@gmail.com', 1),
(84, 'khadija', 'Ezzayany', 'khadijaezzayany8@gmail.com', 1),
(85, 'Abdellah ', 'Marzouk', 'abdellahmarrzouk@gmail.com', 2),
(86, 'Ayoub', 'EL Jelladi', 'aeljelladi@gmail.com', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
