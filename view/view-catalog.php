
<?php
/*    //Array for practicing

    $example = [
        [
            "name" => "fire",
            "desc" => 20,
            "img" => "example.png",
            "type" => "grass"
        ],
        [
            "name" => "grass",
            "desc" => 25,
            "img" => "example.png",
            "type" => "water"
        ]
        ];

*/
?>

<a href="/index.php">HOME</a>

<h1>Catálogo</h1>


<div class="catalog">
    <?php foreach ($array as $items): ?>
        <ul>
            <li>
                <a href="../index.php?itemID=<?php echo $items[type] ?>&action=typepokemons"> <img src="../img/<?php echo $items['image'] ?>" alt="Imagen tipo <?php echo $items['name'] ?>" id="typeImg"> <?php echo '</a>' ?>
            </li>
            <li>
                <?php echo $items['name']; ?>
            </li>
            <li>
                <?php echo $items['description']; ?>
            </li>
        </ul>
    <?php endforeach; ?>
</div>
<?php include "view-footer.php" ?>

