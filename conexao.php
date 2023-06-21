<?php 
session_start();
$base = 'http://localhost:8765/';

$db_name = 'heroku_db9506974be2de2';
$db_host = 'us-cdbr-east-06.cleardb.net';
$db_user = 'bab35029f77dfd';
$db_pass = 'a6448ac5';

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);
?>
