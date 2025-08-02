<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container text-center text-white">
        <h1>Pendidikan</h1>
        <p>Data fasilitas pendidikan dan informasi sekolah di Kelurahan Sango</p>
    </div>
</section>

<!-- Konten Pendidikan -->
<div class="container section">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="section-title">Data Pendidikan Kelurahan</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Jenis Sekolah</th>
                                    <th>Nama Sekolah</th>
                                    <th>Jumlah Sekolah</th>
                                    <th>Jumlah Siswa</th>
                                    <th>Guru PNS</th>
                                    <th>Guru Honor</th>
                                    <th>Email Sekolah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PAUD/TK</td>
                                    <td>PAUD Terpadu Rio Laha</td>
                                    <td>1</td>
                                    <td>16 siswa</td>
                                    <td>1</td>
                                    <td>-</td>
                                    <td>tkriolaha@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>SD</td>
                                    <td>SD Negeri 57 Kota Ternate</td>
                                    <td>1</td>
                                    <td>158 siswa</td>
                                    <td>11</td>
                                    <td>3</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>SMP</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>SMA</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <th>-</th>
                                    <th>2</th>
                                    <th>174</th>
                                    <th>12</th>
                                    <th>3</th>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Berita Pendidikan -->
    <div class="row mt-5">
        <div class="col-md-12">
            <h3 class="section-title">Berita Pendidikan</h3>
            <?php
            include 'includes/config.php';
            $sql = "SELECT * FROM berita WHERE kategori='pendidikan' ORDER BY tanggal DESC LIMIT 5";
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
                echo '<p>Belum ada berita pendidikan.</p>';
            }
            ?>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>