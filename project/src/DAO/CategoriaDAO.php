<?php
    require_once 'ConexaoDAO.php';
    require_once '../Model/Categorias.php';

    class CategoriaDAO 
    {
        public static function listarCategorias () 
        {
            $vConn = ConexaoDAO::AbrirConexao();

            $itens = new ArrayObject();

            $sqlCategorias  = 'select * from categorias';
            $rsCategorias = mysqli_query($vConn, $sqlCategorias) or die(mysqli_error($vConn));//criando o result set

            if(mysqli_num_rows($rsCategorias) == 0)
            {
                return null;
            } else 
            {
                while($dados = mysqli_fetch_array($rsCategorias))
                {
                    $categoria = new Categorias(
                        $dados['codigo_CATEGORIA'],
                        $dados['nome_CATEGORIA']
                    );

                    $itens->append($categoria);
                }
                return $itens;
            }
        }
    }
?>