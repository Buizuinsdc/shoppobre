<?php

class User {
    public $id;
    public $email;
    public $password;
    public $name;
    public $sobrenome;
    public $cpf;
    public $idade;
    public $cep;
    public $endereco;
    public $numero;
    public $cidade;
    public $bairro;
    public $estado;
    public $token;

}
interface UserDAO {
    public function findByToken($token);
    public function findByEmail($email);
    public function update(User $u);
    public function insert(User $u);
}