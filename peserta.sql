-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2021 at 06:03 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `serti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id`, `nim`, `nama`, `serti`) VALUES
(7, '190420135', 'Mauidhatul jannah', 'MAUIDHATUL JANNAH.pdf'),
(8, '200420258', 'Rohana lubis', 'ROHANA LUBIS.pdf'),
(9, '180420061', 'Afisha Tirta Surya Lestari', 'AFISHA TIRTA SURYA LESTARI.pdf'),
(10, '200420143', 'Srik Wardani', 'SRIK WARDANI.pdf'),
(11, '200420188', 'Rita Sri Rahmawati ', 'RITA SRI RAHMAWATI .pdf'),
(12, '190420052', 'Dewi Septiani Sitompul ', 'DEWI SEPTIANI SITOMPUL .pdf'),
(13, '180420007', 'ANISATURRAHMI', 'ANISATURRAHMI.pdf'),
(14, '180420079', 'Putri', 'PUTRI.pdf'),
(15, '190420101', 'Nurhaliza', 'NURHALIZA.pdf'),
(16, '200420195', 'Anisya Wulan purnama', 'ANISYA WULAN PURNAMA.pdf'),
(17, '190420079', 'Wiyasandi Putri', 'WIYASANDI PUTRI.pdf'),
(18, '190420138', 'Martunis', 'MARTUNIS.pdf'),
(19, '180420035', 'Syafinatul Afza', 'SYAFINATUL AFZA.pdf'),
(20, '200170032', 'Dian Julyana Putri', 'DIAN JULYANA PUTRI.pdf'),
(21, '180420108', 'Fauzan juliansyah', 'FAUZAN JULIANSYAH.pdf'),
(22, '200420025', 'Rita Aswana', 'RITA ASWANA.pdf'),
(23, '200420080', 'Muhammad Riski', 'MUHAMMAD RISKI.pdf'),
(24, '190420028', 'NADIAH PUTRI SALSABILA', 'NADIAH PUTRI SALSABILA.pdf'),
(25, '190420037', 'Dini Miranda', 'DINI MIRANDA.pdf'),
(26, '210420026', 'EWA RIVALZA', 'EWA RIVALZA.pdf'),
(27, '200420086', 'Tihajar', 'TIHAJAR.pdf'),
(29, '200420123', 'Mery Yustika R ', 'MERY YUSTIKA R .pdf'),
(30, '200420148', 'Rika Winsa Putri', 'RIKA WINSA PUTRI.pdf'),
(31, '180420025', 'Rauzatul Jannah', 'RAUZATUL JANNAH.pdf'),
(32, '180420044', 'Nadhratul Aini', 'NADHRATUL AINI.pdf'),
(33, '180420106', 'MUHAMMAD SOFIAN', 'MUHAMMAD SOFIAN.pdf'),
(34, '190420058', 'Rauf vahrizal', 'RAUF VAHRIZAL.pdf'),
(35, '190420025', 'Fitri Amara Sari Nasution', 'FITRI AMARA SARI NASUTION.pdf'),
(36, '180420100', 'Fikri Hamzah Harahap', 'FIKRI HAMZAH HARAHAP.pdf'),
(37, '180420064', 'Yesi meldawati', 'YESI MELDAWATI.pdf'),
(38, '190420099', 'Nasriani', 'NASRIANI.pdf'),
(39, '200420065', 'Raihan putri', 'RAIHAN PUTRI.pdf'),
(40, '200420241', 'Amanda Fadhilah', 'AMANDA FADHILAH.pdf'),
(41, '200420166', 'Dea Tri Ananda', 'DEA TRI ANANDA.pdf'),
(42, '08972924301', 'MUHAMMAD MU\'AZ', 'MUHAMMAD MU\'AZ.pdf'),
(43, '200420087', 'Safria selfia suci', 'SAFRIA SELFIA SUCI.pdf'),
(44, '200420203', 'Khairunisa ', 'KHAIRUNISA .pdf'),
(45, '190420017', 'Nadila fitri', 'NADILA FITRI.pdf'),
(46, '200420058', 'Yani Arinarti Boangmanalu', 'YANI ARINARTI BOANGMANALU.pdf'),
(47, '180420115', 'Birra', 'BIRRA.pdf'),
(48, '180180003', 'Intan Aquiera', 'INTAN AQUIERA.pdf'),
(49, '180180033', 'Maulida hasbi ', 'MAULIDA HASBI .pdf'),
(50, '180420059', 'Ridha Firdaus', 'RIDHA FIRDAUS.pdf'),
(51, '180170127', 'Fazlun Nisak', 'FAZLUN NISAK.pdf'),
(52, '200420052', 'Dilla Anggini', 'DILLA ANGGINI.pdf'),
(53, '180170062', 'Nurul aula', 'NURUL AULA.pdf'),
(54, '200420177', 'Fransiska Finesyah Pohan', 'FRANSISKA FINESYAH POHAN.pdf'),
(55, '200420237', 'Ema Marlini', 'EMA MARLINI.pdf'),
(56, '200420181', 'Crista Agustina', 'CRISTA AGUSTINA.pdf'),
(57, '200420092', 'Adinda mahera', 'ADINDA MAHERA.pdf'),
(58, '200420183', 'Ica nabila shahira', 'ICA NABILA SHAHIRA.pdf'),
(59, '180170065', 'Ayu Miranda Putri', 'AYU MIRANDA PUTRI.pdf'),
(60, '190420100', 'Ersa madia', 'ERSA MADIA.pdf'),
(61, '217038018', 'Rizki Ramadhansyah', 'RIZKI RAMADHANSYAH.pdf'),
(62, '200420252', 'Fitri Zahara', 'FITRI ZAHARA.pdf'),
(63, '200420064', 'DHIYAUL AULIA NASUTION', 'DHIYAUL AULIA NASUTION.pdf'),
(64, '190170031', 'Cut Hilma Arifa', 'CUT HILMA ARIFA.pdf'),
(65, '190170048', 'Moulana Luthfiah', 'MOULANA LUTHFIAH.pdf'),
(66, '190170049', 'Sabani abadi', 'SABANI ABADI.pdf'),
(67, '200170141', 'MANDA AGUSTRIYA', 'MANDA AGUSTRIYA.pdf'),
(68, '190420104', 'Novi Ramadani ', 'NOVI RAMADANI .pdf'),
(69, '200170025', 'Riska Safitri', 'RISKA SAFITRI.pdf'),
(70, '11216001', 'Nurul husna', 'NURUL HUSNA.pdf'),
(71, '130420121', 'Fakhrurrazi', 'FAKHRURRAZI.pdf'),
(72, '200170066', 'Sulusil Mutmainah', 'SULUSIL MUTMAINAH.pdf'),
(73, '180420011', 'Raudhatur Rahmi', 'RAUDHATUR RAHMI.pdf'),
(74, '180420010', 'Anisatun Rohmah', 'ANISATUN ROHMAH.pdf'),
(75, '180420030', 'Rosa fitri', 'ROSA FITRI.pdf'),
(76, '200410113', 'Sabitah fina', 'SABITAH FINA.pdf'),
(77, '200410051', 'Mawaddah', 'MAWADDAH.pdf'),
(78, '200410132', 'Sabrina Luvita', 'SABRINA LUVITA.pdf'),
(79, '190130004', 'Muhammad iqbal', 'MUHAMMAD IQBAL.pdf'),
(80, '200420048', 'Sarmidah Sinaga', 'SARMIDAH SINAGA.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
