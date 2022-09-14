<?php

session_start();
//print_r($_REQUEST);

if(isset($_POST['submit']) &&!empty($_POST['usuario']) && !empty($_POST['senha']) )
{
    //Acessa
    include_once('conexao.php');
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    //print_r('usuario: ' .$usuario);
    //print_r('senha: ' .$senha);

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' and senha = '$senha'";

    $result = $conn ->query($sql);

    //print_r($sql);
    //print_r($result);
    if(mysqli_num_rows($result) < 1)
    {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    else
    {
        $_SESSION['usuario'] =$usuario;
        $_SESSION['senha'] =$senha;
        header('Location: http://localhost/PROJETO_SESE/tela_feed/');
    }
}
else
{
    //Não acessa
    header('location: login.php');
}


?>