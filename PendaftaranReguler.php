<?php

use Pendaftaran;
// Memanggil class induk
require_once "Pendaftaran.php";

class PendaftaranReguler extends Pendaftaran {
    private $pilihan_prodi;
    private $lokasi_kampus;

    public function __construct($id_pendaftaran, $nama_calon, $asal_sekolah, $nilai_ujian, $biaya_pendaftaran_dasar, $pilihan_prodi, $lokasi_kampus) {
        parent::__construct($id_pendaftaran, $nama_calon, $asal_sekolah, $nilai_ujian, $biaya_pendaftaran_dasar);
        $this->pilihan_prodi = $pilihan_prodi;
        $this->lokasi_kampus = $lokasi_kampus;
    }

    public function getDaftarReguler($db) {
        $sql = "SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Reguler'";
        return $db->conn->query($sql);
    }

    public function hitungTotalBiaya() {
        return $this->biaya_pendaftaran_dasar; 
    }

    public function tampilkanInfoJalur() {
        return "Pilihan Prodi: " . $this->pilihan_prodi . " (Lokasi: " . $this->lokasi_kampus . ")"; 
    }
}
?>