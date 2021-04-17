<?php

    require_once 'conexao.php';

    session_start();
    
    if(isset($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $dtNasc = $_POST['dtNasc'];
        $instagram = $_POST['instagram'];
        $pais = $_POST['pais'];
        $estado = $_POST['estado'];

        $sql_InsertUsuario = "INSERT INTO usuarios (nome, sobrenome, telefone, email, usuario, senha, dtNasc, instagram, pais, estado) VALUES ('$nome', '$sobrenome', '$telefone', '$email', '$usuario', '$senha', '$dtNasc', '$instagram', '$pais', '$estado')";

        if (mysqli_query($conexao, $sql_InsertUsuario)) {
            echo "<script language='javascript' type='text/javascript'> alert('Cadastro realizado com sucesso'); window.location.href='login.php'; </script>";
            header('Location: login.php');
        } else {
            echo "<script language='javascript' type='text/javascript'> alert('Erro ao cadastrar! <br>" . $sql_InsertUsuario . "<br>" . mysqli_error($conexao) . "'); window.location.href='login.php'; </script>";
            header('Location: cadastro.php');
            // echo "Erro ao cadastrar: " . $sql_InsertUsuario . "<br>" . mysqli_error($conexao);
        }
    }

?>