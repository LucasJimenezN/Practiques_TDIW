<?php include "database.php";

function register($conn)
{
    //echo $_POST['uname'];

    $pass = password_hash($_POST['psw'], PASSWORD_DEFAULT);
    //$values[] = [$_POST['uname'], $pass, $_POST['uemail'], $_POST['postal'], $_POST['town'], $_POST['adress']];
    //$conn = getConnection();
    //echo $pass;
    //echo $_POST['uemail'];
    //echo $_POST['postalCode'];
    //echo $_POST['town'];
    //echo $_POST['adress'];


    $sql = "INSERT INTO users VALUES ($1, $2, $3, $4, $5, $6, DEFAULT)";
    $params = [$_POST['uname'], $pass, $_POST['uemail'], $_POST['postalCode'], $_POST['town'], $_POST['adress']];

    pg_query_params($conn, $sql, $params);

    //pg_insert($conn, 'users', $values, PGSQL_DML_ESCAPE);
}
?>
