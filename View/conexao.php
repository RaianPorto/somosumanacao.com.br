<?php

    $host = "localhost"; // Variável para receber o servidor
    $usuario = "root"; // Variável para receber o usuario que tem acesso ao servidor
    $senha = ""; // Variável para receber a senha de acesso ao servidor
    $banco = "somosumanacao"; // Variável para receber o nome do banco para conexão

    $conexao = mysqli_connect($host, $usuario, $senha, $banco);

    if ($conexao) {
        echo "Conexão ao banco $banco realizada com sucesso!";
    } else{
        die("Falha ao tentar se conectar ao banco $banco: " . mysqli_connect_error());
    }

?>


<!-- CREATE TABLE `somosumanacao`.`usuarios` ( `numCamisa` INT(5) NOT NULL AUTO_INCREMENT , `nome` VARCHAR(100) NOT NULL , `sobrenome` VARCHAR(100) NOT NULL , `telefone` VARCHAR(20) NOT NULL , `email` VARCHAR(100) NOT NULL , `usuario` VARCHAR(100) NOT NULL , `senha` VARCHAR(100) NOT NULL , `dtNasc` DATE NOT NULL , `instagram` VARCHAR(100) NOT NULL , `pais` VARCHAR(100) NOT NULL , `estado` VARCHAR(100) NOT NULL , PRIMARY KEY (`numCamisa`), UNIQUE (`usuario`(100))) ENGINE = MyISAM CHARSET=macce COLLATE macce_general_ci; -->