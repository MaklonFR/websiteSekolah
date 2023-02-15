<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbsekolah_001";

    //Buat koneksi ke database
    $conn = new mysqli ($servername, $username, $password, $dbname);
    //Cek Koneksi
    if ($conn->connect_error) {
        die ("Koneksi gagal: " . $conn -> connect_error);
    }

    //echo "koneksi berhasil";
?>