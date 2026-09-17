-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Agu 2024 pada 06.29
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ecommerce`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `gambar` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `no_telp`, `gambar`) VALUES
(2, 'kontci', 'dasdasd', '213223123', 0x50726f6620445220497220536f656b61726e6f2e6a706567),
(4, 'budibaik', 'konz123', '1201021', 0x323232322d72656d6f766562672d707265766965772e706e67),
(5, 'konz', '12345678', '12121212', 0x736f656b61726e6f2d6b6574657267657361616e2d68616e756e675f686c67682d72656d6f766562672d707265766965772e706e67);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `descrip` text NOT NULL,
  `stok` varchar(225) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `kategori` enum('sepatu','kaos','aksesoris','alat') NOT NULL,
  `gambar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `descrip`, `stok`, `harga`, `kategori`, `gambar`) VALUES
(28, 'Nike Dunk Low Retro', 'Nike Dunk Low Retro mempertahankan desain asli dari Dunk Low yang diperkenalkan pada tahun 1985. Ini termasuk siluet rendah yang lebih mendekati pergelangan kaki dibandingkan dengan model High, memberikan tampilan yang lebih ramping dan sporty.', '18', '10000000', 'sepatu', 0x736570617475206e696b6520362e6a706567),
(30, 'Nike Aribass ', 'Nike Dunk Low Retro mempertahankan desain asli dari Dunk Low yang diperkenalkan pada tahun 1985. Ini termasuk siluet rendah yang lebih mendekati pergelangan kaki dibandingkan dengan model High, memberikan tampilan yang lebih ramping dan sporty.', '34', '900000', 'sepatu', 0x736570617475206e696b6520342e6a706567),
(32, 'Nike Patrobess', 'Nike Dunk Low Retro dikenal karena variasi warna dan pola yang beragam. Edisi retro sering kali mengembalikan warna-warna asli atau variasi warna yang ikonik dari rilis-rilis terdahulu. Beberapa edisi juga menampilkan desain grafis atau aksen warna yang khas.', '5', '3000000', 'sepatu', 0x736570617475206e696b6520362e6a706567),
(33, 'Nike Tshirt vintage 2024', 'Baju vintage kaya kakek lo', '11', '1000000', 'kaos', 0x62616a756e696b652e706e67),
(34, 'Nike Magic Tshirt ', 'magic like a journey in occasion sky with perfect timeline', '10', '400000', 'kaos', 0x536462646132353862343536303464666339306366306264663938376565333030732e6a70675f373230783732307138302e6a7067);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cart`
--

CREATE TABLE `tb_cart` (
  `id_cart` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_cart`
--

INSERT INTO `tb_cart` (`id_cart`, `id_barang`, `id_user`, `jumlah`) VALUES
(14, 29, 1, 1),
(15, 30, 1, 1),
(16, 27, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_favorit`
--

CREATE TABLE `tb_favorit` (
  `id_favorit` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_favorit`
--

INSERT INTO `tb_favorit` (`id_favorit`, `id_barang`, `id_user`, `tgl`) VALUES
(1, 11, 0, NULL),
(12, 14, 1, NULL),
(14, 20, 1, NULL),
(15, 11, 1, NULL),
(19, 30, 1, NULL),
(20, 28, 1, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(255) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `id_pesanan`, `tgl_pembayaran`, `jumlah`, `total`) VALUES
(4, 61, '2024-08-18', '1', 10000),
(5, 62, '2024-08-18', '2', 20000),
(6, 63, '2024-08-18', '1', 10000),
(7, 64, '2024-08-18', '246', 2460000),
(8, 65, '2024-08-18', '12', 120000),
(9, 66, '2024-08-18', '1', 870000),
(10, 67, '2024-08-18', '2', 400000),
(11, 69, '2024-08-18', '1', 900000),
(12, 75, '2024-08-18', '0', 1100000),
(13, 113, '2024-08-19', '1', 200000),
(14, 116, '2024-08-19', '1', 200000),
(15, 117, '2024-08-19', '1', 1000000),
(16, 118, '2024-08-19', '1', 10000000),
(17, 119, '2024-08-19', '3', 600000),
(18, 125, '2024-08-19', '2', 800000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id_pesanan` int(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `no_telp` varchar(225) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(225) NOT NULL,
  `tgl_pesanan` date NOT NULL,
  `jumlah` int(255) DEFAULT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id_pesanan`, `id_user`, `id_barang`, `no_telp`, `alamat`, `email`, `tgl_pesanan`, `jumlah`, `total`, `status`) VALUES
(1, 1, 0, '', '', '', '2024-07-02', 0, 0, 'ready'),
(3, 1, 12, '', '', '', '2024-08-10', NULL, 0, NULL),
(4, 32, 12, '', '', '', '2024-08-10', NULL, 0, NULL),
(5, 32, 12, '', '', '', '2024-08-10', NULL, 0, NULL),
(22, 1, 0, '081992536484', 'perumahan sengkuang raya blok 20', 'haikaldstar334@gmail.com', '2024-08-14', NULL, 0, NULL),
(23, 1, 0, '081992536484', 'perumahan sengkuang raya blok 20', 'haikaldstar334@gmail.com', '2024-08-14', NULL, 0, NULL),
(24, 1, 0, '081992536484', 'perumahan sengkuang raya blok 20', 'haikaldstar334@gmail.com', '2024-08-14', NULL, 0, NULL),
(25, 1, 0, '081992536484', 'perumahan sengkuang raya blok 20', 'haikaldstar334@gmail.com', '2024-08-14', NULL, 0, NULL),
(61, 1, 14, '081992536484', 'perumahan sengkuang raya blok 20', 'haikaldstar334@gmail.com', '2024-08-18', 1, 10000, 'Lunas'),
(62, 1, 14, '081992536484', 'perumahan sengkuang raya blok 20', 'haikaldstar334@gmail.com', '2024-08-18', 2, 20000, 'Lunas'),
(63, 1, 14, '081992536484', 'perumahan sengkuang raya blok 20', 'haikaldstar334@gmail.com', '2024-08-18', 1, 10000, 'Lunas'),
(64, 1, 14, '081992536484', 'perumahan sengkuang raya blok 20', 'haikaldstar334@gmail.com', '2024-08-18', 246, 2460000, 'Lunas'),
(65, 1, 14, '081992536484', 'perumahan sengkuang raya blok 20', 'haikaldstar334@gmail.com', '2024-08-18', 12, 120000, 'Lunas'),
(66, 1, 31, '081992536484', 'perumahan sengkuang raya blok 20', 'haikaldstar334@gmail.com', '2024-08-18', 1, 870000, 'Lunas'),
(67, 32, 29, '2131231231', 'alhamdulillah baik\r\n', 'konz@gmail.com', '2024-08-18', 2, 400000, 'Lunas'),
(69, 1, 30, '081992536484', 'perumahan sengkuang raya blok 20', 'haikaldstar334@gmail.com', '2024-08-18', 1, 900000, 'Lunas'),
(75, 1, 29, '081992536484', 'perumahan sengkuang raya blok 20', 'haikaldstar334@gmail.com', '2024-08-18', 0, 1100000, 'Lunas'),
(113, 32, 29, '2131231231', 'alhamdulillah baik\r\n', 'konz@gmail.com', '2024-08-19', 1, 200000, 'Lunas'),
(116, 32, 29, '2131231231', 'alhamdulillah baik\r\n', 'konz@gmail.com', '2024-08-19', 1, 200000, 'Lunas'),
(117, 1, 33, '081992536484', 'perumahan sengkuang raya blok 20', 'haikaldstar334@gmail.com', '2024-08-19', 1, 1000000, 'Lunas'),
(118, 32, 28, '081992536383', 'Tanjung buntung gang damai\r\n', 'konz@gmail.com', '2024-08-19', 1, 10000000, 'Lunas'),
(119, 32, 29, '081992536383', 'Tanjung buntung gang damai\r\n', 'konz@gmail.com', '2024-08-19', 3, 600000, 'Lunas'),
(125, 1, 34, '081992536484', 'perumahan sengkuang raya blok 20 gang mm', 'haikaldstar334@gmail.com', '2024-08-19', 2, 800000, 'Lunas'),
(126, 1, 34, '081992536484', 'perumahan sengkuang raya blok 20 gang mm', 'haikaldstar334@gmail.com', '2024-08-19', 1, 400000, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(225) DEFAULT NULL,
  `password` varchar(225) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `saldo` int(11) DEFAULT NULL,
  `gambar` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `no_telp`, `alamat`, `email`, `saldo`, `gambar`) VALUES
(1, 'Haikal islami pasya', 'haikalbaik', '123', '081992536484', 'perumahan sengkuang raya blok 20 gang mm', 'haikaldstar334@gmail.com', 6210000, 0x6d6573736920323031362e6a706567),
(30, 'Budi', 'Budiono Siregar', 'konto;ll', '08808080808', '', '', 0, 0x4669726d615f64655f4c696f6e656c5f4d657373695f7376675f336363383834616330642e706e67),
(32, 'budiono siregar', 'tai', '123', '081992536383', 'Tanjung buntung gang damai\r\n', 'konz@gmail.com', 600000, 0x48617474612064692070657270757374616b61616e2e6a706567),
(33, 'ads', 'wq', 'wqe', '23', NULL, NULL, NULL, NULL),
(34, 'Yantok', 'yantokgaming', '123', '12335', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tb_cart`
--
ALTER TABLE `tb_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indeks untuk tabel `tb_favorit`
--
ALTER TABLE `tb_favorit`
  ADD PRIMARY KEY (`id_favorit`);

--
-- Indeks untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `pembayarab` (`id_pesanan`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `tb_cart`
--
ALTER TABLE `tb_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_favorit`
--
ALTER TABLE `tb_favorit`
  MODIFY `id_favorit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id_pesanan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `pembayarab` FOREIGN KEY (`id_pesanan`) REFERENCES `tb_pesanan` (`id_pesanan`);

--
-- Ketidakleluasaan untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD CONSTRAINT `pesanan` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
