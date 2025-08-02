<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container text-center text-white">
        <h1>Perikanan</h1>
        <p>Informasi budidaya dan produksi ikan di Kelurahan Sango</p>
    </div>
</section>

<!-- Konten Perikanan -->
<div class="container section">
    <div class="row mt-4">
        <!-- Jenis Mata Pencarian -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">Jenis Mata Pencarian</h4>
                    <p>
                        Warga Kelurahan Sango, Kecamatan Ternate Utara, terdiri atas 8 RT dan 4 RW. Sebagian besar masyarakat yang tinggal di wilayah pesisir menjadikan nelayan sebagai mata pencarian utama. Hal ini cukup wajar mengingat letak geografis Kelurahan Sango yang berada di tepi pantai, menjadikan hasil laut sebagai sumber penghidupan yang menjanjikan.
                    </p>
                    <p>
                        Tercatat sekitar 160 nelayan aktif di pesisir Kelurahan Sango, didukung dengan keberadaan 167 perahu dan 41 di antaranya sudah bermesin (ketinting/body), serta 2 buah rompong (rumpon). Dalam satu minggu, rata-rata hasil tangkapan nelayan berkisar antara 100–200 ekor ikan (sekitar 3–5 kg).
                    </p>
                    <p>
                        Aktivitas melaut biasanya dimulai pada sore hari sekitar pukul 17.00 WIT dan kembali pada malam hari sekitar pukul 01.00 WIT. Jenis ikan yang biasa ditangkap antara lain Ikan Kembung (Tude), Ikan Komo, dan Cakalang (Skipjack Tuna). Setelah ditangkap, hasil laut ini kemudian dijual pada pagi hari dengan bantuan para istri dan anak-anak mereka.
                    </p>
                    <p>
                        Kendati demikian, aktivitas melaut sangat dipengaruhi oleh kondisi cuaca seperti hujan atau gelombang tinggi. Pada kondisi seperti itu, sebagian warga beralih sementara menjadi petani sebagai alternatif sumber pendapatan.
                    </p>
                </div>
            </div>
        </div>

        <!-- Produksi Perikanan -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">Produksi Perikanan</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Jenis Ikan</th>
                                    <th>Produksi/Hari (kg)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Ikan Kembung(tude)</td><td>3-5 kg</td></tr>
                                <tr><td>Ikan Komo</td><td>3-4 kg</td></tr>
                                <tr><td>Ikan Cakalang(Skipjack Tuna)</td><td>3-5 kg</td></tr>
                                <tr><td>Ikan Sorihi</td><td>3-5 kg</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Berita Perikanan -->
    <div class="row mt-5">
        <div class="col-md-12">
            <h3 class="section-title">Berita Perikanan</h3>
            <?php
            include 'includes/config.php';
            $sql = "SELECT * FROM berita WHERE kategori='perikanan' ORDER BY tanggal DESC LIMIT 5";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="card mb-3 reveal">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . htmlspecialchars($row['judul']) . '</h5>';
                    echo '<p class="card-text">' . htmlspecialchars(substr($row['isi'], 0, 200)) . '...</p>';
                    echo '<p class="card-text"><small class="text-muted">Tanggal: ' . date('d/m/Y', strtotime($row['tanggal'])) . '</small></p>';
                    echo '</div></div>';
                }
            } else {
                echo '<p>Belum ada berita perikanan.</p>';
            }
            ?>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>