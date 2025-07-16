<?php 
session_start();
$username=$_POST['username'];
$sandi=$_POST['sandi'];
include "koneksi.php";
$sql = "select * from admin where username='$username' and password='$sandi'";
$result = mysqli_query($koneksi,$sql);
$hasil=mysqli_affected_rows($koneksi);

if ($hasil>0) {
    $data=mysqli_fetch_array($result);
    $_SESSION['username']=$data['username'];
    $_SESSION['password']=$data['password'];
    ?>
    <meta http-equiv="refresh" content="1;url=task_c.php">
    <?php
}
else {
    echo "<script>alert('Maaf Username atau Password kamu Salah')</script>";
    ?>
    <meta http-equiv="refresh" content="1;url=index.php">
    <?php
}
?>