-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2021 pada 05.27
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `anggota_id` int(10) UNSIGNED NOT NULL,
  `anggota_nama` varchar(50) NOT NULL,
  `anggota_alamat` text NOT NULL,
  `anggota_jk` enum('L','P') NOT NULL,
  `anggota_telp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`anggota_id`, `anggota_nama`, `anggota_alamat`, `anggota_jk`, `anggota_telp`) VALUES
(1, 'Kornelius Aditya Septemedi', 'Sintang', 'L', '089374927984'),
(2, 'Hanna Tania Rointan Napitupulu', 'Medan', 'P', '083945367722'),
(4, 'Julio Irvan Rahardjo', 'Semarang', 'L', '065096870956'),
(7, 'Venansius Fortunatus Wijaya', 'Lasem', 'L', '085226374336'),
(8, 'Sora', 'Jakarta', 'L', '089374927987'),
(9, 'Naruto Uzumaki', 'Konohagakure', 'L', '032938209438'),
(10, 'Sasuke Uciha', 'Konohagakure', 'L', '058769596565'),
(11, 'Cloud Strife', 'Midgar', 'L', '098549649005'),
(12, 'Tifa Lockhart', 'Midgar', 'P', '094380589068'),
(13, 'Claude C. Kenny', 'Calnus', 'L', '098605890756');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `buku_id` int(10) UNSIGNED NOT NULL,
  `buku_judul` varchar(50) NOT NULL,
  `kategori_id` int(11) UNSIGNED NOT NULL,
  `buku_deskripsi` text DEFAULT NULL,
  `buku_jumlah` int(11) UNSIGNED NOT NULL,
  `buku_cover` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`buku_id`, `buku_judul`, `kategori_id`, `buku_deskripsi`, `buku_jumlah`, `buku_cover`) VALUES
(3, 'Sebuah Seni untuk Bersikap Bodo Amat', 12, '“Dalam hidup ini, kita hanya punya kepedulian dalam jumlah yang terbatas. Makanya, Anda harus bijaksana dalam menentukan kepedulian Anda.” Manson menciptakan momen perbincangan yang serius dan mendalam, dibungkus dengan cerita-cerita yang menghibur dan “kekinian”, serta humor yang cadas. Buku ini merupakan tamparan di wajah yang menyegarkan untuk kita semua, supaya kita bisa mulai menjalani kehidupan yang lebih memuaskan, dan apa adanya.', 50, 'Sebuah-seni-untuk-bersikap-bodoh-amat.jpg'),
(4, 'Dilan: Dia adalah Dilanku Tahun 1990', 12, 'Suatu hari saat bubar dari sekolah, ada dilan yang menyusul milea dengan motornya. Dan dia mengatakan kepada milea bahwa dia ingin ikut naik angkot bersamanya, saat di angkot Dilan berkata “ Milea, kamu cantik, tapi aku belum mencintaimu. Enggak tahu kalau sore, tunggu aja” perkataan Dilan membuat Milea kaget, Milea hanya diam, dia juga memikirkan pacarnya yang berada di Jakarta.', 51, 'ID_MIZ2016MTH03DDADT_B.jpg'),
(8, 'Harry Potter and the Cursed Child', 12, 'Selalu sulit menjadi Harry Potter dan sekarang pun tidak lebih mudah bahwa ia kini adalah seorang pegawai yang sangat sibuk dengan pekerjaannya di Kementerian Sihir, sekaligus seorang suami dan ayah dari tiga anak usia sekolah. Sementara Harry bergulat dengan masa lalu, putra keduanya, Albus harus berjuang menyandang warisan keluarga yang tidak pernah ia inginkan. Seperti masa lalu yang kering dan menakutkan, ayah dan anak ini sama-sama belajar satu kebenaran tak mengenakkan: kadang-kadang kegelapan datang dari tempat-tempat yang tak terduga.', 20, 'Harry_Potter_and_the_Cursed_Child.jpg'),
(9, 'Harry Potter and the Deathly Hallows', 12, 'Harry potter memasuki umur 17 tahun dimana ia mencapai umur kedewasaan secara dunia sihir. Sebelum berumur 17 tahun, Harry masih terlindung dari Voldemort selama ia tinggal di rumah keluarga Dursley. Saat memasuki umur kedewasaan, mantera itu akan terangkat dan mengharuskan Harry untuk melindungi dirinya sendiri.', 30, '330px-Harry_potter_deathly_hallows_US.jpg'),
(10, 'Harry Potter and the Half-Blood Prince', 12, 'Kisah ini dilatarbelakangi pada waktu Harry Potter berada pada tahun keenam sekolahnya di Hogwarts. Novel ini mengisahkan masa lalu Lord Voldemort dan persiapan Harry Potter untuk pertarungan terakhir, dan dibumbui dengan berkembangnya hubungan romantis di antara karakter-karakternya.', 80, '330px-Harry_Potter_and_the_Half-Blood_Prince2.jpg'),
(11, 'Dilan: Dia adalah Dilanku Tahun 1991', 12, 'Milea pun kembali bercerita tentang kisah percintaannya dengan Dilan. Seperti orang yang baru jadian pada umumnya, Milea mengalami masa yang indah di SMA sesudah resmi jadi pacar Dilan. Ketika guyuran hujan menerpa, Dilan menggunakan motor CB dengan Milea di belakangnya. Milea dengan erat memeluk Dilan. Mereka berdua jalan-jalan menyusuri Jl. Buah Batu sembari ketawa riang, itu semua berkat Dilan yang selalu membuat hari-hari Milea bahagia.', 49, 'ID_MIZ2016MTH03DDADT1_B.jpg'),
(12, 'Milea : Suara dari Dilan', 12, 'Dilan bagian 3 ini merupakan salah satu novel trilogi Dilan. Bagian ini menceritakan sosok Milea di mata Dilan. Berawal dari harmonisnya hubungan Dilan dengan Milea, Dilan dengan keluarganya, Milea dengan keluarganya, dan antarkelurga mereka. kemudian terjadi peristiwa  yang memicu konflik yaitu kematian Akew, sahabat Dilan akibat dikeroyok orang tak dikenal. Milea berpikir bahwa itu imbas dari keikutsertaan  Dilan dkk di geng motor. Milea ingin Dilan keluar dari geng motor tersebut. Namun Dilan yang sedang dilanda kemaraharahan dan kesedihan atas kematian sahabatnya diikat dalam rasa solidaritas ingin balas dendam. Dalam keadaan bingung  dan galau Dilan butuh orang yang mengerti dirinya, tetapi Milea justru memutuskan sepihak.', 45, 'img-20190325-wa0009-5c98787495760e3f4d368524.jpg'),
(13, 'Gerbang Dialog Danur', 12, 'Jangan heran jika mendapatiku sedang berbicara sendirian atau tertawa tanpa seorang pun terlihat sedang bersamaku. Saat itu. mungkin saja aku sedang bersama salah satu dari lima sahabatku.\r\nKalian mungkin tak melihatnya.... Wajar. Mereka memang tak kasat mata dan sering disebut... hantu. Ya, mereka adalah hantu, jiwa-jiwa penasaran atas kehidupan yang dianggap mereka tidak adil.', 78, '99719_f.jpg'),
(14, 'Laskar Pelangi', 12, 'Novel Laskar Pelangi menceritakan kehidupan 10 anak yang tidak mampu, tetapi memiliki semangat juang untuk melanjutkan pendidikannya di kampung Gantung, Kepulauan Bangka Belitung. Sebagian besar dari kesepuluh anak yang menempuh pendidikan di SD Muhammadiyah Gantung merupakan anak dari para penambang timah di pulau dengan perolehan kekayaan alam timah yang terbesar di dunia.', 119, 'cover-laskar-pelangi.jpg'),
(15, 'Sang Pemimpi', 12, 'Arai adalah yang paling cerdas diantara mereka bertiga, selalu mengutip kata-kata inspiratif dari berbagai sumber “tak semua yang dihitung bisa diperhitungkan dan tak semua yang diperhitungkan bisa dihitung”, sedangkan Ikal yang sangat mengidolakan H. Roma Irama akan mengutip kalimat dari lirik lagu raja dangdut tersebut “Darah muda adalah darahnya para remaja” sedangkan Jibron yang sangat menyukai kuda akan mengeluarkan kalimat yang tidak jauh-jauh dari bahasan tentang kuda.', 59, '330px-Sang_Pemimpi_sampul.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(10) UNSIGNED NOT NULL,
  `kategori_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`) VALUES
(2, 'Sci & Fic'),
(10, 'Pemrograman'),
(12, 'Novel'),
(13, 'Comic'),
(14, 'Cergam'),
(15, 'Ensiklopedia'),
(16, 'Nomic'),
(17, 'Antalogi'),
(18, 'Dongeng'),
(19, 'Biografi'),
(20, 'Diary'),
(21, 'Novelet'),
(22, 'Fotografi'),
(23, 'Karya Ilmiah'),
(24, 'Tafsir'),
(25, 'Kamus'),
(26, 'Panduan (How To)'),
(27, 'Atlas'),
(28, 'Buku Ilmiah'),
(29, 'Teks'),
(30, 'Majalah'),
(31, 'E-Book'),
(32, 'Filsafat'),
(33, 'Kitab Suci');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kembali`
--

CREATE TABLE `kembali` (
  `kembali_id` int(11) UNSIGNED NOT NULL,
  `pinjam_id` int(11) UNSIGNED NOT NULL,
  `tgl_kembali` date NOT NULL,
  `denda` double UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kembali`
--

INSERT INTO `kembali` (`kembali_id`, `pinjam_id`, `tgl_kembali`, `denda`) VALUES
(6, 15, '2021-11-19', 0),
(10, 17, '2021-12-09', 0),
(11, 21, '2021-12-09', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `petugas_id` int(10) UNSIGNED NOT NULL,
  `petugas_nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`petugas_id`, `petugas_nama`, `username`, `password`) VALUES
(1, 'Admin', 'Admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Kornelius Aditya Septemedi', 'Adit', '3c3ee262b1f824e7faa0504242753166'),
(3, 'Venansius Fortunatus Wijaya', 'Venan', '3c3ee262b1f824e7faa0504242753166'),
(4, 'Ventus', 'Ventus', '3c3ee262b1f824e7faa0504242753166'),
(5, 'VincentVenan33', 'VincentVenan33', '3c3ee262b1f824e7faa0504242753166'),
(11, 'Dilan', 'Dilan', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam`
--

CREATE TABLE `pinjam` (
  `pinjam_id` int(10) UNSIGNED NOT NULL,
  `buku_id` int(11) UNSIGNED NOT NULL,
  `anggota_id` int(11) UNSIGNED NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_jatuh_tempo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pinjam`
--

INSERT INTO `pinjam` (`pinjam_id`, `buku_id`, `anggota_id`, `tgl_pinjam`, `tgl_jatuh_tempo`) VALUES
(10, 3, 2, '2016-03-20', '2016-03-20'),
(11, 4, 2, '2016-03-20', '2016-03-24'),
(14, 3, 4, '2021-11-19', '2021-11-26'),
(15, 15, 8, '2021-11-15', '2021-11-19'),
(16, 10, 10, '2021-11-16', '2021-11-18'),
(17, 15, 12, '2021-11-29', '2021-12-09'),
(21, 11, 1, '2021-12-09', '2021-12-11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`anggota_id`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`buku_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `kembali`
--
ALTER TABLE `kembali`
  ADD PRIMARY KEY (`kembali_id`),
  ADD KEY `pinjam_id` (`pinjam_id`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`petugas_id`);

--
-- Indeks untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`pinjam_id`),
  ADD KEY `anggota_id` (`anggota_id`),
  ADD KEY `buku_id` (`buku_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `anggota_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `buku_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `kembali`
--
ALTER TABLE `kembali`
  MODIFY `kembali_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `petugas_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `pinjam_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`kategori_id`);

--
-- Ketidakleluasaan untuk tabel `kembali`
--
ALTER TABLE `kembali`
  ADD CONSTRAINT `kembali_ibfk_1` FOREIGN KEY (`pinjam_id`) REFERENCES `pinjam` (`pinjam_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD CONSTRAINT `pinjam_ibfk_1` FOREIGN KEY (`buku_id`) REFERENCES `buku` (`buku_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pinjam_ibfk_2` FOREIGN KEY (`anggota_id`) REFERENCES `anggota` (`anggota_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
