<?php 
session_start();
//Main content and login
require 'config/config.php';
require('model/functions.fn.php');

$allDocuments = selectAllDocument($db);

require 'templates/_header.php';
require 'templates/main.php';
require 'templates/_footer.php'; 