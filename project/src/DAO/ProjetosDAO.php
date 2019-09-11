<?php
    require_once 'ConexaoDAO.php';
    require_once '../Model/Projetos.php';

    class ProjetosDAO{
        public static function cadastrarProjeto($projeto)
        {
            $vConn = ConexaoDAO::abrirConexao();

            $sqlCadastra = 'Insert into categorias(codigo_PROJETO, nome_PROJETO, descricao_PROJETO, inicio_PROJETO,';
            $sqlCadastra .= 'fim_PROJETO, status_PROJETO, emailUsuario_PROJETO, codigoCategoria_PROJETO) VALUES (';
            $sqlCadastra .= $projeto->getCodigo().', ' . $projeto->getNome() . ', ' . $prjeto->getDescricao() . ', '
            $sqlCadastra .= $projeto->getInicio().', ' . $projeto->getFim() . ', ' . $projeto->getEmailUsuario() .  ', ';
            $sqlCadastra .= $projeto->getCodigoCategoria() . ')';

            echo $sqlCadastra;

            //mysqli_querry($vConn, $sqlCadastra) or die (mysqli_error());
        }
    }
?>