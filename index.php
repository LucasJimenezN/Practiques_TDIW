<?php
    include __DIR__. "/view/view-header.php";
?>
<h1>hola</h1>

<?php
$accio = $_GET['action'];
switch ($accio) {
    case 'comprar':
        require __DIR__.'/view/view-catalog.php';
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
    case 'signin':
        require __DIR__.'resource_registre.php';
        break;
    default:
        require __DIR__ . '/view/view-principal.php';
        break;
}
?>


<?php 
    include "view-footer.php";
?>