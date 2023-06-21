<?php 
require 'conexao.php';
require 'models/Auth.php';

$name = filter_input(INPUT_POST, 'name');
$password = filter_input(INPUT_POST, 'password');
$email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL );
$idade = filter_input(INPUT_POST, 'idade');
$cpf = filter_input(INPUT_POST, 'cpf');
$endereco = filter_input(INPUT_POST, 'endereco');
$numero = filter_input(INPUT_POST, 'numero');
$cidade = filter_input(INPUT_POST, 'cidade');
$estado = filter_input(INPUT_POST, 'estado');
$bairro = filter_input(INPUT_POST, 'bairro');
$cep = filter_input(INPUT_POST, 'cep');


if($email && $name && $password && $idade && $cpf && $endereco && $numero && $cidade && $estado && $bairro && $cep) {

    $auth = new Auth($pdo, $base);

        if($auth->emailExists($email) === false) {

            $auth->registerUser($name,$email,$password, $idade,$cpf,$endereco,$numero,$cidade,$estado,$bairro,$cep);
            header("location:".$base."index_login.php");


        }else {
            $_SESSION['flash'] = 'E-mail já cadastrado';
            header("location:".$base."signup.php");
            exit;
        }

}

$_SESSION['flash'] = 'Campos não enviados.';
header("locatiom:".$base."signup.php");
exit;