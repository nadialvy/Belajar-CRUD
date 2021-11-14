<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="proses_tambah_data.php" method="POST">
        <ul>
            <li>
                <label for="nrp">NRP </label>
                <input type="text" name="nrp" id="nrp" required> 
            </li>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for='email'>Email</label>
                <input type='email' name='email' id='email' required>
            </li>
            <li>
                <label for='jurusan'>Jurusan</label>
                <input type='text' name='jurusan' id='jurusan' required>
            </li>
            <li>
                <label for='gambar'>Gambar</label>
                <input type='text' name='gambar' id='gambar' required>
            </li>
            <li>
                <button name="submit" type="submit">Kirim</button>
            </li>
        </ul>
    </form>
</body>
</html>