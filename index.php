<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP dan MySQLi</title>
    <style>
        th{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <h3>Nama : MUHAMMAD ZUNA ADZFAR RIFAI</h3>
    <h1>CRUD DATA SISWA</h1>
    <br/>
    <a href="tambah.php">+ TAMBAH SISWA</a>
    <br/><br/>
    <table border="2" style="border-color: black;">
        <tr>
            <th>NISN</th>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>OPSI</th>
        </tr>
        <?php
        include 'koneksi.php';
        $data = mysqli_query($koneksi, "SELECT * FROM tbzuna");
        while ($d = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?php echo $d['NISN']; ?></td>
            <td><?php echo $d['No']; ?></td>
            <td><?php echo $d['Nama']; ?></td>
            <td><?php echo $d['Alamat']; ?></td>
            <td>
                <a href="edit.php?NISN=<?php echo $d['NISN']; ?>">EDIT</a>
                <a href="hapus.php?NISN=<?php echo $d['NISN']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">HAPUS</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
