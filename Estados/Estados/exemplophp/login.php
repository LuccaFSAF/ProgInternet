<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    fieldset{
        display: flex;
        flex-direction: column;
    }
</style>
<body>
    <?php 
        if(isset($_GET["erro"]) && $_GET["erro"]==1){
        ?>
        <h2>Usuario não logado! </h2>
    <?php 
        }
    ?>
    <fieldset>
            <form action="autenticacao.php" method="post">
            <label for="login">Login:</label>
            <input type="text" id = "login" name="login">
        
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha">
            <input type="submit" value="Login">
        </form>
    </fieldset>
</body>
</html>