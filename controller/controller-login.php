<?php

include __DIR__. "/../model/comprobation.php";
include __DIR__. "/../model/database.php";


$conn = getConnection();
if (comprobation($conn) == true){
    include __DIR__."/../index.php";
}else{
    include __DIR__ . "/../index.php?action=entrada";
}

?>