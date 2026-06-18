<?php 

    $koneksi = mysqli_connect("localhost", "root", "", "shsweeklyB-TI");

    $query = "SELECT * FROM mahasiswa";

    $result = mysqli_query($koneksi, $query);
    /* /// ambil data (fetch) dari mahasiswa
    /// mysqli_fetch_row --> array numeric
    $mhs = mysqli_fetch_row ($result);

    var_dump($mhs[1]);

    /// mysqli_fetch_assoc -->asosiatif
    $mhs = mysqli_fetch_assoc ($result);

    var_dump($mhs["nama"]);

    /// mysqli_fetch_array-->
    $mhs = mysqli_fetch_array ($result);

    var_dump($mhs[1]);

    /// mysqli_fetch_object
    $mhs = mysqli_fetch_object ($result);

    var_dump($mhs->nama); */

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" href="aset/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet">
</head>
<body>
    <h1 align="center">
        Data Mahasiswa
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

    <a href="tambahdata.php"><button>Tambah Data</button></a>
    <br><br>
    
    <table border="1" cellpadding="5px">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Program Studi</th>
            <th>Email</th>
            <th>No. WhatsApp</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        <?php
            while ($mhs = mysqli_fetch_assoc($result))
                {
        ?>
        <tr>
            <td>1</td>
            <td><?php echo $mhs["nama"] ?></td>
            <td><?php echo $mhs["nim"] ?></td>
            <td><?php echo $mhs["prodi"] ?></td>
            <td><?php echo $mhs["email"] ?></td>
            <td><?php echo $mhs["no_hp"] ?></td>
            <td><img src="aset/images/hirono2.png" width="50px"></td>
            <td>
                <a href="editdata.php"><button>Edit</button></a>
                <a href="deletedata.php"><button>Hapus</button></a>
            </td>
        </tr>
        <?php
                }
        ?>



    </table>
    <br><br>
    <table border="1" cellpadding="5px">
        <tr>
            <td>baris 1 kolom 1</td>
            <td>baris 1 kolom 2</td>
            <td>baris 1 kolom 3</td>
            <td>baris 1 kolom 4</td>
        </tr>
        <tr>
            <td>baris 2 kolom 1</td>
            <td rowspan="2" colspan="2" align="center">?</td>
            <!-- <td>baris 2 kolom 3</td> -->
            <td>baris 2 kolom 4</td>
        </tr>
        <tr>
            <td>baris 3 kolom 1</td>
            <td>baris 3 kolom 4</td>
            <!-- <td>baris 3 kolom 3</td>
            <td>baris 3 kolom 4</td> -->
        </tr>
        <tr>
            <td>baris 4 kolom 1</td>
            <td>baris 4 kolom 2</td>
            <td>baris 4 kolom 3</td>
            <td>baris 4 kolom 4</td>
        </tr>
    </table>
</body>
</html>