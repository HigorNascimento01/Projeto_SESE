# SESE

## Web and Mobile Project

  #### PROPOSTA
  
-O sistema SESE tem como principal objetivos desenvolver uma dinâmica entre fãs e/ou amantes de filmes ou séries, cujo a intenção é aproximar grupos baseados nessa bolha social. O intuito é desenvolver uma rede social onde grupos mais experientes e mais leigos consigam interagir e opinar para assim ocorrerem discussões, ideias e teorias sobre os episódios de series preferidas ou de filmes de seu maior agrado. 


  #REQUISITOS E TECNOLOGIAS UTILIZADAS NO SISTEMA
  
- PHP
- MySQL
- Xammp
- HTML5
- CSS3
- JavaScript
- IDE a escolha VSCode 2021 
- Navegador a escolha


  #INSTRUÇÕES GERAIS

- Realize a instalação em seu Sistema Operacional dos requisitos citados acima;
- Realizar as configurações do Xammp corretamente (Caso não saiba como realizar essa instrução, basta pesquisar no Youtube)

    IMPORTANTE!!
- Configurar o banco de dados local do Xammp (Para que tudo funcione corretamente é preciso fazer o cadastro do banco exatamente como está configurado no arquivo 4Parking/conexao.php).

<?php
    
    $msyql_servidor='localhost';
    $msyql_usuario='higor';
    $msyql_senha='123456';
    $msyql_database="cadastro";

    $conn = mysqli_connect($msyql_servidor,$msyql_usuario,$msyql_senha,$msyql_database) or die("Erro ao conectar!");

    if ($conn){echo("<script>alert('parabéns!! A conexão ao banco de dados ocorreu normalmente!');</script>");}

    header('Location: http://localhost/PROJETO_SESE/tela_login/login.php');
?>


Caso tenha experiência com o Xammp e o MySQL você também pode configurá-lo manualmente a sua escolha;

- Após realização dos passos anterior corretamente, basta fazer o acesso em seu navegador por meio do localhost na porta configurada pelo Xammp;
- O sistema está 100% funcional em dispositivos mobile, fizemos toda uma adaptação para atendermos todos os públicos;


  

# SESE-Projeto_Integrador_IV