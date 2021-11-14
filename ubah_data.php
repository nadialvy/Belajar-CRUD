<?php 

    if ( $_GET ){
        //koneksi
        include 'koneksi.php';

        //mengambil data
        $id = $_GET["id"];

        //query
        $query = "SELECT * FROM mahasiswa
                WHERE id = $id";
        $result = mysqli_query($conn, $query); //hasil kueri adalah object jadi harus di fetch

        $data = mysqli_fetch_assoc($result);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>

    <form action="proses_ubah_data.php" method="POST">
        <ul>
            <li>
                <input type='hidden' name='id' id='id' value="<?=$data["id"];?>">
            </li>
            <li>
                <label for="nrp">NRP</label>
                <input type="text" name="nrp" id="nrp" required value="<?=$data["nrp"];?>"> 
            </li>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required value="<?=$data["nama"]?>">
            </li>
            <li>
                <label for='email'>Email</label>
                <input type='email' name='email' id='email' required value="<?=$data["email"]?>">
            </li>
            <li>
                <label for='jurusan'>Jurusan</label>
                <input type='text' name='jurusan' id='jurusan' required value="<?=$data["jurusan"]?>">
            </li>
            <li>
                <label for='gambar'>Gambar</label>
                <input type='text' name='gambar' id='gambar' required value="<?=$data["gambar"]?>">
            </li>
            <li>
                <button name="submit" type="submit">Ubah</button>
            </li>
        </ul>
    </form>
</body>
</html>