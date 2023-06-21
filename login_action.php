<?php

require 'conexao.php';
require 'models/Auth.php';

$email = filter_input(INPUT_POST, 'email_login', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password_login');

if($email && $password) {
    $auth = new Auth($pdo, $base);

    if($auth->validateLogin($email, $password)) {
        header("location:".$base."index_login.php");
        exit;
    }
}

$_SESSION['flash'] = 'E-mail e/ou Senha esta Incorreto.';
header("location:".$base."alogin.php");
exit;