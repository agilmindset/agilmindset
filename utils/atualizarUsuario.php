<?php

    if( $_SERVER["SERVER_NAME"] === "localhost" ||  $_SERVER["SERVER_NAME"] === "127.0.0.1" || strpos($_SERVER["REQUEST_URI"],"/magicbox/") ) {
        $ambiente = "debug";
        require_once("../config/conn.php");
    } else {
        require_once("../config/conexao.php");
        $ambiente = "produção";
    }
    
    if($_REQUEST["viaLista"] === "true") {
        $viaLista = true;
    } else {
        $viaLista = false;
    }
    // var_dump($viaLista);
    // exit;

    $id = $_POST["inputId"];
    $nome = $_POST["inputNome"];
    $sobrenome = $_POST["inputSobrenome"];
    $apelido = $_POST["inputApelido"];
    $email = $_POST["inputEmail"];
    $senha = password_hash($_POST["inputSenha"], PASSWORD_DEFAULT);
    if($_POST["aceitePoliticasFormCadastro"] == true){
        $aceite = 1;
    } else {
        $aceite = 0;
    }
    $dominio = substr($_POST["inputEmail"],strpos($_POST["inputEmail"], "@"));
    if($_POST["inputEmail"] === "marcelo@djament.com.br" || $_POST["inputEmail"] === "webmaster@agilmindset.com") {
        $nivel = 99;
    } else if($dominio === "@djament.com.br" || $dominio === "@agilmindset.com"){
        $nivel = 30;
    } else {
        $nivel = 10;
    }
    
    // var_dump($id);
    // var_dump($nome);
    // var_dump($sobrenome);
    // var_dump($apelido);
    // var_dump($email);
    // var_dump($senha);
    // var_dump($nivel);
    // var_dump($aceite);
    // exit;
    $sql = "UPDATE usuarios SET nome = :nome, sobrenome = :sobrenome, apelido = :apelido, email = :email, senha = :senha, aceite = :aceite, nivel = :nivel WHERE id = :id";

    $query = $db->prepare($sql);
    
    $query->execute([
        ":id" => $id,
        ":nome" => $nome,
        ":sobrenome" => $sobrenome,
        ":apelido" => $apelido,
        ":email" => $email,
        ":senha" => $senha,
        ":aceite" => $aceite,
        ":nivel" => $nivel
    ]);
    
    $atualizou = $query->fetch(PDO::FETCH_ASSOC);

    if(isset($atualizou) && $atualizou == true){
        
        if($viaLista === true ) {
            header("Location: ../listar-usuarios.php");
            exit;
        } else {
            session_destroy();
            session_start();
            $_SESSION["logado"] = true;
            $_SESSION["id"] = $id;
            $_SESSION["nome"] = $nome;
            $_SESSION["sobrenome"] = $sobrenome;
            $_SESSION["apelido"] = $apelido;
            $_SESSION["email"] = $email;
            $_SESSION["senha"] = $senha;
            $_SESSION["nivel"] = $nivel;
            header("Location: ../index.php");
            exit;
        }

    } else {
        if($viaLista === true ) {
            header("Location: ../../listar-usuarios.php");
            exit;
        } else {
            header("Location: ../../cadastrar-usuario.php");
            exit;
        }
    }
  
?>