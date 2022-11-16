<?php include __DIR__. "/view-header.php";

echo $_GET['type'];


?>

<h1>Productos</h1>

<?php include "controller/controller-catalog-type.php" ?>
<!--
foreach ($array as $item){
    echo $item['name'];
}
-->
<div class="pokemon">
    <?php foreach ($array as $items): ?>
    <ul>
        <li>
            <a href="../pokemon.php?<?php echo $id=$items['id']; ?>"> <img src="img/<?php echo $items['image'] ?>" alt="Imagen del Pokemon <?php echo $items['name'] ?>"></a>
         
        </li>
        <li>
            <?php echo $items['name'] ?>
        </li>
    </ul>
    <?php endforeach; ?>
</div>

