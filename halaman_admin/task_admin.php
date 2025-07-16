<?php 
session_start();
if(!isset($_SESSION['akun']) && !isset($_SESSION['sandi'])) {
    echo '<meta http-equiv="refresh" content="1;url=indexi.php">';
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Task Hub</title>
</head>
<body>
<?php
$id = $_SESSION['akun'];
include "koneksi1.php";

$sql = "SELECT * FROM khusus WHERE akun='$id'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($result);

echo "<b>Selamat Datang Admin</b><br>";

$sql = "SELECT * FROM nilai";
$result = mysqli_query($koneksi, $sql);

echo "<h3>Nilai Siswa</h3>";
echo '<a href="nilai.php" class="add">+ Tambah Data</a>';
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
        <th>No</th>
        <th>NIS</th>
        <th>Nama Mapel</th>
        <th>Nilai</th>
        <th>Aksi</th>
      </tr>";

$no = 1;
while ($data = mysqli_fetch_array($result)) {
    echo "<tr>
        <td align='center'>{$no}</td>
        <td>{$data['nis']}</td>
        <td>{$data['nama_mapel']}</td>
        <td>{$data['nilai_siswa']}</td>
        <td align='center'>
            <a href='nilai_edit.php?id={$data['no']}'>Edit</a> | 
            <a href='nilai_hapus.php?id={$data['no']}' onclick=\"return confirm('Apakah Yakin Data akan Dihapus?')\">Hapus</a>
        </td>
    </tr>";
    $no++;
}
echo "</table>";
?>
<p>
<a href="logoutadmin.php"><button class="add">Logout</button></a>
</p>
</body>
</html>
