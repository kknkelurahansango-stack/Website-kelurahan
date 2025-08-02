<?php include 'includes/header.php'; ?>

<section class="hero-section">
    <div class="container text-center text-white">
        <h1>Data Statistik Penduduk Kelurahan Sango</h1>
        <p>Rekapitulasi Akhir Bulan berdasarkan RT/RW, Jenis Kelamin, dan Jumlah KK</p>
    </div>
</section>

<div class="container my-5">
    <div class="card p-4">
        <h4 class="text-center mb-4">Tabel Rekapitulasi Penduduk Kelurahan Sango</h4>
        <table class="table table-bordered text-center">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>RT/RW</th>
                    <th>Jumlah KK</th>
                    <th>Laki-laki</th>
                    <th>Perempuan</th>
                    <th>Jumlah Jiwa</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                // Data statis sesuai gambar (Akhir Bulan)
                $data = [
                    ['rt_rw' => '001/01', 'kk' => 65, 'l' => 135, 'p' => 135],
                    ['rt_rw' => '002/01', 'kk' => 51, 'l' => 152, 'p' => 155],
                    ['rt_rw' => '003/02', 'kk' => 65, 'l' => 144, 'p' => 151],
                    ['rt_rw' => '004/02', 'kk' => 47, 'l' => 72,  'p' => 76],
                    ['rt_rw' => '005/03', 'kk' => 59, 'l' => 102, 'p' => 103],
                    ['rt_rw' => '006/03', 'kk' => 59, 'l' => 115, 'p' => 118],
                    ['rt_rw' => '007/04', 'kk' => 51, 'l' => 86,  'p' => 83],
                    ['rt_rw' => '008/04', 'kk' => 70, 'l' => 147, 'p' => 151],
                ];

                $no = 1;
                $total_kk = 0;
                $total_l = 0;
                $total_p = 0;

                foreach ($data as $row):
                    $jumlah = $row['l'] + $row['p'];
                    $total_kk += $row['kk'];
                    $total_l += $row['l'];
                    $total_p += $row['p'];
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['rt_rw'] ?></td>
                    <td><?= $row['kk'] ?></td>
                    <td><?= $row['l'] ?></td>
                    <td><?= $row['p'] ?></td>
                    <td><strong><?= $jumlah ?></strong></td>
                </tr>
                <?php endforeach; ?>
                <tr class="table-secondary">
                    <td colspan="2"><strong>Total</strong></td>
                    <td><strong><?= $total_kk ?></strong></td>
                    <td><strong><?= $total_l ?></strong></td>
                    <td><strong><?= $total_p ?></strong></td>
                    <td><strong><?= $total_l + $total_p ?></strong></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
