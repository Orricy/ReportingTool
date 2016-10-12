<?php
session_start();
require 'config/config.php';

$fb = $_POST['fb'];
$lien_fb = $_POST['lien_fb'];
$mdp_fb = $_POST['mdp_fb'];
$drive = $_POST['drive'];
$lien_drive = $_POST['lien_drive'];
$mdp_drive = $_POST['mdp_drive'];
$git = $_POST['git'];
$lien_git = $_POST['lien_git'];
$mdp_git = $_POST['mdp_git'];
$autre_nom1 = $_POST['autre_nom1'];
$autre_lien1 = $_POST['autre_lien1'];
$autre_nom2 = $_POST['autre_nom2'];
$autre_lien2 = $_POST['autre_lien2'];
$autre_nom3 = $_POST['autre_nom3'];
$autre_lien3 = $_POST['autre_lien3'];
$required = array('fb', 'lien_fb', 'mdp_fb', 'drive', 'lien_drive', 'mdp_drive', 'git',
    'lien_git', 'mdp_git', 'autre_nom1', 'autre_lien1', 'autre_nom2', 'autre_lien2', 'autre_nom3', 'autre_lien3');
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
        $req = $db->prepare('INSERT INTO communication SET fb = :fb,
                                                            lien_fb = :lien_fb,
                                                            mdp_fb = :mdp_fb,
                                                            drive = :drive,
                                                            lien_drive = :lien_drive,
                                                            mdp_drive = :mdp_drive,
                                                            git = :git,
                                                            lien_git = :lien_git,
                                                            mdp_git = :mdp_git,
                                                            autre_nom1 = :autre_nom1,
                                                            autre_lien1 = :autre_lien1,
                                                            autre_nom2 = :autre_nom2,
                                                            autre_lien2 = :autre_lien2,
                                                            autre_nom3 = :autre_nom3,
                                                            autre_lien3 = :autre_lien3,
                                                            piece_of = :piece_of
                                                            ');
        $req->execute(array(
            ':fb' => $fb, ':lien_fb' => $lien_fb, ':mdp_fb' => $mdp_fb, ':drive' => $drive, ':lien_drive' => $lien_drive,
            ':mdp_drive' => $mdp_drive, ':git' => $git, ':lien_git' => $lien_git, ':mdp_git' => $mdp_git,
            ':autre_nom1' => $autre_nom1, 'autre_lien1' => $autre_lien1, ':autre_nom2' => $autre_nom2, 'autre_lien2' => $autre_lien2,
            ':autre_nom3' => $autre_nom3, 'autre_lien3' => $autre_lien3, 'piece_of' => $partOf));
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        header('Location: form4.php');
        return true;
    }
}
catch (PDOException $e){
    print 'Erreur PDO : '.$e->getMessage().'<br/>';
    die();
}





