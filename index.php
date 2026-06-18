<?php

require_once "database.php";
require_once "PendaftaranReguler.php";
require_once "PendaftaranPrestasi.php";
require_once "PendaftaranKedinasan.php";

$db = new Database();

$helperReguler = new PendaftaranReguler(0, '', '', 0, 0, '', '');
$helperPrestasi = new PendaftaranPrestasi(0, '', '', 0, 0, '', '');
$helperKedinasan = new PendaftaranKedinasan(0, '', '', 0, 0, '', '');

// 3. Menarik data dari masing-masing jalur pendaftaran
$dataReguler = $helperReguler->getDaftarReguler($db);
$dataPrestasi = $helperPrestasi->getDaftarPrestasi($db);
$dataKedinasan = $helperKedinasan->getDaftarKedinasan($db);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem PMB Spesifik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f6f9; }
        .table-custom th { background-color: #0d6efd; color: white; text-align: center;}
        .table-custom td { vertical-align: middle; }
    </style>
</head>
<body>

    <nav class="navbar navbar-dark bg-primary shadow-sm mb-4">
        <div class="container">
            <span class="navbar-brand mb-0 h1 fw-bold">Sistem Penerimaan Mahasiswa Baru</span>
        </div>
    </nav>

    <div class="container pb-5">
        
        <h4 class="mb-3 fw-bold text-secondary">A. Jalur Reguler</h4>
        <div class="table-responsive bg-white shadow-sm rounded mb-5">
            <table class="table table-hover table-bordered table-custom mb-0">
                <thead>
                    <tr>
                        <th>No Pendaftaran</th>
                        <th>Nama Calon</th>
                        <th>Asal Sekolah</th>
                        <th>Nilai Ujian</th>
                        <th>Info Spesifik Jalur</th>
                        <th>Total Biaya</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $dataReguler->fetch_assoc()): ?>
                        <?php 
                            // Instansiasi objek mhs reguler yang nyata untuk setiap baris data
                            $mhs = new PendaftaranReguler(
                                $row['id_pendaftaran'], $row['nama_calon'], $row['asal_sekolah'], 
                                $row['nilai_ujian'], $row['biaya_pendaftaran_dasar'], 
                                $row['pilihan_prodi'], $row['lokasi_kampus']
                            ); 
                        ?>
                        <tr>
                            <td class="text-center fw-bold">REG-<?php echo $row['id_pendaftaran']; ?></td>
                            <td><?php echo $row['nama_calon']; ?></td>
                            <td><?php echo $row['asal_sekolah']; ?></td>
                            <td class="text-center"><?php echo $row['nilai_ujian']; ?></td>
                            <td class="text-primary fst-italic"><?php echo $mhs->tampilkanInfoJalur(); ?></td>
                            <td class="text-end fw-bold">Rp <?php echo number_format($mhs->hitungTotalBiaya(), 0, ',', '.'); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

        <h4 class="mb-3 fw-bold text-secondary">B. Jalur Prestasi</h4>
        <div class="table-responsive bg-white shadow-sm rounded mb-5">
            <table class="table table-hover table-bordered table-custom mb-0">
                <thead>
                    <tr>
                        <th style="background-color: #198754;">No Pendaftaran</th>
                        <th style="background-color: #198754;">Nama Calon</th>
                        <th style="background-color: #198754;">Asal Sekolah</th>
                        <th style="background-color: #198754;">Nilai Ujian</th>
                        <th style="background-color: #198754;">Info Spesifik Jalur</th>
                        <th style="background-color: #198754;">Total Biaya</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $dataPrestasi->fetch_assoc()): ?>
                        <?php 
                            // Instansiasi objek mhs prestasi
                            $mhs = new PendaftaranPrestasi(
                                $row['id_pendaftaran'], $row['nama_calon'], $row['asal_sekolah'], 
                                $row['nilai_ujian'], $row['biaya_pendaftaran_dasar'], 
                                $row['jenis_prestasi'], $row['tingkat_prestasi']
                            ); 
                        ?>
                        <tr>
                            <td class="text-center fw-bold">PRS-<?php echo $row['id_pendaftaran']; ?></td>
                            <td><?php echo $row['nama_calon']; ?></td>
                            <td><?php echo $row['asal_sekolah']; ?></td>
                            <td class="text-center"><?php echo $row['nilai_ujian']; ?></td>
                            <td class="text-success fst-italic"><?php echo $mhs->tampilkanInfoJalur(); ?></td>
                            <td class="text-end fw-bold">Rp <?php echo number_format($mhs->hitungTotalBiaya(), 0, ',', '.'); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

        <h4 class="mb-3 fw-bold text-secondary">C. Jalur Kedinasan</h4>
        <div class="table-responsive bg-white shadow-sm rounded mb-5">
            <table class="table table-hover table-bordered table-custom mb-0">
                <thead>
                    <tr>
                        <th style="background-color: #dc3545;">No Pendaftaran</th>
                        <th style="background-color: #dc3545;">Nama Calon</th>
                        <th style="background-color: #dc3545;">Asal Sekolah</th>
                        <th style="background-color: #dc3545;">Nilai Ujian</th>
                        <th style="background-color: #dc3545;">Info Spesifik Jalur</th>
                        <th style="background-color: #dc3545;">Total Biaya</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $dataKedinasan->fetch_assoc()): ?>
                        <?php 
                            // Instansiasi objek mhs kedinasan
                            $mhs = new PendaftaranKedinasan(
                                $row['id_pendaftaran'], $row['nama_calon'], $row['asal_sekolah'], 
                                $row['nilai_ujian'], $row['biaya_pendaftaran_dasar'], 
                                $row['sk_ikatan_dinas'], $row['instansi_sponsor']
                            ); 
                        ?>
                        <tr>
                            <td class="text-center fw-bold">KDN-<?php echo $row['id_pendaftaran']; ?></td>
                            <td><?php echo $row['nama_calon']; ?></td>
                            <td><?php echo $row['asal_sekolah']; ?></td>
                            <td class="text-center"><?php echo $row['nilai_ujian']; ?></td>
                            <td class="text-danger fst-italic"><?php echo $mhs->tampilkanInfoJalur(); ?></td>
                            <td class="text-end fw-bold">Rp <?php echo number_format($mhs->hitungTotalBiaya(), 0, ',', '.'); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>