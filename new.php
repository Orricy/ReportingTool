<?php 
session_start();
//Main content and login
require 'config/config.php';
require('model/functions.fn.php');

if(isset($_SESSION['document'])){
    $doc = selectDocumentById($db, $_SESSION['document']);
    if(empty($doc)){
        session_destroy();
        header('Location: index.php');
    }
    else
        header('Location: upload.php');
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