-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Agu 2022 pada 07.48
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nisaknn`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `user` varchar(16) NOT NULL,
  `pass` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`user`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_atribut`
--

CREATE TABLE `tb_atribut` (
  `id_atribut` varchar(16) NOT NULL,
  `nama_atribut` varchar(255) DEFAULT NULL,
  `status_atribut` varchar(255) DEFAULT NULL,
  `nilai` tinyint(1) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_atribut`
--

INSERT INTO `tb_atribut` (`id_atribut`, `nama_atribut`, `status_atribut`, `nilai`, `keterangan`) VALUES
('A01', 'Umur', 'diketahui', 0, ''),
('A02', 'Berat Badan', 'diketahui', 0, ''),
('A03', 'Tinggi Badan', 'diketahui', 0, ''),
('A04', 'Lingkar Kepala', NULL, NULL, ''),
('A05', 'Hasil Klasifikasi', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dataset`
--

CREATE TABLE `tb_dataset` (
  `id_dataset` int(11) NOT NULL,
  `nomor` int(11) DEFAULT NULL,
  `id_atribut` varchar(16) DEFAULT NULL,
  `id_nilai` double DEFAULT NULL,
  `ket_dataset` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dataset`
--

INSERT INTO `tb_dataset` (`id_dataset`, `nomor`, `id_atribut`, `id_nilai`, `ket_dataset`) VALUES
(578, 9, 'A04', 40, 'T. Misha Aisahrani'),
(539, 1, 'A05', 54, 'Nabila Tri Indriani'),
(577, 9, 'A03', 65, 'T. Misha Aisahrani'),
(543, 2, 'A04', 40, 'Aldi Hasan'),
(576, 9, 'A02', 6.9, 'T. Misha Aisahrani'),
(547, 3, 'A03', 78, 'Hafidh'),
(575, 9, 'A01', 9, 'T. Misha Aisahrani'),
(551, 4, 'A02', 8.5, 'Mhd.Al Hakim'),
(552, 4, 'A03', 77, 'Mhd.Al Hakim'),
(556, 5, 'A02', 14, 'Mhd. Risky Ananda'),
(559, 5, 'A05', 56, 'Mhd. Risky Ananda'),
(571, 8, 'A02', 11.8, 'Abdul Rahim'),
(570, 8, 'A01', 3, 'Abdul Rahim'),
(562, 6, 'A03', 84, 'Nurul Fatimah'),
(569, 7, 'A05', 56, 'Abdul Rahman'),
(565, 7, 'A01', 3, 'Abdul Rahman'),
(567, 7, 'A03', 91, 'Abdul Rahman'),
(564, 6, 'A05', 56, 'Nurul Fatimah'),
(561, 6, 'A02', 11.4, 'Nurul Fatimah'),
(558, 5, 'A04', 50, 'Mhd. Risky Ananda'),
(555, 5, 'A01', 5, 'Mhd. Risky Ananda'),
(554, 4, 'A05', 56, 'Mhd.Al Hakim'),
(550, 4, 'A01', 1, 'Mhd.Al Hakim'),
(549, 3, 'A05', 56, 'Hafidh'),
(546, 3, 'A02', 9.6, 'Hafidh'),
(545, 3, 'A01', 4, 'Hafidh'),
(542, 2, 'A03', 65, 'Aldi Hasan'),
(541, 2, 'A02', 6.2, 'Aldi Hasan'),
(538, 1, 'A04', 48, 'Nabila Tri Indriani'),
(537, 1, 'A03', 77, 'Nabila Tri Indriani'),
(536, 1, 'A02', 8.5, 'Nabila Tri Indriani'),
(574, 8, 'A05', 56, 'Abdul Rahim'),
(573, 8, 'A04', 49, 'Abdul Rahim'),
(572, 8, 'A03', 92, 'Abdul Rahim'),
(568, 7, 'A04', 49, 'Abdul Rahman'),
(566, 7, 'A02', 12, 'Abdul Rahman'),
(563, 6, 'A04', 50, 'Nurul Fatimah'),
(560, 6, 'A01', 2, 'Nurul Fatimah'),
(557, 5, 'A03', 98, 'Mhd. Risky Ananda'),
(553, 4, 'A04', 46, 'Mhd.Al Hakim'),
(548, 3, 'A04', 46, 'Hafidh'),
(544, 2, 'A05', 55, 'Aldi Hasan'),
(540, 2, 'A01', 9, 'Aldi Hasan'),
(535, 1, 'A01', 2, 'Nabila Tri Indriani'),
(579, 9, 'A05', 56, 'T. Misha Aisahrani'),
(580, 10, 'A01', 5, 'Tria Nadira Purba'),
(581, 10, 'A02', 13.3, 'Tria Nadira Purba'),
(582, 10, 'A03', 101, 'Tria Nadira Purba'),
(583, 10, 'A04', 48, 'Tria Nadira Purba'),
(584, 10, 'A05', 57, 'Tria Nadira Purba'),
(585, 11, 'A01', 4, 'Ragil Fasih'),
(586, 11, 'A02', 15.1, 'Ragil Fasih'),
(587, 11, 'A03', 96, 'Ragil Fasih'),
(588, 11, 'A04', 49, 'Ragil Fasih'),
(589, 11, 'A05', 56, 'Ragil Fasih'),
(590, 12, 'A01', 1, 'Desty Aisyahrani'),
(591, 12, 'A02', 6.1, 'Desty Aisyahrani'),
(592, 12, 'A03', 67, 'Desty Aisyahrani'),
(593, 12, 'A04', 46, 'Desty Aisyahrani'),
(594, 12, 'A05', 57, 'Desty Aisyahrani'),
(595, 13, 'A01', 4, 'Sanjadi'),
(596, 13, 'A02', 12.1, 'Sanjadi'),
(597, 13, 'A03', 90, 'Sanjadi'),
(598, 13, 'A04', 49, 'Sanjadi'),
(599, 13, 'A05', 56, 'Sanjadi'),
(600, 14, 'A01', 2, 'Dafa Irwansyah'),
(601, 14, 'A02', 14.3, 'Dafa Irwansyah'),
(602, 14, 'A03', 87, 'Dafa Irwansyah'),
(603, 14, 'A04', 51, 'Dafa Irwansyah'),
(604, 14, 'A05', 56, 'Dafa Irwansyah'),
(605, 15, 'A01', 8, 'Annisatul Husna Hrp'),
(606, 15, 'A02', 5.4, 'Annisatul Husna Hrp'),
(607, 15, 'A03', 61, 'Annisatul Husna Hrp'),
(608, 15, 'A04', 40, 'Annisatul Husna Hrp'),
(609, 15, 'A05', 57, 'Annisatul Husna Hrp'),
(610, 16, 'A01', 3, 'Taufiq Qurrahman'),
(611, 16, 'A02', 12, 'Taufiq Qurrahman'),
(612, 16, 'A03', 87, 'Taufiq Qurrahman'),
(613, 16, 'A04', 50, 'Taufiq Qurrahman'),
(614, 16, 'A05', 56, 'Taufiq Qurrahman'),
(615, 17, 'A01', 3, 'Nazril Alfarizi'),
(616, 17, 'A02', 13.1, 'Nazril Alfarizi'),
(617, 17, 'A03', 92, 'Nazril Alfarizi'),
(618, 17, 'A04', 50, 'Nazril Alfarizi'),
(619, 17, 'A05', 56, 'Nazril Alfarizi'),
(620, 18, 'A01', 4, 'Mhd Alfin'),
(621, 18, 'A02', 13.3, 'Mhd Alfin'),
(622, 18, 'A03', 99, 'Mhd Alfin'),
(623, 18, 'A04', 49, 'Mhd Alfin'),
(624, 18, 'A05', 56, 'Mhd Alfin'),
(625, 19, 'A01', 2, 'Mhd Arvan Ashofi'),
(626, 19, 'A02', 15.3, 'Mhd Arvan Ashofi'),
(627, 19, 'A03', 80, 'Mhd Arvan Ashofi'),
(628, 19, 'A04', 50, 'Mhd Arvan Ashofi'),
(629, 19, 'A05', 56, 'Mhd Arvan Ashofi'),
(630, 20, 'A01', 5, 'Andrian Syahputra'),
(631, 20, 'A02', 11, 'Andrian Syahputra'),
(632, 20, 'A03', 106, 'Andrian Syahputra'),
(633, 20, 'A04', 49, 'Andrian Syahputra'),
(634, 20, 'A05', 56, 'Andrian Syahputra'),
(635, 21, 'A01', 4, 'Qinara Arsila'),
(636, 21, 'A02', 17.2, 'Qinara Arsila'),
(637, 21, 'A03', 102, 'Qinara Arsila'),
(638, 21, 'A04', 44, 'Qinara Arsila'),
(639, 21, 'A05', 56, 'Qinara Arsila'),
(640, 22, 'A01', 1, 'Maisyah zahwa'),
(641, 22, 'A02', 6.5, 'Maisyah zahwa'),
(642, 22, 'A03', 71, 'Maisyah zahwa'),
(643, 22, 'A04', 46, 'Maisyah zahwa'),
(644, 22, 'A05', 56, 'Maisyah zahwa'),
(645, 23, 'A01', 3, 'tria kayla sari'),
(646, 23, 'A02', 11.5, 'tria kayla sari'),
(647, 23, 'A03', 90, 'tria kayla sari'),
(648, 23, 'A04', 49, 'tria kayla sari'),
(649, 23, 'A05', 56, 'tria kayla sari'),
(650, 24, 'A01', 2, 'Hafiq Fatullah'),
(651, 24, 'A02', 8.1, 'Hafiq Fatullah'),
(652, 24, 'A03', 81, 'Hafiq Fatullah'),
(653, 24, 'A04', 50, 'Hafiq Fatullah'),
(654, 24, 'A05', 56, 'Hafiq Fatullah'),
(655, 25, 'A01', 3, 'Kinan Fatiyatu Rahma '),
(656, 25, 'A02', 11.9, 'Kinan Fatiyatu Rahma '),
(657, 25, 'A03', 90, 'Kinan Fatiyatu Rahma '),
(658, 25, 'A04', 50, 'Kinan Fatiyatu Rahma '),
(659, 25, 'A05', 56, 'Kinan Fatiyatu Rahma '),
(660, 26, 'A01', 2, 'Gibran'),
(661, 26, 'A02', 10.9, 'Gibran'),
(662, 26, 'A03', 83, 'Gibran'),
(663, 26, 'A04', 51, 'Gibran'),
(664, 26, 'A05', 56, 'Gibran'),
(665, 27, 'A01', 1, 'Fatimah Azzahra'),
(666, 27, 'A02', 5.4, 'Fatimah Azzahra'),
(667, 27, 'A03', 66, 'Fatimah Azzahra'),
(668, 27, 'A04', 41, 'Fatimah Azzahra'),
(669, 27, 'A05', 56, 'Fatimah Azzahra'),
(670, 28, 'A01', 1, 'Alifa Azura'),
(671, 28, 'A02', 9.1, 'Alifa Azura'),
(672, 28, 'A03', 73, 'Alifa Azura'),
(673, 28, 'A04', 46, 'Alifa Azura'),
(674, 28, 'A05', 56, 'Alifa Azura'),
(675, 29, 'A01', 3, 'Ciko Fairus'),
(676, 29, 'A02', 15.5, 'Ciko Fairus'),
(677, 29, 'A03', 105, 'Ciko Fairus'),
(678, 29, 'A04', 51, 'Ciko Fairus'),
(679, 29, 'A05', 56, 'Ciko Fairus'),
(680, 30, 'A01', 4, 'Zafran'),
(681, 30, 'A02', 16, 'Zafran'),
(682, 30, 'A03', 98, 'Zafran'),
(683, 30, 'A04', 51, 'Zafran'),
(684, 30, 'A05', 56, 'Zafran'),
(685, 31, 'A01', 3, 'Mhd. Zikri'),
(686, 31, 'A02', 9.5, 'Mhd. Zikri'),
(687, 31, 'A03', 87, 'Mhd. Zikri'),
(688, 31, 'A04', 48, 'Mhd. Zikri'),
(689, 31, 'A05', 56, 'Mhd. Zikri'),
(690, 32, 'A01', 4, 'Rian Alfarizi'),
(691, 32, 'A02', 8.1, 'Rian Alfarizi'),
(692, 32, 'A03', 72, 'Rian Alfarizi'),
(693, 32, 'A04', 45, 'Rian Alfarizi'),
(694, 32, 'A05', 56, 'Rian Alfarizi'),
(695, 33, 'A01', 5, 'Nurrah Mawati'),
(696, 33, 'A02', 14, 'Nurrah Mawati'),
(697, 33, 'A03', 100, 'Nurrah Mawati'),
(698, 33, 'A04', 48, 'Nurrah Mawati'),
(699, 33, 'A05', 56, 'Nurrah Mawati'),
(700, 34, 'A01', 2, 'Amar Sahmi'),
(701, 34, 'A02', 10.1, 'Amar Sahmi'),
(702, 34, 'A03', 80, 'Amar Sahmi'),
(703, 34, 'A04', 57, 'Amar Sahmi'),
(704, 34, 'A05', 56, 'Amar Sahmi'),
(705, 35, 'A01', 4, 'Asila Rindi Azzahra'),
(706, 35, 'A02', 14.5, 'Asila Rindi Azzahra'),
(707, 35, 'A03', 99, 'Asila Rindi Azzahra'),
(708, 35, 'A04', 50, 'Asila Rindi Azzahra'),
(709, 35, 'A05', 56, 'Asila Rindi Azzahra'),
(710, 36, 'A01', 2, 'Kayla Zahira'),
(711, 36, 'A02', 10.5, 'Kayla Zahira'),
(712, 36, 'A03', 86, 'Kayla Zahira'),
(713, 36, 'A04', 48, 'Kayla Zahira'),
(714, 36, 'A05', 56, 'Kayla Zahira'),
(715, 37, 'A01', 2, 'Alqis Salsabila'),
(716, 37, 'A02', 10, 'Alqis Salsabila'),
(717, 37, 'A03', 83, 'Alqis Salsabila'),
(718, 37, 'A04', 48, 'Alqis Salsabila'),
(719, 37, 'A05', 56, 'Alqis Salsabila'),
(720, 38, 'A01', 8, 'Khaira Putri Nst'),
(721, 38, 'A02', 6.1, 'Khaira Putri Nst'),
(722, 38, 'A03', 65, 'Khaira Putri Nst'),
(723, 38, 'A04', 40, 'Khaira Putri Nst'),
(724, 38, 'A05', 56, 'Khaira Putri Nst'),
(725, 39, 'A01', 5, 'Nazla'),
(726, 39, 'A02', 15, 'Nazla'),
(727, 39, 'A03', 107, 'Nazla'),
(728, 39, 'A04', 51, 'Nazla'),
(729, 39, 'A05', 56, 'Nazla'),
(730, 40, 'A01', 1, 'Farhan'),
(731, 40, 'A02', 11.4, 'Farhan'),
(732, 40, 'A03', 82, 'Farhan'),
(733, 40, 'A04', 49, 'Farhan'),
(734, 40, 'A05', 56, 'Farhan'),
(735, 41, 'A01', 11, 'Nazmi'),
(736, 41, 'A02', 16, 'Nazmi'),
(737, 41, 'A03', 105, 'Nazmi'),
(738, 41, 'A04', 50, 'Nazmi'),
(739, 41, 'A05', 56, 'Nazmi'),
(740, 42, 'A01', 3, 'Sawa Salsabila'),
(741, 42, 'A02', 68, 'Sawa Salsabila'),
(742, 42, 'A03', 67, 'Sawa Salsabila'),
(743, 42, 'A04', 43, 'Sawa Salsabila'),
(744, 42, 'A05', 56, 'Sawa Salsabila'),
(745, 43, 'A01', 3, 'Nova Alisya Husna'),
(746, 43, 'A02', 19.6, 'Nova Alisya Husna'),
(747, 43, 'A03', 92, 'Nova Alisya Husna'),
(748, 43, 'A04', 47, 'Nova Alisya Husna'),
(749, 43, 'A05', 56, 'Nova Alisya Husna'),
(750, 44, 'A01', 1, 'Habib Nawaf'),
(751, 44, 'A02', 12, 'Habib Nawaf'),
(752, 44, 'A03', 92, 'Habib Nawaf'),
(753, 44, 'A04', 51, 'Habib Nawaf'),
(754, 44, 'A05', 56, 'Habib Nawaf'),
(755, 45, 'A01', 1, 'Gibran'),
(756, 45, 'A02', 9.7, 'Gibran'),
(757, 45, 'A03', 73, 'Gibran'),
(758, 45, 'A04', 47, 'Gibran'),
(759, 45, 'A05', 56, 'Gibran'),
(760, 46, 'A01', 5, 'M.Arrazi Hasyim'),
(761, 46, 'A02', 10.3, 'M.Arrazi Hasyim'),
(762, 46, 'A03', 78, 'M.Arrazi Hasyim'),
(763, 46, 'A04', 48, 'M.Arrazi Hasyim'),
(764, 46, 'A05', 57, 'M.Arrazi Hasyim'),
(765, 47, 'A01', 2, 'Karin'),
(766, 47, 'A02', 42, 'Karin'),
(767, 47, 'A03', 57, 'Karin'),
(768, 47, 'A04', 40, 'Karin'),
(769, 47, 'A05', 57, 'Karin'),
(770, 48, 'A01', 1, 'Bunga Aira'),
(771, 48, 'A02', 10.4, 'Bunga Aira'),
(772, 48, 'A03', 82, 'Bunga Aira'),
(773, 48, 'A04', 48, 'Bunga Aira'),
(774, 48, 'A05', 57, 'Bunga Aira'),
(775, 49, 'A01', 3, 'M.Ardiansyah'),
(776, 49, 'A02', 10.1, 'M.Ardiansyah'),
(777, 49, 'A03', 80, 'M.Ardiansyah'),
(778, 49, 'A04', 46, 'M.Ardiansyah'),
(779, 49, 'A05', 57, 'M.Ardiansyah'),
(780, 50, 'A01', 3, 'M.Wildan Fahri'),
(781, 50, 'A02', 11.3, 'M.Wildan Fahri'),
(782, 50, 'A03', 89, 'M.Wildan Fahri'),
(783, 50, 'A04', 49, 'M.Wildan Fahri'),
(784, 50, 'A05', 57, 'M.Wildan Fahri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_atribut` varchar(255) DEFAULT NULL,
  `nama_nilai` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nilai`
--

INSERT INTO `tb_nilai` (`id_nilai`, `id_atribut`, `nama_nilai`) VALUES
(54, 'A05', 'Sangat Baik'),
(55, 'A05', 'Baik'),
(56, 'A05', 'Cukup'),
(57, 'A05', 'Kurang');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`user`);

--
-- Indeks untuk tabel `tb_atribut`
--
ALTER TABLE `tb_atribut`
  ADD PRIMARY KEY (`id_atribut`);

--
-- Indeks untuk tabel `tb_dataset`
--
ALTER TABLE `tb_dataset`
  ADD PRIMARY KEY (`id_dataset`);

--
-- Indeks untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_dataset`
--
ALTER TABLE `tb_dataset`
  MODIFY `id_dataset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=785;

--
-- AUTO_INCREMENT untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
