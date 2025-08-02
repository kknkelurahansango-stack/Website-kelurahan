-- Buat database
CREATE DATABASE IF NOT EXISTS kelurahan_db;
USE kelurahan_db;

-- Tabel kontak
CREATE TABLE IF NOT EXISTS kontak (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    pesan TEXT NOT NULL,
    tanggal DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Tabel berita
CREATE TABLE IF NOT EXISTS berita (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(255) NOT NULL,
    isi TEXT NOT NULL,
    tanggal DATE NOT NULL,
    kategori ENUM('umum', 'pendidikan', 'pertanian', 'perikanan', 'kesehatan', 'umkm') NOT NULL,
    gambar VARCHAR(255),
    video VARCHAR(255)
);

-- Tabel penduduk
CREATE TABLE IF NOT EXISTS penduduk (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    nik VARCHAR(20) NOT NULL UNIQUE,
    jenis_kelamin ENUM('Laki-laki', 'Perempuan') NOT NULL,
    tanggal_lahir DATE NOT NULL,
    usia INT,
    pendidikan_terakhir VARCHAR(50),
    pekerjaan VARCHAR(50),
    rt INT,
    rw INT,
    alamat TEXT
);

-- Tabel layanan masyarakat
CREATE TABLE IF NOT EXISTS layanan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_pengirim VARCHAR(100) NOT NULL,
    jenis_layanan VARCHAR(100) NOT NULL,
    deskripsi TEXT NOT NULL,
    tanggal DATETIME DEFAULT CURRENT_TIMESTAMP,
    status ENUM('Belum Diproses', 'Sedang Diproses', 'Selesai') DEFAULT 'Belum Diproses'
);

-- Tabel UMKM
CREATE TABLE IF NOT EXISTS umkm (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_pemilik VARCHAR(100) NOT NULL,
    nama_usaha VARCHAR(100) NOT NULL,
    jenis_umkm VARCHAR(100),
    deskripsi TEXT,
    alamat TEXT,
    gambar VARCHAR(255),
    kategori ENUM('pertanian', 'perikanan', 'umkm') NOT NULL
);