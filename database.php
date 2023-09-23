<?php

$path = "http://localhost/newphpproject/notebook2project/";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$servername="localhost";
$username="root";
$password="";
$db_name="phpproject2";

$connect=mysqli_connect($servername, $username, $password, $db_name);
if (!$connect) {
    die ("Connection Error!".mysqli_connect_error());
}
