<?php 
session_start();
$username=$_POST['akun'];
$sandi=$_POST['sandi'];
include "koneksi1.php";
$sql = "select * from khusus where akun='$username' and sandi='$sandi'";
$result = mysqli_query($koneksi,$sql);
$hasil=mysqli_num_rows($result);

if ($hasil>0) {
    $data=mysqli_fetch_array($result);
    $_SESSION['akun']=$data['akun'];
    $_SESSION['sandi']=$data['sandi'];
    ?>
    <meta http-equiv="refresh" content="1;url=task_admin.php">
    <?php
}
else {
    echo "<script>alert('Maaf Username atau Password kamu Salah')</script>";
    ?>
    <meta http-equiv="refresh" content="1;url=indexi.php">
    <?php
}
?>