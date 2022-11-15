<?php include "header.php" ?>

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



<a href="index.php">HOME</a>

<h1>Catálogo</h1>

<?php 

    //echo "Provant connection";
    $con = getConnection();
    //echo "connection done";
    $sql = 'SELECT * FROM catalog';
    
    $result = pg_query($con, $sql);

    $array = pg_fetch_all($result);
?>
<div class="catalog">
    <?php foreach ($array as $items): ?>
        <ul>
            <li>
                <?php echo "<a href=\"catalog_type.php?type=$items[type]\">"; ?> <img src="img/<?php echo $items['image'] ?>" alt="Imagen tipo <?php echo $items['name'] ?>" id="typeImg"> <?php echo '</a>' ?>
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
<?php include "footer.php" ?>

