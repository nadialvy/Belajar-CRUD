<?php 

    if( $_POST ){
        include 'koneksi.php'; //koneksi
    
        // $_POST isinya array asosiatif, sehingga harus
        // mengambil data
        $id = $_POST["id"] ;
        $nrp = htmlspecialchars( $_POST["nrp"] ) ;
        $nama = htmlspecialchars( $_POST["nama"] ) ;
        $email = htmlspecialchars( $_POST["email"] ) ;
        $jurusan = htmlspecialchars( $_POST["jurusan"] );
        $gambar = htmlspecialchars( $_POST["gambar"] );

        //cek semua form harus terisi
        if ( empty($nrp) ){
            echo "
                <script>
                    alert('NRP harus terisi')
                    document.location.href = 'ubah_data.php';
                </script>
            ";
        }
        elseif( empty($nama) ){
            echo "
                <script>
                    alert('nama harus terisi')
                    document.location.href = 'ubah_data.php';
                </script>
            ";
        }
        elseif( empty($email) ){
            echo "
                <script>
                    alert('email harus terisi')
                    document.location.href = 'ubah_data.php';
                </script>
            ";
        }
        elseif( empty($jurusan) ){
            echo "
                <script>
                    alert('jurusan harus terisi')
                    document.location.href = 'ubah_data.php';
                </script>
            ";
        }
        elseif( empty($gambar) ){
            echo "
                <script>
                    alert('gambar harus terisi')
                    document.location.href = 'ubah_data.php';
                </script>
            ";
        }
        else {
            
            //query
            $query = "UPDATE mahasiswa SET
                      nrp = '$nrp',
                      nama = '$nama',
                      email = '$email',
                      jurusan = '$jurusan',
                      gambar = '$gambar'
                      WHERE id = '$id'
                      ";
            $update_data = mysqli_query($conn, $query);
    
            //pengecekan
            if( $update_data ){
                echo "
                <script>
                    alert ('Berhasil mengubah data')
                    document.location.href = 'index.php';
                </script>";
            } else{
                echo "
                <script>
                    alert ('Gagal mengubah data')
                    document.location.href = 'ubah_data.php';
                </script>";
                
            }
        }


    }

?>