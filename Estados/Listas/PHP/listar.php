<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include_once("pessoa_da.php");
        $lista_pessoa=recupera_usuario();
    ?>
    <table>
        <tr>
            <td>ID:</td>
            <td>Nome:</td>
            <td>Email:</td>
            <td>Telefone:</td>
            <td>Data de Nascimento:</td>
        </tr>
        <?php 
        foreach ($lista_pessoa as $registro){
            ?>
            <tr>
                <td><?php echo $registro["id"]?></td>
                <td><?php echo $registro["nome"]?></td>
                <td><?php echo $registro["email"]?></td>
                <td><?php echo $registro["telefone"]?></td>
                <td><?php echo $registro["datnasc"]?></td>
                <td><a href="edit_pessoa.php?pessoa_id=<?php echo $registro["id"]?>"> Editar</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>