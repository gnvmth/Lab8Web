<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "latihan1";

$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn == false) {
    echo "Koneksi ke server gagal: " . mysqli_connect_error();
    die();
}
mysqli_set_charset($conn, "utf8mb4");

// Hapus tanda # di bawah ini hanya saat menguji koneksi
// (buka langsung http://localhost/lab8_php_database/koneksi.php)
#echo "Koneksi berhasil";

// Fungsi bantu untuk mencegah XSS saat menampilkan data
function e($teks) {
    return htmlspecialchars((string)$teks, ENT_QUOTES, 'UTF-8');
}
?>
