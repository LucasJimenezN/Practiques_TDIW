<?php include "header.php"; 

echo $_GET['type'];


?>

<h1>Productes</h1>

<?php

//echo "Provant connection";
$con = getConnection();
//echo "connection done";
$t = $_GET['type'];
//echo $t;
$sql = "SELECT * FROM items WHERE type=$t";
//echo "hola";
$result = pg_query($con, $sql);

$array = pg_fetch_all($result);
foreach ($array as $item){
    echo $item['name'];
}
?>

