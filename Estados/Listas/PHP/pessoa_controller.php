<?php 
include_once("pessoa_da.php");
include_once("database.php");
var_dump($_REQUEST);

if(isset($_POST["acao"])&& $_POST["acao"]== "cadastrar"){
    if(isset($_POST["nome"]) &&  isset($_POST["email"])) {
    $nome=$_POST["nome"];
    $email=$_POST["email"];
    insere_pessoa( $nome, $email);
    header("Location: listar.php");
    }else{
    echo"Erro ao inserir o usuario";
    }
}
if(isset($_POST["acao"])&& $_POST["acao"]=="editar"){
    
}
?>