<?php

if (!empty($_POST['login']) && !empty($_POST['password'])) {


    //verifica se login == admin e senha == admin
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);


    $mensgaem = null;
    if($login == 'admin' && $password == 'admin') {
        $mensgaem = 'Você logou com sucesso';
    } else {
        $mensagem =  'Usuário ou senha invalidos';
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de login</title>
</head>
<body>
    <form action="" method = "POST">
        <input type="text" name="login" placeholder="Digite o login" value= "<?= $login ?? '' ?>"/>
        <br />
        <input type="password" name="password" placeholder="Digite a senha" value="<?= $password ?? '' ?>">

        <input type="submit" value="Enviar">
        <?php if (!empty($mensagem)){
        echo $mensagem;}?>
    </form>
</body>
</html>
