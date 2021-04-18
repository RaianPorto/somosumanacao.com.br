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


<!-- CREATE TABLE `somosumanacao`.`palpbr21` ( `numCamisa` INT(5) NOT NULL , `usuario` VARCHAR(100) NOT NULL , `rodada1` VARCHAR(11) NOT NULL , `rodada2` VARCHAR(11) NOT NULL , `rodada3` VARCHAR(11) NOT NULL , `rodada4` VARCHAR(11) NOT NULL , `rodada5` VARCHAR(11) NOT NULL , `rodada6` VARCHAR(11) NOT NULL , `rodada7` VARCHAR(11) NOT NULL , `rodada8` VARCHAR(11) NOT NULL , `rodada9` VARCHAR(11) NOT NULL , `rodada10` VARCHAR(11) NOT NULL , `rodada11` VARCHAR(11) NOT NULL , `rodada12` VARCHAR(11) NOT NULL , `rodada13` VARCHAR(11) NOT NULL , `rodada14` VARCHAR(11) NOT NULL , `rodada15` VARCHAR(11) NOT NULL , `rodada16` VARCHAR(11) NOT NULL , `rodada17` VARCHAR(11) NOT NULL , `rodada18` VARCHAR(11) NOT NULL , `rodada19` VARCHAR(11) NOT NULL , `rodada20` VARCHAR(11) NOT NULL , `rodada21` VARCHAR(11) NOT NULL , `rodada22` VARCHAR(11) NOT NULL , `rodada23` VARCHAR(11) NOT NULL , `rodada24` VARCHAR(11) NOT NULL , `rodada25` VARCHAR(11) NOT NULL , `rodada26` VARCHAR(11) NOT NULL , `rodada27` VARCHAR(11) NOT NULL , `rodada28` VARCHAR(11) NOT NULL , `rodada29` VARCHAR(11) NOT NULL , `rodada30` VARCHAR(11) NOT NULL , `rodada31` VARCHAR(11) NOT NULL , `rodada32` VARCHAR(11) NOT NULL , `rodada33` VARCHAR(11) NOT NULL , `rodada34` VARCHAR(11) NOT NULL , `rodada35` VARCHAR(11) NOT NULL , `rodada36` VARCHAR(11) NOT NULL , `rodada37` VARCHAR(11) NOT NULL , `rodada38` VARCHAR(11) NOT NULL ) ENGINE = MyISAM; -->