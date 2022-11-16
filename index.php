<?php
    include "header.php";
?>

<?php
$accio = $_GET['action'];
switch ($accio) {
    case 'categories':
        require DIR.'/resources/resource_category_list.php';
        break;
    case 'productes':
        require DIR.'resource_llistar_productes_categoria.php';
        break;
    case 'producte':
        require DIR.'resource_detall_producte.php';
        break;
    case 'login':
        require DIR.'resource_login.php';
        break;
    case 'registre':
        require DIR.'resource_registre.php';
        break;
    default:
        require DIR.'view/principal.php';
        break;
}
?>


<?php 
    include "footer.php";
?>