<?php
    require_once '../Model/Usuarios.php';
    require_once 'ConexaoDAO.php';

    class UsuariosDAO
    {
        public static function CadastrarUsuario ($usuario)
        {
            $vConn = ConexaoDAO::AbrirConexao();
            
            //NOTE: procedures SQL evita esse código merda :)
            //além dos métodos alternativos
            $sqlCadastra = "Insert into usuarios(";
            $sqlCadastra .= "email_USUARIO, nome_USUARIO, ";//.= serve pra concatenação
            $sqlCadastra .= "senha_USUARIO, telefone_USUARIO)";
            $sqlCadastra .= "values (";
            $sqlCadastra .= "'" . $usuario->getEmail() . "', "; //chamando um método a partir de instância, utiliza-se ->
            $sqlCadastra .= "'" . $usuario->getNome() . "', "; // . para concatenar String
            $sqlCadastra .= "'" . $usuario->getSenha() . "', ";
            $sqlCadastra .= "'" . $usuario->getTelefone() . "');";

            mysqli_query($vConn, $sqlCadastra) or die(mysqli_error($vConn));//'or die' interrompe o processo
            
            return true;
        }

        public static function ValidarUsuario ($email, $senha)
        {
            $vConn = ConexaoDAO::abrirConexao();

            $senha = $senha;

            $sqlLogin = "select * from usuarios where ";
            $sqlLogin .= "email_USUARIO like '" . $email . "' and senha_USUARIO like '" . $senha .  "';"; 

            $rsLogin = mysqli_query($vConn, $sqlLogin) or die (mysqli_error($vConn));

            if (mysqli_num_rows($rsLogin) > 0 )
            {
                //construindo o objeto do usuário
                $userData = mysqli_fetch_array($rsLogin); //pegando dados do Result Set

                $user = new Usuarios(
                    $userData['nome_USUARIO'],
                    $userData['email_USUARIO'],
                    null,
                    $userData['telefone_USUARIO']
                );

                return $user;
            } else 
            {
                return null;
            }
        }
    }
?>