<?php

require_once "models/NoteModel.php";
require_once "models/UserModel.php";

require "database.php";
/**
 *
 *
 * @return void
 */
function checkNoteTable(){
    global $connect;
    $tbl2="CREATE TABLE IF NOT EXISTS `addnote` (
        `id` int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `datee` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP(),
        `title` varchar(255) NOT NULL,
        `note` varchar(255) NOT NULL,
        `user_id` int(255) REFERENCES signupnote(id)
       )";
      if(!mysqli_query($connect,$tbl2)){
        echo "table not created";
      }
      mysqli_close($connect);
}




function index(){
    require_once "view/noteIndex.php";
}


function addnote(){
    require_once "view/noteadd.php";
}

function insert(){

    $usid=$_SESSION["id"];
    $title=$_POST['title'];
    $note=$_POST['note'];

    $user = new NoteModel();
    $user->insertnote($title, $note, $usid);
  
    if($user){
        echo json_encode([
            'statusCode'=>200
        ]);
        return;
    }

    echo json_encode([
        'statusCode'=>201
    ]);
   
}

// ----------------------------------------------------------------------------

function search(){
    // $notes = NoteModel::find(10);
    // echo json_encode($notes);
}

// ----------------------------------------------------------------------------

function edit(){

        
    global $servername;
    global $username;
    global $password;
    global $db_name;

    $connect = mysqli_connect($servername, $username, $password, $db_name);
    if (!$connect) {
        die ("Connection Error!".mysqli_connect_error());
    }

    
$id=$_POST['id'];
$query=mysqli_query($connect,"select * from `addnote` where id='$id' ");
$row=mysqli_fetch_array($query);
if($row){
    echo json_encode([
        'statusCode'=>200
    ]);
    return;
}

echo json_encode([
    'statusCode'=>201
]);
}

// ----------------------------------------------------------------------------

function update(){
    $id=$_POST['id'];
    date_default_timezone_set('Asia/Tehran');
    $date = date('Y-m-d H:i:s'); 
    $title=$_POST['title'];
    $note=$_POST['note'];

    $user = new NoteModel();
    $user->update($id, $title, $note, $date);
  
    if($user){
        echo json_encode([
            'statusCode'=>200
        ]);
        return;
    }

    echo json_encode([
        'statusCode'=>201
    ]);
}

// ----------------------------------------------------------------------------

function save(){}

// ----------------------------------------------------------------------------

function delete(){
    $id=$_POST['id'];
    
    $user = new NoteModel();
    $user->delete($id);
  
    if($user){
        echo json_encode([
            'statusCode'=>200
        ]);
        return;
    }

    echo json_encode([
        'statusCode'=>201
    ]);
}

// ----------------------------------------------------------------------------

checkNoteTable();
session_start();
$usid=$_SESSION["id"];

$action = $_GET["action"];

switch ($action) {
    case 'index':
        index();
        break;


    case 'addnote':
        addnote();
        break;
    case 'insert':
        insert();
        break;
    
    case 'edit':
        edit();
        break;

    case 'update':
        update();
        break;

    case 'search':
        search();
        break;
    
    default:
        # code...
        echo "action not found";
        break;
}