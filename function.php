<?php 

    //inisialisasi koneksi versi mysqli
    $conn = mysqli_connect("localhost","root","","food_and_health");

    //baca dan masukkan query
    function queryResep($x){

    global $conn;  
    $result = mysqli_query($conn, $x);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
    return $rows;
    }

    //cari keyword
    function cari($x){
        $query = "SELECT * FROM resep WHERE 
                    judul LIKE '%$x%' OR
                    deskripsi LIKE '%$x%' OR
                    tag1 LIKE '%$x%' OR
                    tag2 LIKE '%$x%' OR
                    tag3 LIKE '%$x%' OR
                    tag4 LIKE '%$x%'
                ";
        return queryResep($query);
    }


   

?>