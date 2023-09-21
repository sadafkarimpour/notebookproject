<?php 
// branch dev test commit
include 'database.php';

$connect=mysqli_connect($servername,$username,$password,$db_name);
if (!$connect) {
    die ("Connection Error
    !".mysqli_connect_error());
}
if (isset($_POST['change'])){
    $id=$_GET['id'];
    $data=$_POST['data'];
    date_default_timezone_set('Asia/Tehran');
    $date = date('Y-m-d H:i:s'); 
//$datee=$data['datee'];
$title=$data['title'];
$note=$data['note'];

mysqli_query($connect,"UPDATE `addnote` SET datee='$date' , title='$title' , note='$note'  where id='$id' ");
header('location:noteindex.php');

}
?>