<?php
    $koneksi = mysqli_connect("localhost", "root", "", "shsweeklyB-TI");

    function tampildata($query)
    {
        global $koneksi;
        $result = mysqli_query($koneksi, $query);

        $rows = [];
        while($row = mysqli_fetch_assoc($result))
            {
                $rows[] = $row;
            }

            return $rows;
    }

    function hapusdata($id)
    {
        global $koneksi;
        $query = "DELETE FROM mahasiswa WHERE id=$id";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }

    function tambahdata($data)
    {
        global $koneksi;

        $nama = $data["nama"];
        $nim = $data["nim"];
        $prodi = $data["prodi"];
        $email = $data["email"];
        $no_hp = $data["no_hp"];
        $foto = $data["foto"];

        $query = "INSERT INTO mahasiswa (nama, nim, prodi, email, no_hp, foto)
                VALUES('$nama', '$nim', '$prodi', '$email', '$no_hp', '$foto')";

        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }
?>