<form action="cadastrando.php" method="POST">
    <label for="">Nome</label>
    <input type="text" name="nome" id="">
    <label for="">Sobrenome</label>
    <input type="text" name="sobrenome" id="">
    <label for="">Telefone</label>
    <input type="text" name="telefone" id="">
    <label for="">E-mail</label>
    <input type="text" name="email" id="">
    <label for="">Usuário</label>
    <input type="text" name="usuario" id="">
    <label for="">Senha</label>
    <input type="password" name="senha" id="">
    <label for="">Confirmar Senha</label>
    <input type="password" name="confSenha" id="">
    <label for="">Data de Nascimento</label>
    <input type="text" name="dtNasc" id="">
    <label for="">Instagram</label>
    <input type="text" name="instagram" id="">
    <label for="">País</label>
    <input type="text" name="pais" id="">
    <label for="">Estado</label>
    <select name="estado"> 
        <option value="estado">Selecione o Estado</option> 
        <option value="ac">Acre</option> 
        <option value="al">Alagoas</option> 
        <option value="am">Amazonas</option> 
        <option value="ap">Amapá</option> 
        <option value="ba">Bahia</option> 
        <option value="ce">Ceará</option> 
        <option value="df">Distrito Federal</option> 
        <option value="es">Espírito Santo</option> 
        <option value="go">Goiás</option> 
        <option value="ma">Maranhão</option> 
        <option value="mt">Mato Grosso</option> 
        <option value="ms">Mato Grosso do Sul</option> 
        <option value="mg">Minas Gerais</option> 
        <option value="pa">Pará</option> 
        <option value="pb">Paraíba</option> 
        <option value="pr">Paraná</option> 
        <option value="pe">Pernambuco</option> 
        <option value="pi">Piauí</option> 
        <option value="rj">Rio de Janeiro</option> 
        <option value="rn">Rio Grande do Norte</option> 
        <option value="ro">Rondônia</option> 
        <option value="rs">Rio Grande do Sul</option> 
        <option value="rr">Roraima</option> 
        <option value="sc">Santa Catarina</option> 
        <option value="se">Sergipe</option> 
        <option value="sp">São Paulo</option> 
        <option value="to">Tocantins</option> 
    </select>

    <button type="submit" name="cadastrar">Cadastrar</button>
</form>

<!-- CREATE TABLE `somosumanacao`.`usuarios` ( `numCamisa` INT(100) NOT NULL AUTO_INCREMENT , `nome` VARCHAR(100) NOT NULL , `sobrenome` VARCHAR(100) NOT NULL , `telefone` INT(20) NOT NULL , `email` VARCHAR(100) NOT NULL , `usuario` VARCHAR(100) NOT NULL , `senha` VARCHAR(100) NOT NULL , `dtNasc` DATE NOT NULL , `instagram` VARCHAR(100) NOT NULL , `pais` VARCHAR(100) NOT NULL , `estado` VARCHAR(100) NOT NULL , PRIMARY KEY (`numCamisa`), UNIQUE (`usuario`)) ENGINE = InnoDB; -->