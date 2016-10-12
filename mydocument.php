<?php 
session_start();
//Main content and login
require 'config/config.php';
require('model/functions.fn.php');

$documentUploads = selectUpload($db, $_SESSION['document']);


require 'templates/_header.php';
require 'templates/_upload_document.php';
require 'templates/_footer.php'; 