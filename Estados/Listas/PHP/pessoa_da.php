<?php 
include_once("database.php");
/* Função que insere usuarios no bd*/
function insere_pessoa($nome, $email){
    $bd = conectar_bd();
    $sql = "INSERT INTO crud.usuario(nome, email) VALUES(?,?);";
    $stmt = $bd->prepare($sql);
    $stmt->bindValue(1, $nome, PDO::PARAM_STR);
    $stmt->bindValue(2, $email, PDO::PARAM_STR);
    try{
        $stmt->execute();
        echo"Usuario Inserido!";
    }catch(PDOException $e){
        echo "Erro na inserção!". $e->getMessage();
    }
    $bd = null;
}
//insere_pessoa(nome:"Romulo", email:"ghfthtd");

/**função retorna um array com todos os usuarios*/
function recupera_usuario(){
    $bd = conectar_bd();
    $sql = "SELECT * FROM usuario";
    $stmt = $bd->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}
recupera_usuario();

function getUsuario($id){
    $bd = conectar_bd();
    $sql = "SELECT * from usuario where id = ?";
    $stmt = $bd->prepare($sql);
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    $stmt->execute();
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    return $resultado;
}

?>