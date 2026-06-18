<?php

class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db_name = "db_simulasi_pbo_ti-1d_sofyanyunusrohman";
    
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
        
        // Cek koneksi
        if ($this->conn->connect_error) {
            die("Koneksi Database Gagal: " . $this->conn->connect_error);
        }
    }
}

?>