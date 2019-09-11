<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cadastre-se</title>
</head>

<body style='background-color: #f0f0f0;'>
    <div class='container'>
        <center>
            <div class='col-md-5 border' style='background-color: white; margin-top: 150px; padding-top: 30px;'>
                <form action='../control/UsuariosControl.php' method='post'>
                    <h2>Cadastre-se</h2>
                    <div class='form-group'>
                        <input class='form-control' type='email' name='HTML_email' placeholder='Insira o seu E-Mail' />
                    </div>
                    <div class='form-group'>
                        <input class='form-control' type='text' name='HTML_nome' placeholder='Insira o seu Nome' />
                    </div>
                    <div class='form-group'>
                        <input class='form-control' type='password' name='HTML_senha' placeholder='Insira sua Senha' />
                    </div>
                    <div class='form-group'>
                        <input class='form-control' type='password' name='HTML_senha2' placeholder='Confirme sua Senha' />
                    </div>
                    <div class='form-group'>
                        <input class='form-control' type='number' name='HTML_tel' placeholder='Insira seu Telefone' />
                    </div>
                    <div class='form-group'>
                        <button class='btn btn-outline-danger' href='#'>Cancelar</button>
                        <input type='hidden' name='acao' value='2'>
                        <button class='btn btn-primary' type='submit'>Confirmar Cadastro</button>
                    </div>
                </form>
            </div>
        </center>
    </div>
</body>

</html>