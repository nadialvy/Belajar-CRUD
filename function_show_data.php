<?php 

    //query show data
    function query($query){ //$query = SELECT * FROM mahasiswa
        include 'koneksi.php';
        
        $data = mysqli_query($conn, $query);
        
        $wadah = [];
        while( $value = mysqli_fetch_assoc($data) ) {
            $wadah[] = $value; //wadah diisi value
        }

        return $wadah;
        
    }

    
?>