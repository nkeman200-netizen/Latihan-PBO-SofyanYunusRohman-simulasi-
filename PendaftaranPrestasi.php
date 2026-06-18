<?php
// Memanggil class induk
require_once "Pendaftaran.php";

class PendaftaranPrestasi extends Pendaftaran {
    private $jenis_prestasi;
    private $tingkat_prestasi;

    public function __construct($id_pendaftaran, $nama_calon, $asal_sekolah, $nilai_ujian, $biaya_pendaftaran_dasar, $jenis_prestasi, $tingkat_prestasi) {
        parent::__construct($id_pendaftaran, $nama_calon, $asal_sekolah, $nilai_ujian, $biaya_pendaftaran_dasar);
        $this->jenis_prestasi = $jenis_prestasi;
        $this->tingkat_prestasi = $tingkat_prestasi;
    }

    public function getDaftarPrestasi($db) {
        $sql = "SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Prestasi'";
        return $db->conn->query($sql);
    }

    public function hitungTotalBiaya() {
        return 0; 
    }

    public function tampilkanInfoJalur() {
        return ""; 
    }
}
?>