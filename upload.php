<?php
session_start();
require('config/config.php');
require('model/functions.fn.php');

//Script d'upload de fichier en php
if($_FILES['avatar']['size']<=10000000){
    $ext = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'),1));
    $tailleimage = getimagesize($_FILES['avatar']['tmp_name']);
    $path = 'files/'.uniqid(true).".".$ext;
    move_uploaded_file($_FILES['avatar']['tmp_name'],$path);
    $image = substr($path, 6);
    $update = updateArticle($db, $id, $_SESSION['id'], $_POST['content'], $_POST['titre'], $image);
    if($update == true){
        //$selectedTweet = selectTweet($db, $id);
        //$displayTweet = $selectedTweet[0]['message'];
        header('Location: dashboard.php');
    }
    else{
        $error = 'L\'article n\'a pas été envoyé';
    }
}
else
    $error = "Trop lourd"

include 'templates/_header.php';

include 'templates/_footer.php';
 ?>