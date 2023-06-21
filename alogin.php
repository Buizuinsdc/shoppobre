<?php 
require 'conexao.php';
?>

<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoppobre</title>
</head>
<body>
<?php

?>


<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?=$base?>assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link href="<?=$base?>assets/css/layout.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body id="basd">

    <div class="container position-absolute top-50 start-50 translate-middle" >
        
    <div id="logincad" style=" height:700px; display:flex; justify-content:center; border-radius:20px;" > 
                
        <form method="post" action="login_action.php" class="container position-absolute top-50 start-50 translate-middle" style="width:700px;  height:700px;  display:flex; justify-content:center; align-items:center;" >


            <div class="signgup">
                <div id="logo_login"><img src="<?=$base?>assets/image/shopee-logo.png" width="100px"></div>
                        <?php if(!empty($_SESSION['flash'])): ?>
                        <?=$_SESSION['flash'];?>
                        <?php $_SESSION['flash'] = ''; ?>
                        <?php endif; ?>
                <label for="Login">E-mail</label>
                <Input type="text" name="email_login" style="margin-bottom:30px;border-radius:20px; width:250px; padding:10px;"></Input>
                <label for="Login">Senha</label>
                <Input type="password" name="password_login" style="margin-bottom: 10px;border-radius:20px; width:250px; padding:10px;"></Input>
                <input type="submit" class="btn btn-primary" name="Enviar" value="Logar">
                <label>não tem cadastro ? <br/><a style="text-decoration: none; color:red;" href="<?=$base?>signup.php">clique aqui </a>para se cadastrar</label>
            </div>
           
        </form>

        </div>
    </div>
   
 
   
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="<?=$base?>assets/js/script.js"></script>
</body>
</html>
</body>
</html>