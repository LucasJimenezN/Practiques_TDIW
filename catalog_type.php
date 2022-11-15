<?php include "header.php"; 

echo $_GET['type'];


?>

<h1>Productos</h1>

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

?>
<!--
foreach ($array as $item){
    echo $item['name'];
}
-->
<div class="pokemon">
    <?php foreach ($array as $items): ?>
    <ul>
        <li>
            <a href="pokemon.php?<?php echo $id=$items['id']; ?>"> <img src="img/<?php echo $items['image'] ?>" alt="Imagen del Pokemon <?php echo $items['name'] ?>"></a>
         <!--   <?php echo "<a href=\"catalog_type.php?type=$items[type]\">"; ?> <img src="img/<?php echo $items['image'] ?>"
                                                                                  alt="Imagen del Pokemon <?php echo $items['name'] ?>"> <?php echo '</a>' ?> -->
        </li>
        <li>
            <?php echo $items['name'] ?>
        </li>
    </ul>
    <?php endforeach; ?>
</div>

