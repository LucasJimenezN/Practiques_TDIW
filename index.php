<?php
    include "header.php";
?>

<?php
$accio = $_GET['action'];
switch ($accio) {
    case 'categories':
        require __DIR__.'/resources/resource_category_list.php';
        break;
    case 'productes':
        require __DIR__.'resource_llistar_productes_categoria.php';
        break;
    case 'producte':
        require __DIR__.'resource_detall_producte.php';
        break;
    case 'login':
        require __DIR__.'resource_login.php';
        break;
    case 'registre':
        require __DIR__.'resource_registre.php';
        break;
    default:
        require __DIR__.'view/principal.php';
        break;
}
?>






<?php 
    include "footer.php";
?>