<?php
session_start();
require('model/functions.fn.php');
$pitch = $_POST['pitch'];
$brief = $_POST['brief'];
$client_surname = $_POST['client_surname'];
$client_lastname = $_POST['client_lastname'];
$client_phone = $_POST['client_phone'];
$client_mail = $_POST['client_mail'];
$client_city = $_POST['client_city'];
$client_postal = $_POST['client_postal'];
$client_adress = $_POST['client_adress'];
$deci_surname = $_POST['deci_surname'];
$deci_lastname = $_POST['deci_lastname'];
$deci_phone = $_POST['deci_phone'];
$deci_mail = $_POST['deci_mail'];
$deci_city = $_POST['deci_city'];
$deci_postal = $_POST['deci_postal'];
$deci_adress = $_POST['deci_adress'];
$debproj = $_POST['debprof'];
$finproj = $_POST['finprof'];
$required = array('pitch', 'brief', 'client_surname', 'client_lastname', 'client_phone', 'client_mail', 'client_city', 'client_postal', 'client_adress', 'deci_surname', 'deci_lastname', 'deci_phone', 'deci_mail', 'deci_city', 'deci_postal', 'deci_adress', 'debproj', 'finproj');
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
        $req = $db->prepare('INSERT INTO form2 SET pitch = :pitch,
                                                    brief = :brief,
                                                    client_surname = :client_surname,
                                                    client_lastname = :client_lastname,
                                                    client_phone = :client_phone,
                                                    client_mail = :client_mail,
                                                    client_city = :client_city,
                                                    client_postal = :client_postal,
                                                    client_adress = :client_adress,
                                                    deci_surname = :deci_surname,
                                                    deci_lastname = :deci_lastname,
                                                    deci_phone = :deci_phone,
                                                    deci_mail = :deci_mail,
                                                    deci_city = :deci_city,
                                                    deci_postal = :deci_postal,
                                                    deci_adress = :deci_adress,
                                                    debproj = :debproj,
                                                    finproj = :finproj
                                                    piece_of = :piece_of');
        $req->execute(array(
            ':pitch' => $pitch, ':brief' => $brief, ':client_surname' => $client_surname, ':client_lastname' => $client_lastname, ':client_phone' => $client_phone, ':client_mail' => $client_mail, ':client_city' => $client_city, ':client_postal' => $client_postal, ':client_adress' => $client_adress, ':deci_surname' => $deci_surname, ':deci_lastname' => $deci_lastname, ':deci_phone' => $deci_phone, ':deci_mail' => $deci_mail, ':deci_city' => $deci_city, ':deci_postal' => $deci_postal, ':deci_adress' => $deci_adress, ':debproj' => $debproj, ':finproj' => $finproj, ':piece_of' => $partOf));
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        header('Location: form3.php');
    }
}
catch (PDOException $e){
    print 'Erreur PDO : '.$e->getMessage().'<br/>';
    die();
}


