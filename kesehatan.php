<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container text-center text-white">
        <h1>Kesehatan</h1>
        <p>Informasi fasilitas dan layanan kesehatan di Kelurahan Sango</p>
    </div>
</section>

<!-- Konten Kesehatan -->
<div class="container section">
    <div class="row mt-4">

        <!-- Fasilitas Kesehatan -->
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="text-center">Fasilitas Kesehatan</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Jenis Fasilitas</th>
                                    <th>Jumlah</th>
                                    <th>Kepala Instansi</th>
                                    <th>Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Puskesmas</td>
                                    <td>1</td>
                                    <td>Rehawati Wahab, SKM. M.Kes</td>
                                    <td>Jl. Batu Angus Kelurahan Sango, Kecamatan Ternate Utara Kota Ternate</td>
                                </tr>
                                <tr>
                                    <td>Posyandu</td>
                                    <td>2</td>
                                    <td>Dinas Kesehatan</td>
                                    <td>Jl. Batu Angus RT/RW 007/004</td>
                                </tr>
                                <tr>
                                    <td>Klinik</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Apotek</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

<!-- Jadwal Pelayanan Puskesmas dan Posyandu -->
<div class="col-md-12">
    <div class="card mb-4">
        <div class="card-body">
            <h4 class="text-center">Jadwal Pelayanan Puskesmas dan Posyandu</h4>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>Hari</th>
                            <th>Jam Pelayanan</th>
                            <th>Jenis Pelayanan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Senin - Kamis</td>
                            <td>
                                08.00 - 10.00 (Pendaftaran)<br>
                                s.d 12.00 (Pelayanan Dokter)<br>
                                s.d 14.30 (Pelayanan UGD)
                            </td>
                            <td>
                                Pemeriksaan Umum, KIA (Ibu & Anak), Imunisasi, UGD
                            </td>
                        </tr>
                        <tr>
                            <td>Jumat</td>
                            <td>
                                08.00 - 10.00 (Pendaftaran)<br>
                                s.d 12.00 (Pelayanan Dokter & UGD)
                            </td>
                            <td>
                                Pemeriksaan Umum, UGD, Konsultasi Kesehatan
                            </td>
                        </tr>
                        <tr>
                            <td>Sabtu</td>
                            <td>
                                08.00 - 10.00 (Pendaftaran)<br>
                                s.d 13.00 (Pelayanan Dokter & UGD)
                            </td>
                            <td>
                                Pelayanan Dokter Umum, UGD
                            </td>
                        </tr>
                        <tr>
                            <td>Minggu</td>
                            <td>Tutup</td>
                            <td>-</td>
                        </tr>
                        <!-- Tambahan Jadwal Posyandu -->
                        <tr>
                            <td>Posyandu Nitamalili 1</td>
                            <td>Setiap Tanggal 6 dan 2 Setiap Bulan Pada jam  08.00 - Selesai</td>
                            <td>Pelayanan Balita & Ibu Hamil</td>
                        </tr>
                        <tr>
                            <td>Posyandu Nitamalili 2</td>
                            <td>Setiap Tanggal 4 Setip Bulan pukul 08.00 - Selesai</td>
                            <td>Pelayanan Balita & Ibu Hamil</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


    <!-- Berita Kesehatan -->
    <div class="row mt-5">
        <div class="col-md-12">
            <h3 class="section-title text-center">Berita Kesehatan</h3>
            <?php
            include 'includes/config.php';
            $sql = "SELECT * FROM berita WHERE kategori='kesehatan' ORDER BY tanggal DESC LIMIT 5";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="card mb-4 reveal">';
                    if (!empty($row['gambar'])) {
                        echo '<img src="images/' . htmlspecialchars($row['gambar']) . '" class="card-img-top" alt="Gambar Berita">';
                    }
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . htmlspecialchars($row['judul']) . '</h5>';
                    echo '<p class="card-text">' . htmlspecialchars(substr(strip_tags($row['isi']), 0, 200)) . '...</p>';
                    echo '<p class="card-text"><small class="text-muted">Tanggal: ' . date('d/m/Y', strtotime($row['tanggal'])) . '</small></p>';
                    echo '</div></div>';
                }
            } else {
                echo '<p class="text-center">Belum ada berita kesehatan.</p>';
            }
            ?>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>