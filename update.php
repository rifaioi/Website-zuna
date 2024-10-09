<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$nisn = $_POST['NISN'];
$no = $_POST['No'];
$nama = $_POST['Nama'];
$alamat = $_POST['Alamat'];

// update data di database
mysqli_query($koneksi, "UPDATE tbzuna SET NISN='$nisn', No='$no', Nama='$nama', Alamat='$alamat' WHERE NISN='$nisn'");

// mengalihkan halaman kembali ke index.php
header("Location: index.php");
?>
