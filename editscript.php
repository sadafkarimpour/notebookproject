<?php 
include 'database.php';

$connect=mysqli_connect($servername,$username,$password,$db_name);
if (!$connect) {
    die ("Connection Error!".mysqli_connect_error());
}
$id=$_GET['id'];
$query=mysqli_query($connect,"select * from `addnote` where id='$id' ");
$row=mysqli_fetch_array($query);

?>