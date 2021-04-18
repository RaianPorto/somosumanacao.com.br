<?php

    require_once 'view/conexao.php';
    session_start();

    //Tratamento para verificar se há uma sessão!
    if (!isset($_SESSION['logado'])) {
        header('Location: login.php');
    }

    $id = $_SESSION['numCamisa'];
    $sql = "SELECT * FROM usuarios WHERE numCamisa ='$id'";
    $resultado = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_array($resultado);
    mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Somos uma nação</title>
    </head>
    <body>
        <a href="view/logout.php">Sair</a>
        <h1>Olá, <?php echo $dados['nome'] . " " . $dados['sobrenome']; ?>!</h1>

        <header>
            <nav>
                <ul>
                    <li>Títulos</li>
                    <li></li>
                    <li></li>
                    <li>Home - Entra a logo no meio dos links</li>
                    <li>Bolão</li>
                    <li>Elenco</li>
                    <li>História</li>
                </ul>
            </nav>

            Contagem dos rubro-negros
            <h3>Somos</h3>
            <h1>0000000</h1>
            <h3>Rubro-negros</h3>
        </header>
        <main>
            <section>

                <?php require_once 'view/formBolao.php'; ?>

            </section>
            <section>
                <div>
                    <table>
                        numCamisa | IMG | usuario | Pont | AP | GF | QtdPal


                        Cada acerto completo = 3pts
                        Acertou só os gols do Fla = 1pt

                        Critérios de Desempate

                        Pontuação
                        AP
                        GF
                        QtdPal
                    </table>
                </div>
            </section>
        </main>
        <footer>

            <span></span>
        </footer>
    </body>
</html>