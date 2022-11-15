<?php 
    //Starting connection:
    function getConnection() {
        echo "Bucle?";
        $tornar = pg_connect("host=localhost port=5432 dbname=tdiw-e4 user=tdiw-e4 password=rhDbZR4p");
        var_dump($tornar);
        return $tornar;
    }

    
?>