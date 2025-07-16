<?php 
session_start();
if(isset($_SESSION['username'])&&isset($_SESSION['password'])) {
    ?>
    <meta http-equiv="refresh" content="1;url=task_c.php">
    <?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="d-flex justify-content-center align-items-center vh-100">
  <form method="post" action="ceklogin.php" class="border p-4 rounded shadow" style="min-width: 300px;">
    <h3 class="mb-3">Sistem Informasi Management Project</h3>
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" name="username" class="form-control" id="username" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" name="sandi" class="form-control" id="password" required>
    </div>
    <button type="submit" name="login" class="btn btn-primary w-100">Submit</button>
  </form>
  <a href="halaman_admin/indexi.php">
    <button>Masuk Admin</button>
</a>
</div>
</body>
</html>