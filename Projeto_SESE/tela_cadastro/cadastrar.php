<?php

    include 'conexao.php';

    error_reporting(0);

    $nome = $_GET['nome'];
    $usuario = $_GET['usuario'];
    $senha = $_GET['senha'];
    $confirmsenha = $_GET['confirmsenha'];

    
    
    $query = "insert into usuarios values ('','$nome','$usuario','$senha','$confirmsenha')";

    mysqli_query($conn,$query) or die ("Erro ao tentar inserir o dado!");
    if ($query) {echo("<script>alert('Parabéns!! Os Dados Foram Cadastrados com sucesso!');</script>");}

    mysqli_close($conn);

    /**
     * 
     * Capitação de 4 dados utilizados pelo usuário , e cadastro dos usuários no banco.
     * 
     * 
     * 
     * 
     */