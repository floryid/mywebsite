<?php
$servername = "localhost";
$database = "db_register";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Koneksi Gagal Silakan masukan email dan password yang benar : " . mysqli_connect_error());
} else {
    echo "Koneksi Berhasil";
}
