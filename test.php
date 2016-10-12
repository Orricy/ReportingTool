<?php
$info_client = $_POST['info_client'];
$info_personne = $_POST['info_personne'];
$objectif = $_POST['objectif'];
$cible = $_POST['cible'];
$solution = $_POST['solution'];
$required = array('info_client', 'info_personne', 'objectif', 'cible', 'solution');
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
        $bdd = new PDO('mysql:host=localhost;dbname=iim_reporting', 'root', 'root');
        $req = $bdd->prepare('INSERT INTO informations SET info_client = :info_client,
                                                       info_personne = :info_personne,
                                                       objectif = :objectif,
                                                       cible = :cible,
                                                       solution = :solution');
        $req->execute(array(
            ':info_client' => $info_client, ':info_personne' => $info_personne, ':objectif' => $objectif, ':cible' => $cible, ':solution' => $solution));
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        header('Location: form2.php');
        return true;
    }
}
catch (PDOException $e){
    print 'Erreur PDO : '.$e->getMessage().'<br/>';
    die();
}





