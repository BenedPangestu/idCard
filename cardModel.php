<?php 
include 'database.php';
// Class untuk mengelola data dari tabel
class Data {
    private $conn;

    // Constructor
    public function __construct($db) {
        $this->conn = $db;
    }

    // Method untuk mengambil data dari tabel
    public function getAllData() {
        $sql = "SELECT * FROM card"; // Ganti 'nama_tabel' dengan nama tabel Anda
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            // return $result;
            while ($row = $result->fetch_assoc()) {
                $cards[] = $row;
            }
            return $cards;
        } else {
            return "Tidak ada data yang ditemukan";
        }
    }
    public function getDataById($id) {
        $sql = "SELECT * FROM card where card_id = '".$id." '"; // Ganti 'nama_tabel' dengan nama tabel Anda
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $cards = $row;
            }
            return $cards;
        } else {
            return null;
        }
    }
}
// $data = new Data($db);
// $data->getDataFromTable();

// Menutup koneksi
// $db->close();
?>