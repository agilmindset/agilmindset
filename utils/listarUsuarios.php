<?php

    if( $_SERVER["SERVER_NAME"] === "localhost" ||  $_SERVER["SERVER_NAME"] === "127.0.0.1" || strpos($_SERVER["REQUEST_URI"],"/magicbox/") ) {
        $ambiente = "debug";
        require_once("./config/conn.php");
    } else {
        require_once("./config/conexao.php");
        $ambiente = "produção";
    }

    if($_SESSION["nivel"] === "99" && $_SESSION["active"] === "superadmin"):

        $sql = "SELECT * FROM usuarios";

        $query = $db->prepare($sql);

        $query->execute();

        $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
        
        if(isset($usuarios) && $usuarios !== false && $usuarios !== "" && $usuarios !== NULL){

            return $usuarios;

        } else {
            
            header("Location: ../index.php");
            die("Usuário não encontrado");
            exit;

        }
    else:
        die("Usuário não encontrado");
        header("Location: ../index.php");
        exit;
    endif;
?>