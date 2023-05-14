<?php
    session_start();
    include('conexaoBD.php');

        if(isset($_POST['submit'])) {
            $nome_usuario = $_POST['nome_usuario'];
        
            date_default_timezone_set('America/Sao_Paulo');
            $data_post = date("d/m/Y");
            $mensagem = $_POST['mensagem'];
        }

        #se o nome ou a mensagem estiverem vazias
        if((empty($nome_usuario)) && (empty($mensagem))){
            echo "Preencha todos os campos";
        } else{
            $sql = "INSERT INTO comentarios (cod_post, nome_usuario, data_post, email_usuario, curso_usuario, mensagem) 
            VALUES ('$cod_post', '$nome_usuario', '$data_post', '$email_usuario', '$curso_usuario', '$mensagem')";  
        }
    
        #atribuir um id na publicação
        if(isset($_GET['comentarios'])){
            $idweb = (int)$_GET['comentarios'];
        } else{
            $idweb = 1;
        }
        #numero de postagens por página
        $maximo = 6;
        $inicio = ($idweb * $maximo) - $maximo;
    
        #organizar em ordem decrescente
        $selecao = "SELECT * FROM comentarios ORDER BY cod_post DESC LIMIT $inicio, $maximo";
        #exibe os posts que achou
        $contagem = mysqli_num_rows($selecao);
    
        #verificar se há ou não comentários
        if ($contagem <=0) {
            echo "Nenhum comentário encontrado";
        } else{ #armazenar o resultado da consulta para utilizar como quiser
            while ($row = mysqli_fetch_array($selecao)){
                $cod_post = $row['cod_post'];
                $img_usuario = $row['img_usuario'];
                $nome_usuario = $row['nome_usuario'];
                $data_post = $row['data_post'];
                $mensagem = $row['mensagem'];
            }
        }
    ?>