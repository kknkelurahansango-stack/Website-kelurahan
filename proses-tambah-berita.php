<?php
include 'includes/config.php';

if (isset($_POST['submit'])) {
    $judul = mysqli_real_escape_string($conn, $_POST['judul']);
    $isi = mysqli_real_escape_string($conn, $_POST['isi']);
    $tanggal = $_POST['tanggal'];
    $kategori = $_POST['kategori'];

    // Proses upload gambar
    $nama_gambar = '';
    if (!empty($_FILES['gambar']['name'])) {
        $nama_gambar = basename($_FILES['gambar']['name']);
        $target_gambar = "images/" . $nama_gambar;
        move_uploaded_file($_FILES['gambar']['tmp_name'], $target_gambar);
    }

    // Proses upload video
    $nama_video = '';
    if (!empty($_FILES['video']['name'])) {
        $nama_video = basename($_FILES['video']['name']);
        $target_video = "images/" . $nama_video; // simpan di folder images juga
        move_uploaded_file($_FILES['video']['tmp_name'], $target_video);
    }

    $query = "INSERT INTO berita (judul, isi, tanggal, kategori, gambar, video) 
              VALUES ('$judul', '$isi', '$tanggal', '$kategori', '$nama_gambar', '$nama_video')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Berita berhasil ditambahkan!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan berita!'); window.history.back();</script>";
    }
} else {
    header("Location: tambah-berita.php");
    exit;
}
?>
