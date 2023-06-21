<?php
require_once 'models/User.php';


class UserDaoMysql implements UserDAO {
    private $pdo;

    public function __construct(PDO $driver)
    {
        $this->pdo = $driver;
    }

    private function generateUser($array){
        $u = new User();
        $u->id = $array['id'] ?? 0;
        $u->name = $array['name'] ?? '';
        $u->cpf = $array['cpf'] ?? '';
        $u->email = $array['email'] ?? '';
        $u->password = $array['password'] ?? '';
        $u->idade = $array['idade'] ?? '';
        $u->cep = $array['cep'] ?? '';
        $u->endereco = $array['endereco'] ?? '';
        $u->numero = $array['numero'] ?? '';
        $u->cidade = $array['cidade'] ?? '';
        $u->bairro = $array['bairro'] ?? '';
        $u->estado = $array['estado'] ?? '';
        $u->token = $array['token'] ?? '';

        return $u;
    }


    public function findByEmail($email){
        if(!empty($email)) {
            $sql = $this->pdo->prepare("SELECT * FROM usuario WHERE email = :email");
            $sql->bindValue(':email', $email);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $data = $sql->fetch(PDO::FETCH_ASSOC);
                $user = $this->generateUser($data);
                return $user;
            }
        }

        return false;
    }




    public function findByToken($token){
        if(!empty($token)) {
            $sql = $this->pdo->prepare("SELECT * FROM usuario WHERE token = :token");
            $sql->bindValue(':token', $token);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $data = $sql->fetch(PDO::FETCH_ASSOC);
                $user = $this->generateUser($data);
                return $user;
            }
        }

        return false;
    }


    public function update(User $u) {
        $sql = $this->pdo->prepare("UPDATE usuario SET
        email = :email,
        name = :name,
        password = :password,
        cpf = :cpf,
        idade = :idade,
        cep = :cep,
        endereco = :endereco,
        numero = :numero,
        cidade = :cidade,
        bairro = :bairro,
        estado = :estado,
        token = :token 
        WHERE id = :id");

    $sql->bindValue(':email', $u->email);
    $sql->bindValue(':name', $u->name);
    $sql->bindValue(':password', $u->password);
    $sql->bindValue(':idade', $u->idade);
    $sql->bindValue(':cpf', $u->cpf);
    $sql->bindValue(':cep', $u->cep);
    $sql->bindValue(':endereco', $u->endereco);
    $sql->bindValue(':id', $u->id);
    $sql->bindValue(':numero', $u->numero);
    $sql->bindValue(':cidade', $u->cidade);
    $sql->bindValue(':bairro', $u->bairro);
    $sql->bindValue(':estado', $u->estado);
    $sql->bindValue(':token', $u->token);
    $sql->execute();
    
    return true;
    }

    public function insert(User $u) {
        $sql = $this->pdo->prepare("INSERT INTO usuario (
            email, password, name, idade, endereco, numero, cidade, estado, bairro, cep, cpf, token
        )  VALUES (
            :email, :password, :name, :idade,:endereco, :numero, :cidade, :estado, :bairro, :cep, :cpf, :token
        )");

        $sql->bindValue(':email', $u->email);
        $sql->bindValue(':name', $u->name);
        $sql->bindValue(':idade', $u->idade);
        $sql->bindValue(':endereco', $u->endereco);
        $sql->bindValue(':numero', $u->numero);
        $sql->bindValue(':bairro', $u->bairro);
        $sql->bindValue(':estado', $u->estado);
        $sql->bindValue(':cidade', $u->cidade);
        $sql->bindValue(':cep', $u->cep);
        $sql->bindValue(':cpf', $u->cpf);
        $sql->bindValue(':token', $u->token);
        $sql->bindValue(':password', $u->password);
        $sql->execute();

        return true;
    }

}