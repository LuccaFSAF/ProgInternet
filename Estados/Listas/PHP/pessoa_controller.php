<?php 
include_once("pessoa_da.php");
include_once("database.php");
var_dump($_REQUEST);

if(isset($_POST["acao"])&& $_POST["acao"]== "cadastrar"){
    if(isset($_POST["nome"]) &&  isset($_POST["email"]) && isset($_POST["telefone"]) && isset($_POST["datnasc"])) {
    $nome=$_POST["nome"];
    $email=$_POST["email"];
    $tel=$_POST["telefone"];
    $dat=$_POST["datnasc"];
    insere_pessoa( $nome, $email, $tel, $dat);
    header("Location: listar.php");
    }else{
    echo"Erro ao inserir o usuario";
    }
}
if(isset($_POST["acao"])&& $_POST["acao"]=="editar"){
    
}
?>