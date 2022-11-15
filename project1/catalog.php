<?php include "header.php" ?>

<?php
    //Array for practicing
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


?>



<a href="index.php">HOME</a>

<h1>Catálogo</h1>

<?php 

    echo "Provant connection";
    $con = getConnection();
    echo "connection done";
    $sql = 'SELECT * FROM catalog';
    
    $result = pg_query($con, $sql);

    $array = pg_fetch_all($result);
    
    foreach($example as $values) {
        echo $values['name'] . "\n";
    }



?>

<!-- <?php foreach($example as $values): ?>
    <ul>
        <il> 
            <?php echo $values['name']; ?> <br>
            <?php echo $values['desc']; ?> <br>
            <a href="catalog_type0.php" onclick="location.href=this.href+$values['type']">
             <?php echo $values['img']; ?> <br>
            </a>

        </il>
    </ul>
<?php endforeach ?> -->
<h1>Bye</h1>

<?php include "footer.php" ?>

