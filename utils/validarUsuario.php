<?php

  require_once("../config/conn.php");

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
            $_SESSION["apelido"] = $usuarioLogado["apelido"];
            $_SESSION["nivel"] = $usuarioLogado["nivel"];
            $_SESSION["id"] = $usuarioLogado["id"];

            header("Location: ../index.php");
            exit;
        }

    } else {
        
        header("Location: ../login.php?msg=nao-autenticado");
        die("Usuário não encontrado");

    }
?>