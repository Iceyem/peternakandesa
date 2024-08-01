<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'peternakandesa';

$link = new mysqli($hostname, $username, $password, $database);

if ($link->connect_error) {
    die("Koneksi gagal: " . $link->connect_error);
} else {
    echo "Koneksi berhasil!";
}
?>
