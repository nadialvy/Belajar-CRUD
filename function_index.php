<?php 
    // koneksi database
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    //query
    function query($query){
        global $conn;
        $data = mysqli_query($conn, $query);
        
        $wadah = [];
        while( $value = mysqli_fetch_assoc($data) ) {
            $wadah[] = $value; //wadah diisi value
        }

        return $wadah;
        
    }

?>