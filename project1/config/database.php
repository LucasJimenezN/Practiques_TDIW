<?php 
    //Starting connection:
    function getConnection() {
        echo "Bucle?";
        $tornar = pg_connect("host=127.0.0.1 dbname=tdiw-e4 user=tdiw-e4 password=rhDbZR4p");
        var_dump($tornar);
        return $tornar;
    }

    
?>