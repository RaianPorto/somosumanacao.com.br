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
    <h1>OLÁ, <?php echo $dados['nome'] . " " . $dados['sobrenome']; ?>!</h1>
    <?php

        // $login_cookie = $_COOKIE['usuario'];
        // if(isset($login_cookie)){
        // echo"Bem-Vindo, $login_cookie <br>";
        // echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
        // }else{
        // echo"Bem-Vindo, convidado <br>";
        // echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
        // echo"<br><a href='login.html'>Faça Login</a> Para ler o conteúdo";
        // }
    ?>
        <!-- <header>
            <nav>
                <ul>
                    <li>Títulos</li>
                    <li></li>
                    <li></li>
                    <li>Home</li> Entra a logo no meio dos links
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

                <div>
                    <h3>Campeonato</h3>
                    <h4>Data - Hora</h4>
                    <h4>Local</h4>
                    <img src="" alt=""> time1
                    <h3>x</h3>
                    <img src="" alt=""> time2
                </div>

                <button> Participe do nosso bolão </button>
            </section>
            <section>
                <div>
                    <table>

                    </table>
                </div>
            </section>
        </main>
        <footer>

            <span></span>
        </footer>

        <div class="container-modal">
            <div>
                <h2>Dê o seu palpite</h2>
                
            </div>
        </div> -->
    </body>
</html>