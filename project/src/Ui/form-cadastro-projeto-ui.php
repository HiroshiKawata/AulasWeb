<?php
    require_once '../DAO/CategoriaDAO.php';
    require_once '../Model/Categorias.php';

    session_start();

    $itens = CategoriaDAO::listarCategorias();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cadastrar Projeto</title>
    <style>
        body {
            background-color: #fafafa;
            padding-top: 70px;
        }

        #card-form {
            padding: 30px 60px 30px 60px;
        }

        #container-row {
            display: flex;
            justify-content: center;
        }

        #form-data {
            display: flex;
            justify-content: space-between;
        }
        #date-picker-left, #date-picker-right{
            width: 100%;
        }
        #date-picker-left {
            padding-left: 30px;
        }
        #date-picker-right {
            padding-right: 30px;
        }
    </style>
</head>

<body>
    <div class='container'>
        <div id='container-row' class='row'>
            <div id='card-form' class='col-md-8 card'>
                <h4>Informe os dados do novo projeto</h4>
                <div>
                    <strong>Adminstrador do projeto:</strong> <?=$_SESSION['nome'];?>
                </div>
                <form action='' method='POST'>
                    <div class='form-group'>
                        <input class='form-control' type='text' name='HTML_nome' placeholder='Nome do projeto' />
                    </div>
                    <div class='form-group'>
                        <textarea class='form-control' name='HTML_desc' placeholder='Descrição do projeto'></textarea>
                    </div>
                    <div class='form-group'>
                        <select class='form-control' name='HTML_categoria'>
                            <option>Selecione uma categoria...</option>
                            <?php
                                for($i = 0; $i < count($itens); $i++)
                                {
                                    ?>
                                        <option><?=$itens[$i]->getNomeCategoria();?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div id='form-data' class='form-group'>
                        <div id='date-picker-right'>
                            <label>Inicio do projeto</label>
                            <input class='form-control' type='date' name='HTML_inicio' />
                        </div>
                        <div id='date-picker-left'>
                            <label>Fim do projeto</label>
                            <input class='form-control' type='date' name='HTML_fim' />
                        </div>
                    </div>
                    <div class='form-group'>
                        <button class='btn btn-primary form-control' type='submit'
                            name='HTML_cadastrar'>Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>