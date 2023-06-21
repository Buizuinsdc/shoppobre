<?php 
require 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shoppobre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link href="<?=$base?>assets/css/layout.css" rel="stylesheet" type="text/css">
</head>
<body id="body_cad">
    <div id="area_cad_index" class="container position-absolute top-50 start-50 translate-middle" style="padding:50px; border-radius:25px 25px;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="assets/image/shopee-logo.png" width="200px" style="position: relative; left:500px; ">
                    <form class="row g-3" method="POST" id="cad_form" action="signup_action.php">
                        <div class="col-md-4">
                            <label for="validationDefault01" class="form-label">Nome:</label>
                            <input type="text" class="form-control" name="name" id="validationDefault01" required>
                        </div>

                        <div class="col-md-4">
                            <label for="validationDefault03" class="form-label">E-mail:</label>
                            <input type="email" class="form-control" name="email" id="validationDefault03" required>
                        </div>
                        <div class="col-md-4">
                            <label for="validationDefault03" class="form-label">Idade:</label>
                            <input type="number" class="form-control" name="idade" id="validationDefault03" required>
                        </div>
                        <div class="col-md-4">
                            <label for="validationDefaultUsername" class="form-label">CPF:</label>
                            <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                    </svg></span>
                                <input type="number" class="form-control" name="cpf" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationDefault02" class="form-label">Senha:</label>
                            <input type="password" minlength="6" maxlength="50" name="password" class="form-control" id="validationDefault02" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault05" class="form-label">CEP:</label>
                            <input type="text" class="form-control" name="cep" id="cep" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault03" class="form-label">Endereço:</label>
                            <input type="text" class="form-control" name="endereco" id="endereco" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault03" class="form-label">Numero:</label>
                            <input type="text" class="form-control" name="numero" id="numero" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault03" class="form-label">Cidade:</label>
                            <input type="text" class="form-control" name="cidade" id="cidade" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault04" class="form-label">Bairro:</label>
                            <input type="text" class="form-control" name="bairro" id="bairro" aria-describedby="inputGroupPrepend2" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault04" class="form-label">Estado:</label>
                            <input type="text" class="form-control" name="estado" id="estado" aria-describedby="inputGroupPrepend2" required>
                        </div>

                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                <label class="form-check-label" for="invalidCheck2">
                                    Aceito todos os <a href="#">Termos</a>!
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" id="cadBtn" type="submit">Enviar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>