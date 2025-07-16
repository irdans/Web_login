<!DOCTYPE html>
<html>
<head>
    <title>Form Edit Data Nilai</title>
</head>
<body>
    <?php
    $id = $_GET['id'];
    include "koneksi1.php";
    $sql = "SELECT * FROM nilai WHERE no='$id'";
    $result = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($result);
    ?>

    <form method="POST" action="nilai_update.php" class="kotak">
        <table>
            <tr>
                <td colspan="2" align="center">
                    <h2>Form Edit Data Nilai</h2>
                </td>
            </tr>
            <tr>
                <td>Id</td>
                <td><input type="text" name="id" value="<?= $data['no'] ?>" readonly></td>
            </tr>
            <tr>
                <td>NIS</td>
                <td><input type="text" name="nis" value="<?= $data['nis'] ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama Mata Pelajaran</td>
                <td><input type="text" name="nama_mapel" value="<?= $data['nama_mapel'] ?>" required></td>
            </tr>
            <tr>
                <td>Nilai</td>
                <td><input type="text" name="nilai" value="<?= $data['nilai_siswa'] ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="update" value="Update" class="simpan">
                    <a href="task_admin.php">Batal</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
