<?php
    include "header.php";
?>

<h1>Bienvenidos a PokeShop</h1>

<p>Porfavor seleccione una opcion en la barra para continuar.  </p>

<<<<<<< HEAD
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
=======
<p>Bueno dia gente</p>
>>>>>>> fb6d015226e48140c89079f2e1d5b8c5344690f4





<?php 
    include "footer.php";
?>