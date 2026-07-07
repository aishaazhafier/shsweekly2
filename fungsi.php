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

    function tambahdata($data, $files)
    {
        global $koneksi;

        $nama = htmlspecialchars ($data["nama"]);
        $nim = htmlspecialchars ($data["nim"]);
        $prodi = htmlspecialchars ($data["prodi"]);
        $email = htmlspecialchars ($data["email"]);
        $no_hp = htmlspecialchars ($data["no_hp"]);

        $namafoto = $files["name"];
        $tmpfoto = $files["tmp_name"];
        $path = "aset/images/$namafoto";

        if(move_uploaded_file($tmpfoto,$path))
        {    
            $query = "INSERT INTO mahasiswa (nama, nim, prodi, email, no_hp, foto)
            VALUES('$nama', '$nim', '$prodi', '$email', '$no_hp', '$namafoto')";

            mysqli_query($koneksi, $query);
        }

        return mysqli_affected_rows($koneksi);
    }

    function editdata($data)
    {
        global $koneksi;

        $nama = htmlspecialchars ($data["nama"]);
        $nim = htmlspecialchars ($data["nim"]);
        $prodi = htmlspecialchars ($data["prodi"]);
        $email = htmlspecialchars ($data["email"]);
        $no_hp = htmlspecialchars ($data["no_hp"]);

        $namafoto = $files["name"];
        $tmpfoto = $files["tmp_name"];
        $path = "aset/images/$namafoto";

        if(move_uploaded_file($tmpfoto,$path))
        {    $query = "UPDATE mahasiswa SET
                    nama='$nama', 
                    nim='$nim', 
                    prodi='$prodi', 
                    email='$email', 
                    no_hp='$no_hp', 
                    foto='$foto'
                WHERE id=$id";

        mysqli_query($koneksi, $query);
        }

        return mysqli_affected_rows($koneksi);
    }
?>