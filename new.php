<?php 
session_start();
//Main content and login
require 'config/config.php';
require('model/functions.fn.php');

if(isset($_SESSION['document'])){
    //session_destroy();
    //header('Location: new.php');
}
else{
    $documentKey = uniqid(true);
    createDocument($db, $documentKey);
    $docId = selectDocument($db, $documentKey);
    if($docId){
        $_SESSION['document'] = intval($docId[0]['id']);
    }
}
    


//$_SESSION['document'] = 0;

require 'templates/_header.php';
require 'templates/new.php';
require 'templates/_footer.php'; 