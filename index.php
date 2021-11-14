<?php 
    require 'function_show_data.php';
    $mahasiswa = query("SELECT * FROM mahasiswa");    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>
    <a href="tambah_data.php">Tambah Data</a>

    <table border="2" cellpadding="25" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach( $mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah_data.php?id=<?= $mhs["id"]; ?>">Ubah</a> |
                    <a href="proses_hapus_data.php?id=<?= $mhs["id"]; ?>" onclick="return confirm ('Apakah anda ingin menghapus data ini?')">Hapus</a>
                </td>
                <td><img src="asset_index/<?= $mhs["gambar"]; ?> " alt=""></td>
                <td><?= $mhs["nrp"] ?></td>
                <td><?= $mhs["nama"]; ?></td>
                <td><?= $mhs["email"]; ?></td>
                <td><?= $mhs["jurusan"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>