<?php

const PATH = "http://localhost/notebookproject/";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername="localhost";
$username="root";
$password="1234";
$db_name="phpproject2";

$connect = mysqli_connect($servername, $username, $password, $db_name);
if (!$connect) {
    die ("Connection Error!".mysqli_connect_error());
}
