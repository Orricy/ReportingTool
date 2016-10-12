<?php 
session_start();
//Main content and login
require 'config/config.php';
require('model/functions.fn.php');

if(isset($_GET['document'])){
    $_SESSION['document'] = intval($_GET['document']);
    header('Location: mydocument.php');
}
else
    header('Location: index.php');