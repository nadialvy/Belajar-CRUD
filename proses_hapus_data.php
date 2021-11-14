<?php 
    
    if( $_GET["id"] ) {
        include 'koneksi.php'; //koneksi;

        $id = $_GET["id"]; //mengambil data

        //kueri
        $query = "DELETE FROM mahasiswa 
                  WHERE id = $id";
        $hapus_data = mysqli_query($conn, $query);

        //cek dan notifikasi
        if( $hapus_data ){
            echo "
                <script>
                    alert ('Berhasil menghapus data')
                    document.location.href = 'index.php';
                </script>
            ";
        }
        else {
            echo "
                <script>
                    alert ('Gagal menghapus data')
                    document.location.href = 'index.php';
                </script>
            ";
        }
    }   

?>