<?php

    if(isset($ambiente) && $ambiente === "produção"){
        require_once("../config/conexao.php");
    } else {
        require_once("../config/conn.php");
    }

    $nome = $_POST["inputNome"];
    $sobrenome = $_POST["inputSobrenome"];
    $apelido = $_POST["inputApelido"];
    $email = $_POST["inputEmail"];
    $senha = $_POST["inputSenha"];
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

    $sql = "INSERT INTO usuarios (id, nome, sobrenome, apelido, email, senha, aceite, nivel) values (:id, :nome, :sobrenome, :apelido, :email, :senha, :aceite, :nivel)";

    $query = $db->prepare($sql);

    $salvou = $query->execute([
        ":id" => NULL,
        ":nome" => $nome,
        ":sobrenome" => $sobrenome,
        ":apelido" => $apelido,
        ":email" => $email,
        ":senha" => password_hash($senha, PASSWORD_DEFAULT),
        ":aceite" => $aceite,
        ":nivel" => $nivel,
    ]);

    if(isset($salvou) && $salvou == true){
        header("Location: ../index.php");
    } else {
        header("Location: ../cadastrar-usuario.php");
    }
  
?>