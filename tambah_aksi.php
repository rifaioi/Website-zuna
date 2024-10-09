<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$nisn = $_POST['NISN'];
$no = $_POST['No'];
$nama = $_POST['Nama'];
$alamat = $_POST['Alamat'];

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO tbzuna (nisn, no, nama, alamat) VALUES ('$nisn','$no', '$nama', '$alamat')");

// mengalihkan halaman kembali ke index.php
header("Location: index.php");
?>
