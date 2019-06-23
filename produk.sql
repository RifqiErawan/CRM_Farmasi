-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2019 pada 12.28
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfarmasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `kodeobat` int(11) NOT NULL,
  `namaobat` varchar(255) NOT NULL,
  `aturanpakai` text NOT NULL,
  `carakerjaobat` text NOT NULL,
  `efeksamping` text NOT NULL,
  `indikasi` text NOT NULL,
  `jenisobat` varchar(60) NOT NULL,
  `komposisi` text NOT NULL,
  `kontraindikasi` text NOT NULL,
  `peringatanobat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`kodeobat`, `namaobat`, `aturanpakai`, `carakerjaobat`, `efeksamping`, `indikasi`, `jenisobat`, `komposisi`, `kontraindikasi`, `peringatanobat`) VALUES
(2, 'Promag', 'Promag diberikan dengan dosis berikut :\r\n\r\n    1-2 tablet, dikunyah atau dibiarkan larut perlahan di dalam mulut.\r\n    Obat digunakan saat perut kosong, yaitu diantara waktu makan dan sebelum tidur.', 'Obat Asam Lambung', 'Simethicone tidak diserap oleh tubuh ke dalam aliran darah, oleh karena itu dianggap relatif aman. Efek samping yang bisa terjadi diantaranya berkurangnya kepadatan tinja.', 'Kegunaan Promag adalah untuk untuk mengobati gangguan pada saluran pencernaan seperti gastritis, perut kembung, maag, dispepsia, hiatus hernia, tukak lambung dan usus duabelas jari, kepenuhan, dan ketidaknyamanan akibat adanya kelebihan gas pada saluran pencernaan.', 'Generik (Tablet)', 'Hydrotalcite 200 mg,\r\n    Mg(OH)2 150 mg,\r\n    Simethicone 50 mg', 'Jangan menggunakan obat ini untuk pasien yang memiliki riwayat alergi terhadap  salah satu komponen obat ini.', 'Informasi keamanan penggunaan obat yang mengandung Simethicone untuk bayi dan anak-anak masih sangat terbatas, oleh karena itu penggunaan obat ini tidak dianjurkan untuk pengobatan kolik bayi.'),
(3, 'Dexamethasone', 'Adapun dosis obat dexametason yang umum digunakan dan dianjurkan yaitu:\r\n\r\n    Dosis dewasa pada pengobatan menggunakan deksametason oral adalah 0,5 mg sampai dengan 10 mg per hari\r\n    Dosis dewasa pada pengobatan menggunakan deksametason parenteral adalah 1 ml sampai 8 ml per hari\r\n    Dosis anak - anak yang dianjurkan adalah 0,08 mg sampai dengan 0,3 mg/Kg berat bedan/hari yang dibagi dalam 3 atau 4 dosis pemberian.\r\n', 'Mengurangi proses inflamasi dengan membuat membran leukosit lisosom menjadi stabil, sehingga pelepasan hidrolase asam yang merusak leukosit dapat dicegah', '\r\n    Gangguan pada saluran pencernaan seperti sakit perut dan mual,\r\n    Infeksi jamur oportunis,\r\n    Kebingungan dan gangguan tidur,\r\n    Peningkatan berat badan,\r\n    Kelemahan pada otot tubuh,\r\n    Menstruasi tidak lancar,\r\n    Pengeroposan tulang atau osteoporosis,\r\n    Gangguan pada pertumbuhan\r\n', '\r\n    Penyakit inflamasi akut,\r\n    Penyakit inflamasi pada kulit,\r\n    Penyakit inflamasi pada mata,\r\n    Penyakit rematik sendi,\r\n    Penyakit asma bronkhial,\r\n    Penyakit sistemik lupus eritematosus,\r\n    Penyakit keganasan sistem limfatik\r\n', ' 	Obat dengan resep dokter', 'Kortikosteroid ', '\r\n    Memiliki penyakit tuberkulosis paru aktif (TBC),\r\n    Memiliki penyakit infeksi yang sifatnya akut (sedang berlangsung dan berat),\r\n    Memiliki penyakit infeksi jamur, misalnya panu, kurap, keputihan akibat jamur dan sebagainya,\r\n    Memiliki penyakit herpes mata (herpes occular),\r\n    Memiliki penyakit tukak lambung (ulkus peptikum),\r\n    Sedang mengalami osteoporosis atau pengeroposan rulang,\r\n    Sedang mengalami psikosis maupun psikoneurosis berat,\r\n    Sedang mendapatkan vaksin hidup,\r\n    Ibu hamil atau berencan untuk hamil.\r\n', 'Obat Dexamethasone harus secara hati - hati digunakan pada penderita yang dekat dengan orang yang terinfeksi bakteri, virus dan jamur, karena kerentanan untuk terinfeksi.'),
(4, 'Betametason', '\r\n    Dewasa: Dosis dapat diberikan 2-3 mg per hari, selama beberapa hari. Selanjutnya, dapat dikurangi 0,25 mg atau 0,5 mg, tiap 2-5 hari, tergantung dari respons pasien terhadap obat.\r\n    Anak-anak: berdasarkan berat badan dan kondisi lainnya. Dosis akan dihitung dan diperkirakan oleh dokter. \r\n', '\r\n    Bila dikonsumsi dengan obat OAINS dapat meningkatkan pendarahan pada saluran pencernaan., \r\n    Bila dikonsumsi dengan obat quinolone dapat meningkatkan risiko jaringan yang menghubungkan antara otot dan tendon sobek., \r\n    Bila dikonsumsi dengan obat digoxin, acetazolamide, teofilind dapat menyebabkan hipokalemia.,\r\n    Bila dikonsumsi dengan obat ritonavir atau itraconazole dapat meningkatkan kadar obat di dalam darah., \r\n    Bila dikonsumsi dengan phenobarbital, phenytoin, carbamazepine dapat mengurangi efektivitas obat., \r\n', 'Sakit kepala (dari ringan hingga berat),\r\nGangguan tidur,\r\nNyeri pada lambung ataupun gangguan sistem pencernaan lainnya,\r\nTingkatkan risiko infeksi lain,\r\nPerubahan pada suatu siklus haid,\r\nDapat mempengaruhi mood,\r\nKelelahan,\r\nIritasi kulit,\r\nKulit menjadi lebih kering,\r\nKulit terasa pana', '', 'Obat resep', 'Kortikosteroid ', '\r\n    Bila dikonsumsi dengan obat OAINS dapat meningkatkan pendarahan pada saluran pencernaan., \r\n    Bila dikonsumsi dengan obat quinolone dapat meningkatkan risiko jaringan yang menghubungkan antara otot dan tendon sobek., \r\n    Bila dikonsumsi dengan obat digoxin, acetazolamide, teofilind dapat menyebabkan hipokalemia.,\r\n    Bila dikonsumsi dengan obat ritonavir atau itraconazole dapat meningkatkan kadar obat di dalam darah., \r\n    Bila dikonsumsi dengan phenobarbital, phenytoin, carbamazepine dapat mengurangi efektivitas obat., \r\n', '\r\n    Waspadai penggunaan obat ini bila memiliki suatu riwayat gangguan pembekuan darah, osteoporosis, diabetes mellitus (kencing manis), gangguan jantung, penyakit ginjal, gangguan hormon tiroid, gangguan sistem cerna, gangguan penyakit jiwa, ataupun infeksi yang baru saja terjadi.,\r\n    Bila sedang menggunakan obat ini maka sebaiknya perhatikan lingkungan anda, jauhi jika terdapat banyak orang sakit disekitar anda dulu karena obat Betametason dapat melemahkan sistem tubuh bagi orang yang konsumsi obat ini.,\r\n    Hindari konsumsi bersamaan dengan alkohol.,\r\n    Hindari imunisasi saat sedang pergunakan obat ini.,\r\n    Sebaiknya tidak digunakan bila akan mengemudikan kendaraan anda.,\r\n    Stop pemakaian bila timbul reaksi alergi obat ataupun suatu overdosis.,\r\n');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kodeobat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `kodeobat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
