<?php include 'includes/header.php'; ?>

<!-- Hero Section UMKM -->
<section class="hero-section" style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('images/latarbelakang.png');">
    <div class="container text-center text-white">
        <h1>UMKM</h1>
        <p>Informasi pelaku usaha kecil dan menengah di Kelurahan Sango</p>
    </div>
</section>

<!-- Konten UMKM -->
<div class="container section">
    <h2 class="section-title">Daftar UMKM Berdasarkan Jenis Usaha</h2>

    <?php
    $umkm_data = [
        [
            'icon' => '🍛',
            'jenis' => 'Nasi Kuning',
            'gambar' => 'images/nasi kuning.jpg',
            'deskripsi' => 'Usaha kuliner khas Ternate yang menyediakan nasi kuning dengan lauk pauk lokal. Cocok untuk sarapan dan acara keluarga.',
            'lokasi' => 'Beberapa lokasi RT 01/01, 05/03, 06/03, 02/01, 03/02',
            'pemilik' => [
                ['Diana Hi. Amas', 'RT/RW 01/01'],
                ['Sri Taher', 'RT/RW 05/03'],
                ['Cili Sanoraja', 'RT/RW 06/03'],
                ['Susilawati Taher', 'RT/RW 02/01'],
                ['Rita Malik', 'RT/RW 05/03'],
                ['Juleha Sadik', 'RT/RW 06/03'],
                ['Jamila Piara', 'RT/RW 03/02']
            ]
        ],
        [
            'icon' => '🍰',
            'jenis' => 'Kue',
            'gambar' => 'images/kue.jpg',
            'deskripsi' => 'Menyediakan aneka kue khas seperti bagea, kue kenari, sagu, bolu, dan lainnya. Dapat dipesan untuk acara hajatan dan oleh-oleh.',
            'lokasi' => 'Tersebar di RT 01/01, 07/04, 08/04, 02/01, 06/03',
            'pemilik' => [
                ['Nurlaila Hi. M. Ince', 'RT/RW 01/01'],
                ['Ani Wahab', 'RT/RW 01/01'],
                ['Naima Hi Ishak', 'RT/RW 01/01'],
                ['Nursan Ludja', 'RT/RW 07/04'],
                ['Nurhayati Abdullah', 'RT/RW 07/04'],
                ['Rukia Mulis', 'RT/RW 07/04'],
                ['Kia Uya', 'RT/RW 02/01'],
                ['Johria Ademan', 'RT/RW 08/04'],
                ['Eni Noho', 'RT/RW 08/04'],
                ['Apriyani Jailolo', 'RT/RW 06/03'],
                ['Lela Mahmud', 'RT/RW 01/01'],
                ['Naila M Djamaludin', 'RT/RW 07/04']
            ]
        ],
        [
            'icon' => '🍧',
            'jenis' => 'Jualan Es',
            'gambar' => 'images/umkm es.jpg',
            'deskripsi' => 'Menyediakan berbagai minuman segar seperti es campur, es buah, es cincau, dan es sirup lokal. Cocok untuk pelepas dahaga di siang hari.',
            'lokasi' => 'Lokasi: RT 03/02, 08/04, 05/03',
            'pemilik' => [
                ['Mariam Djamaludin', 'RT/RW 08/04'],
                ['Fatma Naser', 'RT/RW 03/02'],
                ['Diana Mohdar', 'RT/RW 03/02'],
                ['Jumra Rajab', 'RT/RW 08/04'],
                ['Rina Yasin', 'RT/RW 08/04'],
                ['Gangga', 'RT/RW 05/03']
            ]
        ],
        [
            'icon' => '🍽️',
            'jenis' => 'Makanan Masak',
            'gambar' => 'images/makanan masak.jpg',
            'deskripsi' => 'Melayani masakan siap santap seperti ikan bakar, rica-rica, dan sayur bening. Tersedia untuk pesanan harian dan event.',
            'lokasi' => 'RT 07/04 dan RT 03/02',
            'pemilik' => [
                ['Rusni Wahab', 'RT/RW 07/04'],
                ['Rusmilani A Karim', 'RT/RW 03/02']
            ]
        ],
        [
            'icon' => '🍟',
            'jenis' => 'Gorengan',
            'gambar' => 'images/gorengan.jpg',
            'deskripsi' => 'Menjual gorengan seperti bakwan, tahu isi, pastel, pisang goreng, dan lain-lain. Cocok untuk camilan sore hari.',
            'lokasi' => 'RT 08/04',
            'pemilik' => [
                ['Lemart Taher', 'RT/RW 08/04']
            ]
        ],
        [
            'icon' => '🥛',
            'jenis' => 'Susu Kedelai',
            'gambar' => 'images/susu kedelai.jpg',
            'deskripsi' => 'Minuman sehat berbahan dasar kedelai, cocok untuk vegetarian dan bebas kolesterol.',
            'lokasi' => 'RT 08/04',
            'pemilik' => [
                ['Rojak', 'RT/RW 08/04']
            ]
        ],
        [
            'icon' => '☕',
            'jenis' => 'Kopi Rempah',
            'gambar' => 'images/KOPI REMPAH.jpg',
            'deskripsi' => 'Kopi racikan khas dengan rempah-rempah lokal seperti cengkih dan jahe. Memberikan sensasi hangat dan khas daerah.',
            'lokasi' => 'RT 02/01',
            'pemilik' => [
                ['Ajuuba A. Asagaf', 'RT/RW 02/01']
            ]
        ]
    ];

    foreach ($umkm_data as $umkm): ?>
        <h3 class="mt-5"><?php echo $umkm['icon'] . ' ' . $umkm['jenis']; ?></h3>
        <div class="row mb-5">
            <!-- Kolom kiri: Gambar + Deskripsi -->
            <div class="col-md-6">
                <div class="card h-100">
                    <img src="<?php echo $umkm['gambar']; ?>" class="card-img-top umkm-img" alt="<?php echo $umkm['jenis']; ?>">
                    <div class="card-body">
                        <h5 class="card-title">UMKM <?php echo $umkm['jenis']; ?></h5>
                        <p class="card-text"><?php echo $umkm['deskripsi']; ?></p>
                        <p class="text-muted"><i class="fas fa-map-marker-alt"></i> <?php echo $umkm['lokasi']; ?></p>
                    </div>
                </div>
            </div>

            <!-- Kolom kanan: Tabel -->
            <div class="col-md-6">
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 50px;">No</th>
                                <th>Nama Pemilik</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($umkm['pemilik'] as $i => $p): ?>
                                <tr>
                                    <td><?php echo $i + 1; ?></td>
                                    <td><?php echo $p[0]; ?></td>
                                    <td><?php echo $p[1]; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php include 'includes/footer.php'; ?>
