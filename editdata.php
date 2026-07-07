<?php
    require 'fungsi.php';

    $id = $_GET["id"];

    $query = "SELECT * FROM mahasiswa WHERE id=$id";

    $mhs = tampildata ($query)[0];

    if(isset($_POST["kirim"]))
    {
        if (editdata($_POST, $id) > 0) 
            {
                echo "
                <script>
                alert('Data berhasil di edit!');
                document.location.href='mahasiswa.php';
                </script>";
            } 
        else 
            {
                echo "
                <script>
                alert('Data gagal di edit!');
                </script>";
            }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit mahasiswa</title>
    <link rel="stylesheet" href="aset/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet">
</head>
<body>
    <h1 align="center">
        Form Mahasiswa
    </h1>
    <table border="1" align="center" cellspacing="0" cellpadding="10px">
        <tr>
            <td>
                <a href="index.php" = >Biodata</a>
            </td>
            <td>
                <a href="hlm2.aaz.php" = >SMA</a>
            </td>
            <td>
                <a href="hlm3.aaz.php" = >Kuliah</a>
            </td>
            <td>
                <a href="mahasiswa.php" = >Data Mahasiswa</a>
            </td>
            <td>
                <a href="tambahdata.php" = >Form Mahasiswa</a>
            </td>
        </tr>
    </table>
    <br><br>

    <form action="" method="post">
    <label for="nama">Nama:</label>
    <br>
    <input type="text" id="nama" name="nama" value="<?= $mhs["nama"]?>">
    <br><br>

    <label for="nim">NIM:</label>
    <br>
    <input type="number" id="nim" name="nim" value="<?= $mhs["nim"]?>">
    <br><br>

    <label for="prodi">Prodi:</label>
    <br>
    <input type="text" id="prodi" name="prodi" value="<?= $mhs["prodi"]?>">
    <br><br>

    <label for="email">Email:</label>
    <br>
    <input type="email" id="email" name="email" value="<?= $mhs["email"]?>">
    <br><br>

    <label for="nohp">No HP:</label>
    <br>
    <input type="number" id="nohp" name="no_hp" value="<?= $mhs["no_hp"]?>">
    <br><br>

    <label for="foto">Upload Foto:</label>
    <br>
    <input type="text" id="foto" name="foto" value="<?= $mhs["foto"]?>">
    <br><br>

    <input type="submit" value="Kirim Data" name="kirim">
    </form>
</body>
</html>