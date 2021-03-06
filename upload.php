<?php
session_start();
require('config/config.php');
require('model/functions.fn.php');

if(!isset($_SESSION['document']))
    header('Location: index.php');

//Script d'upload de fichier en php
if(isset($_FILES['avatar'])&&$_FILES['avatar']['error']==0){
    if($_FILES['avatar']['size']<=10000000){
        $ext = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'),1));
        $tailleimage = getimagesize($_FILES['avatar']['tmp_name']);
        $path = 'files/'.uniqid(true).".".$ext;
        move_uploaded_file($_FILES['avatar']['tmp_name'],$path);
        $image = substr($path, 6);
        $upload = uploadDocument($db, $_FILES['avatar']['name'], $image, $_SESSION['document']);
        if($upload == true){
            //$selectedTweet = selectTweet($db, $id);
            //$displayTweet = $selectedTweet[0]['message'];
            header('Location: mydocument.php');
        }
        else{
            $error = 'L\'article n\'a pas été envoyé';
        }
    }
    else
        $error = "Trop lourd";
}

include 'templates/_header.php';
include 'templates/upload_form.php';
include 'templates/_footer.php';
 ?>