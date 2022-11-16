<?php include "database.php";

function comprobation($conn){
$password = $_POST['psw'];

//$passwordHashed = password_hash($password, PASSWORD_DEFAULT);
//echo $_POST['uname'];
$sql = "SELECT * FROM users WHERE username=$1";
$params = [$_POST['uname']];
//echo "hola";
$result = pg_query_params($conn, $sql, $params);

$item = pg_fetch_all($result);
//echo $item[0]['password'];
//echo $password;
if(password_verify($password, $item[0]['password'])) {
    return true;
}else{
   return false;
}

}

?>
