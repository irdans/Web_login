<?php 
include "koneksi1.php";
$nis = $_POST['nis'];
$namamapel = $_POST['namamapel'];
$nilai = $_POST['nilai'];

if (isset($_POST['simpan'])) {
    $sqls = "INSERT INTO nilai (nis, nama_mapel, nilai_siswa) VALUES ('$nis', '$namamapel', '$nilai')";
    $simpan = mysqli_query($koneksi, $sqls);
    $hasil = mysqli_affected_rows($koneksi);

    if ($hasil > 0) {
        echo "<script>alert('Data Berhasil Disimpan')</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan')</script>";
    }
}
?>
<meta http-equiv="refresh" content="1;url=task_admin.php">
