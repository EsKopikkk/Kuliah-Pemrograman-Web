<?php
$host = "localhost";  // server database
$user = "root";       // user default Laragon/XAMPP
$pass = "";           // password default kosong
$db   = "db_notespemweb";  // nama database Anda

// Membuat koneksi ke MySQL
$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi berhasil atau tidak
if (!$conn) {
    // Tampilkan pesan error jika koneksi gagal
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>
