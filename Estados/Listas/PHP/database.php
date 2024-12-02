<?php 
/** Função que conecta ao banco de dados */

    function conectar_bd(): bool|PDO{
        $user="root";
        $pass="aluno";
        $database="crud";
        $host="localhost";

        $bd=new PDO("mysql:host=$host;dtname=$database",   $user,  $pass);
        $bd->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if($bd){
            return $bd;
        }else{
            return false;
        }
    }

    function check_conn($conn_id): void{
        if($conn_id){
            echo"Conexão estabelecida com sucesso";
        }else{
            echo "Erro na conexão";
        }
    }

//    var_dump(conectar_bd());
  //  check_conn(conectar_bd());
?>