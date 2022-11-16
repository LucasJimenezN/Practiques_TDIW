<div class="pok_item">
    <?php foreach ($array as $items): ?>
        <ul>
            <li>
                <img src="../img/<?php echo $items['image'] ?>" alt="Imagen del Pokemon <?php echo $items['name'] ?>">
            </li>
            <li>
                <h1> <?php echo $items['name'] ?> </h1>
            </li>
            <li>
                <p> <?php echo $items['description'] ?></p>
            </li>
        </ul>
    <?php endforeach; ?>
</div>




