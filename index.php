<?php include 'includes/header.php'; ?>
<?php include 'includes/config.php'; ?>

<link rel="stylesheet" href="css/style.css">

<div class="hero-section">
    <div class="container">
        <h1>Selamat Datang di Website Kelurahan</h1>
        <p class="lead">Melayani masyarakat dengan sepenuh hati</p>
    </div>
</div>

<div class="container my-5">

    <!-- Berita Terbaru dan Profil Sejarah -->
    <div class="row">
        <!-- Berita Terbaru -->
        <div class="col-md-6">
            <section id="berita-terbaru" class="section">
                <h2 class="section-title">Berita Terbaru</h2>
                <?php
                $query = "SELECT * FROM berita ORDER BY tanggal DESC LIMIT 3";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="card mb-4">
                        <?php if (!empty($row['gambar'])): ?>
                            <img src="images/<?php echo htmlspecialchars($row['gambar']); ?>" class="card-img-top" alt="Gambar Berita">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($row['judul']); ?></h5>
                            <p class="card-text"><?php echo substr(strip_tags($row['isi']), 0, 100); ?>...</p>
                            <p class="text-muted small">
                                Kategori: <?php echo htmlspecialchars($row['kategori']); ?> |
                                Tanggal: <?php echo date('d-m-Y', strtotime($row['tanggal'])); ?>
                            </p>
                        </div>
                    </div>
                <?php } ?>
            </section>
        </div>

        <!-- Profil Sejarah -->
        <div class="col-md-6">
            <section id="sejarah" class="section">
                <h2 class="section-title">Profil Sejarah Kelurahan</h2>
                <div class="card">
                    <div class="card-body">
                        <p>Kelurahan Sango, yang terletak di Kecamatan Ternate Utara, Kota Ternate, Provinsi Maluku Utara, memiliki sejarah panjang yang berakar dari masa kerajaan Gapi pada abad ke-13, 
                            yang kemudian berkembang menjadi Kesultanan Ternate setelah masuknya Islam pada tahun 1486. Wilayah ini menjadi bagian penting dalam sejarah rempah-rempah di Maluku, menarik kedatangan bangsa Eropa seperti Portugis, Spanyol, dan Belanda. 
                            Dalam struktur pemerintahan modern, Kelurahan Sango termasuk dalam Bagian Wilayah Kota (BWK) I sesuai dengan RT/RW Ternate tahun 2007. Saat ini, Kelurahan Sango memiliki peran aktif dalam pelayanan administrasi kependudukan serta pemberdayaan masyarakat, termasuk pembangunan gedung kesenian dan pembentukan Karang Taruna “Soa Gam Cim” sebagai wadah kreativitas dan olahraga pemuda. 
                            Kelurahan ini terus berkembang sebagai pusat layanan publik dan penggerak kegiatan sosial budaya di tingkat lokal.</p>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Visi Misi -->
    <section id="visi-misi" class="section mt-5">
        <h2 class="section-title">Visi & Misi</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="card-title">Visi</h3>
                        <p class="card-text">Terwujudnya Kantor Kelurahan Sango sebagai tempat pelayanan masyarakat yang tertib, nyaman, cepat dan tepat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="card-title">Misi</h3>
                        <ul>
                            <li>Menciptakan tata kelola pemerintahan kelurahan yang amanah, jujur, dan terbuka, menuju Kelurahan Sango yang sejahtera dan mandiri.</li>
                            <li>Menciptakan sistem kerjasama antar pemerintah, masyarakat dan swasta...</li>
                            <li>Memberikan pelayanan yang bermutu, cepat, mudah, dan penuh keramahan.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Struktur Organisasi -->
    <section id="struktur-organisasi" class="section mt-5">
        <h2 class="section-title">Struktur Organisasi</h2>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="card">
                    <div class="card-body">
                        <a href="images/organisasi struktur.png" target="_blank">
                            <img 
                                src="images/organisasi struktur.png" 
                                alt="Struktur Organisasi Kelurahan Sango" 
                                class="img-fluid my-4 struktur-img">
                        </a>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th>Jabatan</th>
                                        <th>Nama</th>
                                        <th>NIP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td><strong>Lurah</strong></td><td>Karno Nasir, SH, NL.P</td><td>197507132001121003</td></tr>
                                    <tr><td><strong>Sekretaris Lurah</strong></td><td>Wita Albugis, SH</td><td>198208062011012003</td></tr>
                                    <tr><td><strong>Kasie Pemerintahan</strong></td><td>Leny</td><td>19750172007012029</td></tr>
                                    <tr><td><strong>Kasie Pembangunan</strong></td><td>Idham Badarudin, SE.</td><td>197701012012121003</td></tr>
                                    <tr><td><strong>Kasie Pelayanan Umum</strong></td><td>Rhanto Sabu</td><td>198105272007011005</td></tr>
                                    <tr><td><strong>Staf</strong></td><td>Mohthar</td><td>19740507200711028</td></tr>
                                    <tr><td><strong>Staf</strong></td><td>Eny Noho</td><td>NPPT. 2015435</td></tr>
                                    <tr><td><strong>Staf</strong></td><td>Junaidi Kamis</td><td>NPPT. 20201046</td></tr>
                                    <tr><td><strong>Staf</strong></td><td>Nurhafni Gani</td><td>NPPT. 201135044</td></tr>
                                    <tr><td><strong>Staf</strong></td><td>Pratiwi T.Soleman</td><td>NPPT. 2022682</td></tr>
                                    <tr><td><strong>Staf</strong></td><td>Sumarni Muis</td><td>NPPT. 2022680</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak -->
    <section id="kontak" class="section mt-5">
        <h2 class="section-title">Hubungi Kami</h2>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="contact-form">
                    <form action="proses-kontak.php" method="POST">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" name="pesan" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Google Maps -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h3 class="mb-3">Lokasi Kelurahan Sango</h3>
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127702.0163082561!2d127.29705505!3d0.79205544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3243ff53a9c79fa3%3A0xa0cb92f6d7a1b5fd!2sKelurahan%20Sango%2C%20Ternate%2C%20Maluku%20Utara!5e0!3m2!1sid!2sid!4v1654762139857!5m2!1sid!2sid" 
                    width="100%" 
                    height="400" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </section>
</div>

<?php include 'includes/footer.php'; ?>