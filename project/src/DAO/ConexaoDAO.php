<?php
    class ConexaoDAO{
        function AbrirConexao () 
        {
            $server = 'localhost';
            $user = 'root';
            $password = '';
            $database = '6cicm';

            $vConn = mysqli_connect($server, $user, $password, $database); //variável de conexão

            return $vConn;
        }

        function FecharConexao () 
        {

        }
    }
?>