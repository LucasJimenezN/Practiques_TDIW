<?php include "model/comprobation.php";
//echo "hola";
$conn = getConnection();
if (comprobation($conn) == true){
    header("Location:index.php");
}else{
    echo "Credenciales erróneas";
}

?>