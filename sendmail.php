<?php 
session_start();
//Main content and login
require 'config/config.php';
require('model/functions.fn.php');

$content = '<h2>Bonjour Damien Duvernois</h2>
                <p>Vous venez de recevoir une notification concernant le projet : '.$_SESSION['document'].'</p>
                <p>Vous pouvez dès à présent accéder au dossier du projet à cette </p><a href="http://localhost/ReportingTool/mydocument.php">adresse</a>
                <p>Vous pouvez :</p>
                <ul>
                    <li>Télécharger les ressources lié au projet</li>
                    <li>Imprimer un compte rendu de la page (clic droit -> imprimer)</li>
                </ul>
                <br>
                <p>équipe projet</p>';

/*$sended = sendMail('damien.duvernois@gmail.com', 'Damien', 'Duvernois', 'Notification : recettage - '.$_SESSION['document'], $content);
if($sended)
    header('Location: mydocument.php');
else
    header('Location: index.php');*/

?>