<?php 

    if( $_POST ){
        include 'koneksi.php'; //koneksi
    
        // $_POST isinya array asosiatif, sehingga harus
        // mengambil data
        $nrp = $_POST["nrp"];
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $jurusan = $_POST["jurusan"];
        $gambar = $_POST["gambar"];

        //cek semua form harus terisi
        if ( empty($nrp) ){
            echo "
                <script>
                    alert('NRP harus terisi')
                    document.location.href = 'tambah_data.php';
                </script>
            ";
        }
        elseif( empty($nama) ){
            echo "
                <script>
                    alert('nama harus terisi')
                    document.location.href = 'tambah_data.php';
                </script>
            ";
        }
        elseif( empty($email) ){
            echo "
                <script>
                    alert('email harus terisi')
                    document.location.href = 'tambah_data.php';
                </script>
            ";
        }
        elseif( empty($jurusan) ){
            echo "
                <script>
                    alert('jurusan harus terisi')
                    document.location.href = 'tambah_data.php';
                </script>
            ";
        }
        elseif( empty($gambar) ){
            echo "
                <script>
                    alert('gambar harus terisi')
                    document.location.href = 'tambah_data.php';
                </script>
            ";
        }
        else {
            
            //query
            $query = "INSERT INTO mahasiswa
                      VALUES('', '$nama', '$nrp', '$email', '$jurusan', '$gambar')";
            $insert_data = mysqli_query($conn, $query);
    
            //pengecekan
            if( $insert_data ){
                echo "
                <script>
                    alert ('Berhasil memasukkan data')
                    document.location.href = 'index.php';
                </script>";
            } else{
                echo "
                <script>
                    alert ('Gagal memasukkan data')
                    document.location.href = 'tambah_data.php';
                </script>";
            }
        }


    }

?>