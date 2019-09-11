<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Home Usuário</title>
</head>

<body style='background-color: #fafafa;'>
    <div class='container'>

        <div class='row' style='margin-top: 50px;'>
            <div class='col-md-6'>
                <div class='card'>
                    <div class='card-body' style='height: 60px; padding-top: 10px;'>
                        <form class='form-inline'>
                            <div class='input-group'>
                                <input type='text' name='HTML_busca' class='form-control'
                                    placeholder='Buscar usuários...' />
                                <div class='input-group-append'>
                                    <button type='submit' class='btn btn-danger'>Buscar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class='col-md-6'>
                <div class='card'>
                    <div class='card-body' style='height: 60px; padding-top: 10px;'>
                        <a href='form-cadastro-projeto-ui.php' class='btn btn-primary'>+ Criar novo projeto</a>
                    </div>
                </div>
            </div>
        </div>

        <div class='row' style='margin-top: 10px;'>
            <div class='col-md-12'>
                <div class='card'>
                    <div class='card-header' style='height: 50px;'>
                        <h5 class='card-tittle'>Dados do Usuário</h5>
                    </div>
                    <div class='card-body'>
                        <img src='../../../img/user.png' class='float-left' />
                        <h4><?php echo $_SESSION['nome']; //= é um echo?></h4>
                        <?php echo $_SESSION['email'];?><br/>
                        <?php echo $_SESSION['telefone'];?><br/>
                        <a href='#' class='btn btn-danger float-right' style='width: 200px;'>Alterar Dados</a>
                    </div>
                </div>
            </div>
        </div>

        <div class='row' style='margin-top: 10px;'>
            <div class='col-md-4'>
                <div class='card'>
                    <div class='card-header' style='height: 50px;'>
                        <h5 class='card-tittle'><a href='#' >Projetos</a></h5>
                    </div>
                    <div class='card-body text-center' style='display: flex; justify-content: center; height: 160px;'>
                        <font style='font-size: 50pt;'>666</font>
                    </div>
                </div>
            </div>

            <div class='col-md-4'>
                <div class='card'>
                    <div class='card-header'>
                        <h5 class='card-tittle'><a href='#' >Tarefas</a></h5>
                    </div>
                    <div class='card-body text-center' style='display: flex; justify-content: center; height: 160px;'>
                        <font style='font-size: 50pt;'>666</font>
                    </div>
                </div>
            </div>

            <div class='col-md-4'>
                <div class='card'>
                    <div class='card-header bg-success'>
                        <h5 class='card-tittle''><a href='#' style='color: white;' >Equipes</a></h5>
                    </div>
                    <div class='card-body text-center' style='display: flex; justify-content: center; height: 160px;'>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>