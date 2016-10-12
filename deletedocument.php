<?php 
session_start();
//Main content and login
require 'config/config.php';
require('model/functions.fn.php');

if(isset($_SESSION['document']) && isset($_GET['id'])){
    $doc = deleteDocumentById($db, $_GET['id']);
    if($doc){
        header('Location: mydocument.php');
    }
}