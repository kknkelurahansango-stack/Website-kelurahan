<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container text-center text-white">
        <h1>Pertanian</h1>
        <p>Informasi potensi dan luas lahan pertanian di Kelurahan Sango</p>
    </div>
</section>

<!-- Konten Pertanian -->
<div class="container section">
    <div class="row mt-4">
        <!-- Potensi Pertanian -->
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="text-center">Potensi Pertanian</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Sayuran: Kacang panjang, Terong</li>
                        <li class="list-group-item">Umbi-umbian: Singkong</li>
                        <li class="list-group-item">Buah: Rica (cabai), Pisang</li>
                    </ul>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="text-center">Kebun Pertanian Ibu Zaitun</h5>
                    <ul>
                        <li>Pelaku: Ibu Zaitun dan kelompok (4 orang)</li>
                        <li>Kebun Rica: P. 25 meter, L. 10 meter</li>
                        <li>Kebun Kacang Panjang / Singkong: P. 30 meter, L. 8 meter</li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="text-center">Kebun Pertanian Pak Rudy</h5>
                    <ul>
                        <li>Pelaku: Pak Rudy (individu)</li>
                        <li>Kebun Rica: P. 2 hektar, L. 100 meter</li>
                        <li>Kebun Pisang: P. 80 meter, L. 350 meter</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Luas Lahan -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">Luas Lahan Pertanian</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Jenis Lahan</th>
                                    <th>Luas</th>
                                    <th>Pemilik</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Kebun Rica</td>
                                    <td>2 hektar (Pak Rudy) <br>+ 250m² (Ibu Zaitun)</td>
                                    <td>Pak Rudy, Ibu Zaitun</td>
                                </tr>
                                <tr>
                                    <td>Kebun Pisang</td>
                                    <td>28.000 m²</td>
                                    <td>Pak Rudy</td>
                                </tr>
                                <tr>
                                    <td>Kebun Singkong / Kacang Panjang</td>
                                    <td>240 m²</td>
                                    <td>Ibu Zaitun</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="text-muted small mt-2">* P = Panjang, L = Lebar, konversi ke m² atau hektar ditampilkan bila relevan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Berita Pertanian -->
    <div class="row mt-5">
        <div class="col-md-12">
            <h3 class="section-title">Berita Pertanian</h3>
            <?php
            include 'includes/config.php';
            $sql = "SELECT * FROM berita WHERE kategori='pertanian' ORDER BY tanggal DESC LIMIT 5";
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
                echo '<p>Belum ada berita pertanian.</p>';
            }
            ?>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>