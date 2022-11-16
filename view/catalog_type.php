

<h1>Productos</h1>

<!--
foreach ($array as $item){
    echo $item['name'];
}
-->
<div class="pokemon">
    <?php foreach ($array as $items): ?>
    <ul>
        <li>
            <a href="../index.php?action=pokemon&pok=<?php echo $items['id'] ?>"> <img src="img/<?php echo $items['image'] ?>" alt="Imagen del Pokemon <?php echo $items['name'] ?>"></a>
         
        </li>
        <li>
            <?php echo $items['name'] ?>
        </li>
    </ul>
    <?php endforeach; ?>
</div>

