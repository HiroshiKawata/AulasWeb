<?php
    require_once '../DAO/ProjetosDAO.php'/
    require_once '../Model/Projetos.php'/

    session_start();

    $acao=$_POST['acao'];
    
    switch ($acao) 
    {
        case 1:
            //listar

        break;

        case 2: 
            //cadastrar
            $projeto = new Projetos(
                null,
                $_POST['HTML_nome'],
                $_POST['HTML_desc'],
                $_POST['HTML_inicio'],
                $_POST['HTML_fim'],
                false,//status
                $_SESSION['email'],
                $_POST['']
            );

            //VOLTAR AQUI XDD
        break;
    }
?>