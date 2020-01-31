<?php

  require_once("../config/conn.php");

    //   var_dump($_POST);
    //   exit;
    $nome = $_POST["inputNome"];
    $sobrenome = $_POST["inputSobrenome"];
    $apelido = $_POST["inputApelido"];
    $email = $_POST["inputEmail"];
    $senha = $_POST["inputSenha"];
    $aceite = $_POST["aceitePoliticasFormCadastro"];
    // var_dump($_POST["inputNome"]);
    // var_dump($_POST["inputSobrenome"]);
    // var_dump($_POST["inputApelido"]);
    // var_dump($_POST["inputEmail"]);
    // var_dump($_POST["inputSenha"]);
    // var_dump($_POST["aceitePoliticasFormCadastro"]);
    // echo "<br>";
    // var_dump($nome);
    // var_dump($sobrenome);
    // var_dump($apelido);
    // var_dump($email);
    // var_dump($senha);
    // var_dump($aceite);
    // exit;
    $sql = "INSERT INTO usuarios (id, nome, sobrenome, apelido, email, senha, aceite) values (:id, :nome, :sobrenome, :apelido, :email, :senha, :aceite)";
    // var_dump($sql);
    // exit;
    $query = $db->prepare($sql);
    // var_dump($query);
    // exit;
    $salvou = $query->execute([
        ":id" => NULL,
        ":nome" => $nome,
        ":sobrenome" => $sobrenome,
        ":apelido" => $apelido,
        ":email" => $email,
        ":senha" => password_hash($senha, PASSWORD_DEFAULT),
        ":aceite" => $aceite
    ]);
    // var_dump($salvou);
    // exit;
    if(isset($salvou) && $salvou == true){
        echo "Usuário cadastrado com sucesso";
        header("Location: ../index.php");
    } else {
        echo "Falha ao processar cadastro de usuário";
    }
  
?>