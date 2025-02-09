<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form{
        display: flex;
        flex-direction: column;
        width: 200px;
        margin: 0 auto;
    }
</style>
<body>
    <?php
        include_once("database.php");
        include_once("pessoa_da.php");
        if(isset($_GET["pessoa_id"])) {
            $id = $_GET["pessoa_id"];
            $pessoa = getUsuario($id);
        }else{
            die("Pessoa não encontrada!");
        }
    ?>
    <h1>Edição  Pessoa</h1>
    <fieldset>
    <form action="pessoa_controller.php" method="POST">
        <input type="text" name="id" id="id" hidden>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo $pessoa["nome"]?>">
        <br>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value="<?php echo $pessoa["email"]?>">
        <br>
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" value="<?php echo $pessoa["telefone"]?>">
        <br>
        <label for="datnasc">Data de Nascimento:</label>
        <input type="text" name="datnasc" id="datnasc" value="<?php echo $pessoa["datnasc"]?>">
        <input type="text" name="acao" value="editar" hidden>
        <br>
        <input type="submit" name="acao" value="Deletar">
        <input type="submit" value="Salvar Alterações">
    </form>
    </fieldset>
</body>
</html>