<?php
// Set header CORS di awal skrip
header("Access-Control-Allow-Origin: *"); // Izinkan akses dari semua origin
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); // Izinkan metode HTTP tertentu
header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Izinkan header tertentu

// Mengambil koneksi database
include 'database.php';

// Periksa koneksi database
if ($link === null) {
    die("Koneksi database tidak tersedia.");
}

// Query untuk mengambil data dari tabel
$query = $link->query("SELECT id, namaproduk, berat, harga FROM kambingdomba ORDER BY id ASC");
$result = array();

// Memeriksa apakah query berhasil dieksekusi
if ($query) {
    // Mengambil setiap baris hasil query dan menyimpannya dalam array $result
    while ($rowData = $query->fetch_assoc()) {
        $result[] = $rowData;
    }

    // Mengubah array hasil ke format JSON dan mengirimkannya sebagai respons
    echo json_encode($result);
} else {
    // Menangani kasus jika query gagal dieksekusi
    echo json_encode(array('message' => 'Query error: ' . $link->error));
}
?>