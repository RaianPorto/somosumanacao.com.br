<?php
    require_once 'conexao.php';
    
    session_start();

    $id = $_SESSION['numCamisa'];
    $sql = "SELECT * FROM usuarios WHERE numCamisa ='$id'";
    $resultado = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_array($resultado);
    mysqli_close($conexao);

    if(isset($_POST['registrar'])){

       $timeCasa = $_POST['casa'];
       $timeVisitante = $_POST['visitante'];
       $placarCasa = $_POST['palpitCasa'];
       $placarVisitante = $_POST['palpitVisitante'];

       $palpite = $timeCasa . $placarCasa . "x" . $placarVisitante . $timeVisitante;

    }

?>
