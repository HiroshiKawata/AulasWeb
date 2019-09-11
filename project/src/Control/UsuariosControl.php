<?php
    session_start();

    require_once '../Model/Usuarios.php';
    require_once '../DAO/UsuariosDAO.php';

    //Pegando valor da variável acao (input hidden) e jogando dentro dessa variável, no caso:
    //1: Login, 2: Cadastro
    $acao = $_POST['acao'];

    switch ($acao)
    {
        case 1: 
            //validar
            $email = $_POST['HTML_email'];
            $senha = md5($_POST['HTML_senha']);

            $user = UsuariosDAO::validarUsuario($email, $senha);

            if($user != null)
            {
                //iniciando seção
                $_SESSION['nome'] = $user->getNome();
                $_SESSION['email'] = $user->getEmail();
                $_SESSION['telefone'] = $user->getTelefone();

                $_SESSION['statusLogin'] = 1;

                echo "<script>location.href='../ui/home-usuario-ui.php';</script>";
            } else 
            {
                echo "<script>location.href='../../index.php';</script>";
            }

            break;
        case 2:
            //cadastrar
            $nome = $_POST['HTML_nome'];
            $email = $_POST['HTML_email'];
            $senha = md5($_POST['HTML_senha']); //criptografia
            $telefone = $_POST['HTML_tel'];

            $usuario = new Usuarios(
                $nome,
                $email,
                $senha,
                $telefone
            );

            UsuariosDAO::CadastrarUsuario($usuario);

            echo "<script>alert('Dados Cadastrados')</script>";

            //header('location: ../../index.php'); //header(location: ...) redireciona a página (NÃO FUNCIONA COM HTML NA PÁGINA!)
            //alternativa em JavaScript: <script>location.href=' ... content ... </script>
            //echo "<script>location.href = '../../index.php'</script>";
            break;
    }
?>