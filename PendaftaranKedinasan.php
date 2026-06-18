<?php

use Pendaftaran;
// Memanggil class induk
require_once "Pendaftaran.php";

class PendaftaranKedinasan extends Pendaftaran {
    private $sk_ikatan_dinas;
    private $instansi_sponsor;

    public function __construct($id_pendaftaran, $nama_calon, $asal_sekolah, $nilai_ujian, $biaya_pendaftaran_dasar, $sk_ikatan_dinas, $instansi_sponsor) {
        parent::__construct($id_pendaftaran, $nama_calon, $asal_sekolah, $nilai_ujian, $biaya_pendaftaran_dasar);
        $this->sk_ikatan_dinas = $sk_ikatan_dinas;
        $this->instansi_sponsor = $instansi_sponsor;
    }

    public function getDaftarKedinasan($db) {
        $sql = "SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Kedinasan'";
        return $db->conn->query($sql);
    }

    public function hitungTotalBiaya() {
        return $this->biaya_pendaftaran_dasar * 1.25; 
    }

    public function tampilkanInfoJalur() {
        return "Instansi: " . $this->instansi_sponsor . " (No. SK: " . $this->sk_ikatan_dinas . ")"; 
    }
}
?>