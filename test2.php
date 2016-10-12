<?php
$project_name = $_POST['project_name'];
$required = array('project_name');
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
        $req = $bdd->prepare('INSERT INTO intro SET project_name = :project_name');
        $req->execute(array(
            ':project_name' => $project_name));
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        header('Location: form2.php');
        return true;
    }
}
catch (PDOException $e){
    print 'Erreur PDO : '.$e->getMessage().'<br/>';
    die();
}





