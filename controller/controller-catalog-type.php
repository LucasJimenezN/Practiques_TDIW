<?php
include __DIR__. "/../model/database.php";


//echo "Provant connection";
$con = getConnection();
//echo "connection done";
//echo $t;
$sql = "SELECT * FROM items WHERE type=$1";
$params = [$_GET['itemID']];
//echo "hola";
$result = pg_query_params($con, $sql, $params);

$array = pg_fetch_all($result);

include __DIR__. "/../view/catalog_type.php";

?>