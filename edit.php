<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP dan MySQLi</title>
</head>
<body>
    <h2>CRUD DATA SISWA</h2>
    <br/>
    <a href="index.php">KEMBALI</a>
    <br/><br/>
    <h3>EDIT DATA SISWA</h3>

    <?php
    include 'koneksi.php';
    $nisn = $_GET['NISN'];
    $data = mysqli_query($koneksi, "SELECT * FROM tbzuna WHERE NISN='$nisn'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
    <form method="post" action="update.php">
        <table>
            <tr>
                <td>NISN</td>
                <td>
                    <input type="number" name="NISN" value="<?php echo $d['NISN']; ?>">
                </td>
            </tr>
            <tr>
                <td>No</td>
                <td><input type="number" name="No" value="<?php echo $d['No']; ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama" value="<?php echo $d['Nama']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="Alamat" value="<?php echo $d['Alamat']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>
