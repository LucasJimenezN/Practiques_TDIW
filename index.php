<?php
    include __DIR__. "/view/view-header.php";
?>

<?php
$accio = $_GET['action'];
switch ($accio) {
    case 'comprar':
        require __DIR__.'/controller/controller-catalog.php';
        break;
    case 'nosotros':
        require __DIR__.'/controller/controller-about-us.php';
        break;
    case 'entrada': //entrada es login, pero al pasar action=login no lo pillaba.
        require __DIR__.'/view/view-login.php';
        break;
    case 'registrarse': //registre es signup
        require __DIR__.'/view/view-signup.php';
        break;
    case 'typepokemons':
        require __DIR__. "/controller/controller-catalog-type.php";
        break;
    case 'pokemon':
        require __DIR__. "/controller/controller-pokemon.php";
        break;
    default:
        require __DIR__ . '/view/view-principal.php';
        break;
}
?>


<?php 
    include "view-footer.php";
?>