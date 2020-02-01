<?php

    if( $_SERVER["SERVER_NAME"] === "localhost" ||  $_SERVER["SERVER_NAME"] === "127.0.0.1" || strpos($_SERVER["REQUEST_URI"],"/magicbox/") ) {
        $ambiente = "debug";
        require_once("../config/conn.php");
    } else {
        require_once("../config/conexao.php");
        $ambiente = "produção";
    }
    $id = $_POST["inputId"];

    $sql = "DELETE FROM usuarios WHERE id = :id";

    $query = $db->prepare($sql);

    $excluiu = $query->execute([
        ":id" => $id
    ]);

    if(isset($excluiu) && $excluiu == true){
        session_destroy();
        session_start();
        $_SESSION["logado"] = false;
        header("Location: ../index.php");
    } else {
        header("Location: ../cadastrar-usuario.php");
    }
  
?>