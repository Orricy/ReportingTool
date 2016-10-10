<?php
session_start();
require('config/config.php');
require('model/functions.fn.php');

//Script d'upload de fichier en php
if(isset($_FILES['avatar'])&&$_FILES['avatar']['error']==0){
    if($_FILES['avatar']['size']<=10000000){
        var_dump($_FILES);
        $ext = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'),1));
        $tailleimage = getimagesize($_FILES['avatar']['tmp_name']);
        $path = 'files/'.uniqid(true).".".$ext;
        move_uploaded_file($_FILES['avatar']['tmp_name'],$path);
        $image = substr($path, 6);
        $upload = uploadDocument($db, 0, $image);
        if($upload == true){
            //$selectedTweet = selectTweet($db, $id);
            //$displayTweet = $selectedTweet[0]['message'];
            header('Location: index.php');
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