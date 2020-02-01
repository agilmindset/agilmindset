<?php

    if( $_SERVER["SERVER_NAME"] === "localhost" ||  $_SERVER["SERVER_NAME"] === "127.0.0.1" || strpos($_SERVER["REQUEST_URI"],"/magicbox/") ) {
        $ambiente = "debug";
        require_once("../config/conn.php");
    } else {
        require_once("../config/conexao.php");
        $ambiente = "produção";
    }

    $email = $_POST["inputEmail"];
    $senha = $_POST["inputSenha"];

    $sql = "SELECT * FROM usuarios where (email = :email)";

    $query = $db->prepare($sql);

    $query->execute([
        ":email" => $email
    ]);

    $usuarioLogado = $query->fetch(PDO::FETCH_ASSOC);
    
    if(isset($usuarioLogado) && $usuarioLogado !== false && $usuarioLogado !== "" && $usuarioLogado !== NULL){

        $senhaValida = password_verify($senha, $usuarioLogado["senha"]);

        if(!$senhaValida){
    
            header("Location: ../login.php?msg=nao-autenticado");
            exit;
    
        } else {
            if(!isset($_SESSION)) { 
                session_start();
            }

            $_SESSION["logado"] = true;
            $_SESSION["id"] = $usuarioLogado["id"];
            $_SESSION["nome"] = $usuarioLogado["nome"];
            $_SESSION["sobrenome"] = $usuarioLogado["sobrenome"];
            $_SESSION["apelido"] = $usuarioLogado["apelido"];
            $_SESSION["email"] = $usuarioLogado["email"];
            $_SESSION["senha"] = $usuarioLogado["senha"];
            $_SESSION["nivel"] = $usuarioLogado["nivel"];

            header("Location: ../index.php");
            exit;
        }

    } else {
        
        header("Location: ../login.php?msg=nao-autenticado");
        die("Usuário não encontrado");

    }
?>