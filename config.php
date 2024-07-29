<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_DBNAME','db_crud');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DBNAME);
if($con->mysqli_connect_error())
{
    echo "Faild connection to Mysqli:" . $con->mysqli_connect_error();
}
else{
    echo "connection success";
}

?>
