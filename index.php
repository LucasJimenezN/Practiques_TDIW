<?php
    include "header.php";
?>

<h1>Bienvenidos a PokeShop</h1>

<p>Porfavor seleccione una opcion en la barra para continuar.  </p>

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
        require __DIR__.'principal.php';
        break;
}
?>





<?php 
    include "footer.php";
?>