<?php

require_once "models/NoteModel.php";
require_once "models/UserModel.php";

function index(){
    require_once "view/noteIndex.php";
}

// ----------------------------------------------------------------------------

function search(){
    $notes = NoteModel::find(10);
    echo json_encode($notes);
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

$action = $_GET["action"];

switch ($action) {
    case 'index':
        index();
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