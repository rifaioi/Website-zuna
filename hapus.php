<?php
// koneksi database
include 'koneksi.php';

// menangkap data no yang dikirim dari URL
$nisn = $_GET['NISN'];

// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM tbzuna WHERE NISN='$nisn'");

// mengalihkan halaman kembali ke index.php
header("Location: index.php");
?>
