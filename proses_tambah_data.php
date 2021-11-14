<?php 

    if( $_POST ){
        include 'koneksi.php'; //koneksi
    
        // $_POST isinya array asosiatif, sehingga harus
        // mengambil data
        $nrp = htmlspecialchars( $_POST["nrp"] ) ;
        $nama = htmlspecialchars( $_POST["nama"] ) ;
        $email = htmlspecialchars( $_POST["email"] ) ;
        $jurusan = htmlspecialchars( $_POST["jurusan"] );

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
        else {

            //upload image
            $target_dir = "asset_index/";
            $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                echo "Hanya file jpg, png dan jpeg yang bisa anda upload";
                $uploadOk = 0;
            }

            if ($uploadOk == 0) {
                echo "Gagal mengupload file";
              
            } else {
                if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                    $gambar = basename($_FILES["gambar"]["name"]);

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
                } else {
                  echo "Maaf error";
                }
            }
            
        }


    }

?>