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
        </tr>
        <?php 
        foreach ($lista_pessoa as $registro){
            ?>
            <tr>
                <td><a href="edit_pessoa.php?pessoa_id="><?php echo $registro["id"]?></td>
                <td><?php echo $registro["nome"]?></td>
                <td><?php echo $registro["email"]?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>