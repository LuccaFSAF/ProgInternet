<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display:flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <?php

        if(isset($_GET["erro"]) && $_GET["erro"] == 1){
            ?>
            <h2>Usuário não logado</h2>
        <?php }
    ?>

    <?php

        if(isset($_GET["erro"]) && $_GET["erro"] == 2){
    ?>
    <h2>Usuário e/ou senha errado(s)</h2>
    <?php }
    ?>
    <?php

        if(isset($_GET["erro"]) && $_GET["erro"] == 3){
    ?>
    <h2>Preencha os campos</h2>
    <?php }
    ?>
    <form action="autenticacao.php" method="post">
        <label for="login">Login</label>
        <input type="text" id="login" name="login">
        <br><br>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">
        <br><br>
        
        <input type="submit" value="Logar">
    </form>
</body>
</html>