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
    <h3>TAMBAH DATA SISWA</h3>
    <form method="post" action="tambah_aksi.php">
        <table>
            <tr>
                <td>NISN</td>
                <td><input type="number" name="NISN"></td>
            </tr>
            <tr>
                <td>No</td>
                <td><input type="number" name="No"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="Alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>