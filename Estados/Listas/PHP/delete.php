<?php 
include_once("pessoa_da.php");
$method=$_SERVER['REQUEST_METHOD'];
if($method == "GET"){
    $id = $_GET["id"];
    if(delete_pessoa($id)){
        header("Location: listar.php");
    }
}
?>