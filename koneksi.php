<?php
$host = 'localhost'; // Host database
$user = 'root'; // Pengguna database
$password = ''; // Kata sandi database (kosong jika menggunakan XAMPP default)
$database = 'pesan'; // Nama database

// Membuat koneksi ke database
$conn = mysqli_connect($host, $user, $password, $database);

// Memeriksa apakah koneksi berhasil
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
