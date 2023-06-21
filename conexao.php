<?php 
session_start();
$base = 'http://localhost:8765/';

$db_name = 'shoppobre';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);
?>
