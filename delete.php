<?php 
include 'database.php';

$connect=mysqli_connect($servername,$username,$password,$db_name);
if (!$connect) {
    die ("Connection Error!".mysqli_connect_error());
}
$id=$_GET['id'];

mysqli_query($connect,"delete from `addnote` where id='$id' ");
header('location:noteindex.php');
?>