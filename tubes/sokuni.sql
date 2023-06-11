-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 05 Jun 2023 pada 11.11
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sokuni`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account_admin`
--

CREATE TABLE `account_admin` (
  `id_user` int NOT NULL,
  `username` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `account_admin`
--

INSERT INTO `account_admin` (`id_user`, `username`, `password`) VALUES
(2, 'kanata', '$2y$10$693solsEV/Ditkc5h1kLXORaAwJbVRUURUYOFlhcHiQLufPnocFGO'),
(3, 'yui', 'yui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ebook`
--

CREATE TABLE `ebook` (
  `id` int NOT NULL,
  `ebook` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `ebook`
--

INSERT INTO `ebook` (`id`, `ebook`) VALUES
(2, '5.6 Modul_Mengelola log v1.4 27 maret.pdf'),
(3, '5.4.Modul_Melaksanakan Kebijakan Kaminfo.pdf'),
(4, '5.1.Modul_Menerapkan Prinsip Perlindungan Informasi.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ebook_kategori`
--

CREATE TABLE `ebook_kategori` (
  `id_ebook` int DEFAULT NULL,
  `id_kategori` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `ebook_kategori`
--

INSERT INTO `ebook_kategori` (`id_ebook`, `id_kategori`) VALUES
(2, 2),
(3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int NOT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `jam_masuk` time DEFAULT NULL,
  `jam_keluar` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id`, `tanggal_masuk`, `jam_masuk`, `jam_keluar`) VALUES
(1, '2023-06-01', '15:50:02', '17:17:00'),
(2, '2023-06-21', '15:50:02', '17:17:19'),
(3, '2023-06-09', '13:00:00', '15:00:00'),
(4, '2023-06-12', '13:00:00', '15:00:00'),
(5, '2023-06-12', '14:00:00', '16:00:00'),
(6, '2023-06-12', '15:00:00', '17:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `kategori` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'Informatika'),
(2, 'B.Indonesia'),
(3, 'B.Inggris'),
(4, 'Matematika'),
(5, 'Fisika'),
(6, 'Biologi'),
(7, 'Kimia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelajaran`
--

CREATE TABLE `pelajaran` (
  `id` int NOT NULL,
  `nama_pelajaran` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `pelajaran`
--

INSERT INTO `pelajaran` (`id`, `nama_pelajaran`) VALUES
(1, 'Matematika Minat'),
(2, 'Fisika'),
(3, 'Biologi'),
(4, 'Kimia'),
(5, 'Bahasa Indonesia'),
(6, 'Bahasa Inggris'),
(12, 'Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajar`
--

CREATE TABLE `pengajar` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_pengajar` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `nip` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `pengajar`
--

INSERT INTO `pengajar` (`id`, `username`, `password`, `nama_pengajar`, `email`, `foto`, `nip`) VALUES
(6, 'kanata', '$2y$10$cNgAwFKay5JWJo96CjSFnuTpn/lPWac8AVRoCWCvcjKBiAhwNV3B2', 'Kanata1', 'kanata@gmail.com', '647cafa81c09e.jpg', '444'),
(8, 'yui', '$2y$10$jrTIlGRzWEjqfMM2VvbUou.592clUwhMJZGHHZJDziuAKgFvjT6.S', 'yui', 'yui@gmail.com', '647d9d359ed09.jpg', '45545'),
(9, 'dadi1', '$2y$10$9oq73ztEVgAQavxK/5jcXeAF73rcgzprNjkSMTZeHxR3ARp7Y.QKi', 'Dadi', 'dadi123@gmail.com', '647da3ee51c60.jpg', '0401001'),
(10, 'tise', '$2y$10$o6/8MLYjKfAi193PoXFBrOvPfH/vKKLigw9meGkSpCgEYBA8E/uB2', 'Tise Rosemary', 'Tise@gmail.com', '647da43fb0928.jpg', '0401002'),
(11, 'dani', '$2y$10$57nEQW5Nkd.8dIbA.CVy8uYNtWlefQHn9.h8H7eNIZs7sdtQ/21pW', 'Dani', 'Dani@gmail.com', '647da4a70e163.jpg', '0401003');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajar_jadwal`
--

CREATE TABLE `pengajar_jadwal` (
  `id_pengajar` int DEFAULT NULL,
  `id_jadwal` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajar_pelajaran`
--

CREATE TABLE `pengajar_pelajaran` (
  `id_pengajar` int DEFAULT NULL,
  `id_pelajaran` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `pengajar_pelajaran`
--

INSERT INTO `pengajar_pelajaran` (`id_pengajar`, `id_pelajaran`) VALUES
(6, 2),
(8, 1),
(9, 5),
(10, 12),
(11, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `username`, `password`, `nama_user`, `email`, `foto`) VALUES
(7, 'red', '$2y$10$A7Gst23mLv7tH09YOkHowum7FDzGVKTu7ABZ36NIllXo0sztTQvbq', 'yui', 'yu@gmail.com', '647c4cdba5ce8.jpg'),
(8, 'ahmad123', '$2y$10$h344aduRCc25uofZs6qQ7.2XFAnEOf6n4hvknOKJqIxktjke/2TwW', 'Ahmad Suherman123', 'ahmad@gmail.com123', '647c6d7d613bc.jpg'),
(9, 'Yui', '$2y$10$mvo9DTmCxruKgvaqRL4B/eJg7UP41/RzxweUaY0X3XPFI7xeWK8F6', 'red', 'red@gmail.com', '647cab9739e4a.png'),
(12, 'User', '$2y$10$XUmDg6YwPsBEU6YTVn73Keqs6j8pYbd442Xa7S3AO.8/0JWzMuQ1i', 'User', 'user@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa_jadwal`
--

CREATE TABLE `siswa_jadwal` (
  `id_siswa` int DEFAULT NULL,
  `id_jadwal` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `account_admin`
--
ALTER TABLE `account_admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `ebook`
--
ALTER TABLE `ebook`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ebook_kategori`
--
ALTER TABLE `ebook_kategori`
  ADD KEY `id_ebook` (`id_ebook`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengajar_jadwal`
--
ALTER TABLE `pengajar_jadwal`
  ADD KEY `id_pengajar` (`id_pengajar`),
  ADD KEY `id_jadwal` (`id_jadwal`);

--
-- Indeks untuk tabel `pengajar_pelajaran`
--
ALTER TABLE `pengajar_pelajaran`
  ADD KEY `id_pengajar` (`id_pengajar`),
  ADD KEY `id_pelajaran` (`id_pelajaran`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa_jadwal`
--
ALTER TABLE `siswa_jadwal`
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_jadwal` (`id_jadwal`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `account_admin`
--
ALTER TABLE `account_admin`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ebook`
--
ALTER TABLE `ebook`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pelajaran`
--
ALTER TABLE `pelajaran`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `ebook_kategori`
--
ALTER TABLE `ebook_kategori`
  ADD CONSTRAINT `ebook_kategori_ibfk_1` FOREIGN KEY (`id_ebook`) REFERENCES `ebook` (`id`),
  ADD CONSTRAINT `ebook_kategori_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengajar_jadwal`
--
ALTER TABLE `pengajar_jadwal`
  ADD CONSTRAINT `pengajar_jadwal_ibfk_1` FOREIGN KEY (`id_pengajar`) REFERENCES `pengajar` (`id`),
  ADD CONSTRAINT `pengajar_jadwal_ibfk_2` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengajar_pelajaran`
--
ALTER TABLE `pengajar_pelajaran`
  ADD CONSTRAINT `pengajar_pelajaran_ibfk_1` FOREIGN KEY (`id_pengajar`) REFERENCES `pengajar` (`id`),
  ADD CONSTRAINT `pengajar_pelajaran_ibfk_2` FOREIGN KEY (`id_pelajaran`) REFERENCES `pelajaran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswa_jadwal`
--
ALTER TABLE `siswa_jadwal`
  ADD CONSTRAINT `siswa_jadwal_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id`),
  ADD CONSTRAINT `siswa_jadwal_ibfk_2` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
