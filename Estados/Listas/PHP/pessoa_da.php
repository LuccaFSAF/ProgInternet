<?php 
include_once("database.php");
/* Função que insere usuarios no bd*/
function insere_pessoa($nome, $email, $tel, $dat){
    $bd = conectar_bd();
    $sql = "INSERT INTO crud.usuario(nome, email, telefone, datnasc) VALUES(:nome,:email,:telefone,:datnasc);";
    $stmt = $bd->prepare($sql);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":telefone", $tel);
    $stmt->bindParam(":datnasc", $dat);
    try{
        $stmt->execute();
        echo "Usuario Inserido!";
    }catch(PDOException $e){
        echo "Erro na inserção!". $e->getMessage();
    }
    $bd = null;
}
//insere_pessoa(nome:"Romulo", email:"ghfthtd");

/**função retorna um array com todos os usuarios*/
function recupera_usuario(){
    $bd = conectar_bd();
    $sql = "SELECT * FROM usuario;";
    $stmt = $bd->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}
recupera_usuario();

function getUsuario($id){
    $bd = conectar_bd();
    $sql = "SELECT * from usuario where id = :id";
    $stmt = $bd->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    return $resultado;
}

function delete_pessoa($id){
    $bd = conectar_bd();
    $sql = "DELETE FROM crud.usuario WHERE id = :id;";
    $stmt = $bd->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    if($stmt->rowCount() > 0){
        return true;
    }else{
        return false;
    }
}
function update_pessoa($nome, $email, $tel, $dat, $id){
    $bd = conectar_bd();
    $sql = "UPDATE crud.usuario SET nome=:nome, email=:email, telefone=:telefone, datnasc=:datnasc WHERE id=:id;";
    $stmt = $bd->prepare($sql);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":telefone", $tel);
    $stmt->bindParam(":datnasc", $dat);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->rowCount();
}
?>