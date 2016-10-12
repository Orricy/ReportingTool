<?php
session_start();
//Main content and login
require 'config/config.php';

$info_client = $_POST['info_client'];
$info_personne = $_POST['info_personne'];
$objectif = $_POST['objectif'];
$cible = $_POST['cible'];
$solution = $_POST['solution'];
$required = array('info_client', 'info_personne', 'objectif', 'cible', 'solution');
$partOf = $_SESSION['document'];
$error = false;


try
{
// Loop over field names, make sure each one exists and is not empty
    foreach($required as $field) {
        if (empty($_POST[$field])) {
            $error = true;
        }
    }

    if ($error) {
        echo "All fields are required.";
    } else {
        $req = $db->prepare('INSERT INTO informations SET info_client = :info_client,
                                                       info_personne = :info_personne,
                                                       objectif = :objectif,
                                                       cible = :cible,
                                                       solution = :solution,
                                                       piece_of = :piece_of');
        $req->execute(array(':info_client' => $info_client, ':info_personne' => $info_personne, ':objectif' => $objectif, ':cible' => $cible, ':solution' => $solution, ':piece_of' => $partOf));
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        header('Location: form2.php');
    }
}
catch (PDOException $e){
    print 'Erreur PDO : '.$e->getMessage().'<br/>';
    die();
}