<?php include 'includes/header.php'; ?>
<?php include 'includes/config.php'; ?>

<style>
/* Tambah Berita Style */
body {
    background-color: #f7f9fc;
    font-family: 'Segoe UI', sans-serif;
    color: #333;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

h2 {
    color: #2E3B55;
    font-weight: bold;
}

form {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}

label {
    font-weight: 600;
    margin-bottom: 6px;
}

input[type="text"],
input[type="date"],
input[type="file"],
textarea,
select {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid #ced4da;
    border-radius: 6px;
    background-color: #fdfdfd;
    transition: all 0.3s ease;
    font-size: 14px;
}

input:focus,
textarea:focus,
select:focus {
    outline: none;
    border-color: #007bff;
    box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.2);
}

textarea {
    resize: vertical;
}

.btn-success {
    background-color: #28a745;
    border: none;
    padding: 12px 25px;
    font-weight: 600;
    border-radius: 6px;
    transition: 0.3s ease;
}

.btn-success:hover {
    background-color: #218838;
    transform: scale(1.03);
}
</style>

<div class="container my-5">
    <h2 class="text-center mb-4">Tambah Berita Kelurahan</h2>
    <form action="proses-tambah-berita.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="judul" class="form-label">Judul Berita</label>
            <input type="text" name="judul" id="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">Isi Berita</label>
            <textarea name="isi" id="isi" rows="5" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select name="kategori" id="kategori" class="form-select" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="pertanian">Pertanian</option>
                <option value="perikanan">Perikanan</option>
                <option value="kesehatan">Kesehatan</option>
                <option value="pendidikan">Pendidikan</option>
                <option value="umum">Umum</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Upload Gambar (opsional)</label>
            <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
        </div>
        <div class="mb-3">
            <label for="video" class="form-label">Upload Video (opsional)</label>
            <input type="file" name="video" id="video" class="form-control" accept="video/*">
        </div>
        <button type="submit" name="submit" class="btn btn-success">Simpan Berita</button>
    </form>
</div>

<?php include 'includes/footer.php'; ?>
