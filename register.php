<?php
require 'koneksi.php';
$fullname = $_POST["fullname"];
$username = $_POST["username"];
$jabatan = $_POST["jabatan"];
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "INSERT INTO tbl_register (fullname, username, jabatan, email, password) 
            VALUES ('$fullname', '$username', '$jabatan', '$email', '$password')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: login.html");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
