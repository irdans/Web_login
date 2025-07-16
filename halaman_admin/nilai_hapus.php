<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    include "koneksi1.php";

    $sqld = "DELETE FROM nilai WHERE no='$id'";
    $hapus = mysqli_query($koneksi, $sqld);
    $hasil = mysqli_affected_rows($koneksi);

    if ($hasil > 0) {
        echo "<script>alert('Data Berhasil Dihapus')</script>";
    } else {
        echo "<script>alert('Data Gagal Dihapus')</script>";
    }
}
?>
<meta http-equiv="refresh" content="1;url=task_admin.php">
