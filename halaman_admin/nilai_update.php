<?php
include "koneksi1.php";

$no = $_POST['id'];
$nis = $_POST['nis'];
$nama_mapel = $_POST['nama_mapel'];
$nilai = $_POST['nilai'];

if (isset($_POST['update'])) {
    $sqls = "UPDATE nilai SET nama_mapel='$nama_mapel', nilai_siswa='$nilai' WHERE no='$no'";
    $update = mysqli_query($koneksi, $sqls);
    $hasil = mysqli_affected_rows($koneksi);

    if ($hasil > 0) {
        echo "<script>alert('Data Berhasil Diedit')</script>";
    } else {
        echo "<script>alert('Data Gagal Diedit')</script>";
    }
}
?>

<meta http-equiv="refresh" content="1;url=task_admin.php">
