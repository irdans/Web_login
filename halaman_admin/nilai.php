<!DOCTYPE html>
<html>
<head>
    <title>Form Data Nilai Siswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form method="POST" action="nilai_simpan.php" class="kotak">
        <table>
            <tr>
                <td colspan="2" align="center"><h2>Form Data Nilai Siswa</h2></td>
            </tr>
            <tr>
                <td>NIS</td>
                <td><input type="text" name="nis" class="text" required></td>
            </tr>
            <tr>
                <td>Nama Mata Pelajaran</td>
                <td><input type="text" name="namamapel" class="text" required></td>
            </tr>
            <tr>
                <td>Nilai</td>
                <td><input type="text" name="nilai" class="text" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="simpan" value="Simpan" class="simpan">
                    <a href="task_admin.php" class="simpan">Batal</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
