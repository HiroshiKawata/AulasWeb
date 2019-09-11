<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style='background-color: #f0f0f0;'>
    <div class='container'>
        <center>
            <div class='col-md-5 border' style='background-color: white; padding-top: 30px; margin-top: 150px;'>
                <form action='src/Control/UsuariosControl.php' method='post'>
                    <h3>Preencha os dados abaixo:</h3>

                    <div class='form-group'>
                        <input class='form-control' type='text' name='HTML_email' placeholder='E-mail'/>
                    </div>

                    <div class='form-group'>
                        <input class='form-control' type='password' name='HTML_senha' placeholder='Senha'/>
                    </div>

                    <div class='form-group'>
                        <a class='btn btn-outline-secondary' href='/ProjectManagement/ProjectManagement/project/src/ui/form-cadastro-usuario-ui.php'>Cadstre-se</a>
                        <input type='hidden' name='acao' value='1'>
                        <button class='btn btn-primary' type='submit'>Acessar Sistema</button>
                    </div>
                <form>
            </div>
        </center>
    </div>
</body>
</html>