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
    $res= $user->insertnote($title,$note,$usid);
  
    if($res){
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
    require_once "view/noteEdit.php";
}

// ----------------------------------------------------------------------------

function save(){}

// ----------------------------------------------------------------------------

function delete(){}

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

    case 'search':
        search();
        break;
    
    default:
        # code...
        echo "action not found";
        break;
}