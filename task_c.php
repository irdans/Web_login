<?php 
session_start();
if(!isset($_SESSION['username'])&&!isset($_SESSION['password'])) {
    ?>
    <meta http-equiv="refresh" content="1;url=index.php">
    <?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Hub</title>
</head>
<body>
    <?php
    $id=$_SESSION['username'];
    include "koneksi.php";
    $sql="select * from murids where nis='$id'";
    $result = mysqli_query($koneksi,$sql);
    $data = mysqli_fetch_array($result);
    echo "
    <b>Selamat Datang</b><br>
    Anda Berhasil Login Sebagai
    <b>{$data['nama_siswa']}</b>
    <p>
    ";
    ?>

<?php 
$sql="select * from nilai where nis='$id'";
$result = mysqli_query($koneksi,$sql);

echo "<h3>Nilai Siswa</h3>";
echo"<table border=1>";
echo"<tr>
        <th>Nis</th>
        <th>Nama Mapel</th>
        <th>Nilai</th>
    </tr>";
while ($data = mysqli_fetch_array($result)){
    echo "
    <tr>
    <td>$data[nis]</td>
    <td>$data[nama_mapel]</td>
    <td>$data[nilai_siswa]</td>
    </tr>
    ";

}
echo"</table";
?>
   <p>
    <!-- Tombol Logout di bawah tabel -->
    <a href="logout.php"><button class="add">Logout</button></a>


    <section id="menu" class="menu">
    
</body>
</html>
