


<?php


$db_host="localhost";
$db_username="root";
$db_password="";
$db_name="contact";

$db_connect=mysqli_connect($db_host, $db_username, $db_password, $db_name) or die();


// to check the connection//
if(mysqli_connect_error())
{
       echo"fail to connect to MYSQL:".mysqli_connect_error();
}
    echo "Connection Successful";

?>