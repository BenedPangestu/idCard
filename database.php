<?php
// Class untuk koneksi database
class Database {
    // Properti
    private $host = "localhost";
    private $username = "root"; // Ganti dengan username MySQL Anda
    private $password = ""; // Ganti dengan password MySQL Anda
    private $database = "card_gcr"; // Ganti dengan nama database Anda
    private $conn;

    // Method untuk melakukan koneksi ke database
    public function connect() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        // Cek koneksi
        if ($this->conn->connect_error) {
            die("Koneksi Gagal: " . $this->conn->connect_error);
        }

        return $this->conn;
    }
}



// Menggunakan class Database untuk membuat objek koneksi
$database = new Database();
$db = $database->connect();

// Membuat objek Data dan memanggil method untuk mengambil data dari tabel
// $data = new Data($db);
// $data->getDataFromTable();

// // Menutup koneksi
// $db->close();
?>
