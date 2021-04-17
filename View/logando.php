<?php

    // PASSOS PARA REALIZAR UM LOGIN EM PHP_ROUND_HALF_DOWN

    // 1- Realizar a conexão com o banco
    // 2- Recuperar os dados do formulario e armazenar em uma variavel
    // 3- Buscar o usuario no banco e armazenar o resultado em uma variavel
    // 4- Verificar se o usuario existe. 
    //     i- Se não existir informar ao usuario e redireciona-lo para a area de cadastro
    //     ii - Se existir redireciona-lo para a pagina inicial

    require_once 'conexao.php'; // Importando o arquivo de conexao
    //Include() => Função para importar um outro arquivo para o arquivo atual

    session_start();
    
    // isset => Função que verifica se uma variável está definida, ou seja, não é nula.
    if (isset($_POST['entrar'])) { 

        $usuario = $_POST['login']; // Variável para armazenar o usuario que vem do formulario de login
        $senha = $_POST['senha']; // Variável para armazenar a senha que vem do formulário de login

        $sql_ConsultaUsuario = "SELECT * FROM usuarios WHERE usuario ='$usuario' AND senha = '$senha'";
        $result = mysqli_query($conexao, $sql_ConsultaUsuario);

        if ($result) {

            if (mysqli_num_rows($result) == 1) {
                $dadosUsuario = mysqli_fetch_array($result);
                mysqli_close($conexao); // Sempre fechar conexão após a consulta e armazenamento dos dados
                $_SESSION['logado'] = true;
                $_SESSION['numCamisa'] = $dadosUsuario['numCamisa'];
                header("Location: ../index.php");
                die();
            } else {
                echo "<script language='javascript' type='text/javascript'> alert('Login e/ou senha incorretos'); window.location.href='login.php'; </script>";
                
            }

        } else {
            echo "<script language='javascript' type='text/javascript'> alert('Desculpe, tivemos um problema interno ao fazer a busca'); window.location.href='login.php'; </script>";
        }
        
    }

?>