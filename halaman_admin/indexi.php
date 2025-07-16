<?php
session_start();
if(isset($_SESSION['akun'])&&isset($_SESSION['sandi'])) {
    ?>
    <meta http-equiv="refresh" content="1;url=task_admin.php">
    <?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="d-flex justify-content-center align-items-center vh-100">
  <form method="post" action="cekadmin_.php" class="border p-4 rounded shadow" style="min-width: 300px;">
    <h3 class="mb-3 text-center">Halaman Admin</h3>
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" name="akun" class="form-control" id="username" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" name="sandi" class="form-control" id="password" required>
    </div>
    <button type="submit" name="login" class="btn btn-primary w-100">Submit</button>
  </form>
</div>
</body>
</html>
