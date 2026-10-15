<?php
// Aktifkan agar mysqli melempar Exception jika koneksi gagal
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$host     = getenv('MYSQLHOST') ?: 'localhost';
$user     = getenv('MYSQLUSER') ?: 'root';
$password = getenv('MYSQLPASSWORD') ?: '';
$database = getenv('MYSQLDATABASE') ?: 'kepegawaian'; // Database Lokal
$port     = getenv('MYSQLPORT') ?: '3306';

try {
    $connection = mysqli_connect($host, $user, $password, $database, $port);
    // host, username, password, dbname, port, socket
    // echo "Berhasil";
} catch (Exception $e) {
    echo "Gagal: " . $e->getMessage();
}