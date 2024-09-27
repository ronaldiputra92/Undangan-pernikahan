<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "undangan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data dari formulir
$id = $_POST['id'];
$tanggal = date('Y-m-d');
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$status = $_POST['status'];

$sql = "INSERT INTO tamu_undangan (id ,tanggal, nama, jumlah, status) VALUES ( $id,'$tanggal', '$nama', '$jumlah', '$status')";

// Jalankan query
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
