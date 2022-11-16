<?php

include __DIR__. "/../model/database.php";

//echo "Provant connection";
$con = getConnection();
//echo "connection done";
$sql = 'SELECT * FROM catalog';

$result = pg_query($con, $sql);

$array = pg_fetch_all($result);

?>