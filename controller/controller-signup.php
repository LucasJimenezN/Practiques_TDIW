<?php

include __DIR__. "/../model/register.php";
include __DIR__. "/../model/database.php";

$conn = getConnection();
register($conn);

include __DIR__. "/../index.php";

?>