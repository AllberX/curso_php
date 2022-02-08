<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"> <link rel="icon" href="php.ico">

    <!--Estrutura do formulário, recebendo os dados-->
    <form method="POST" action="exibeDados.php"> <br></br>
    

    <title>Login</title>
</head>
<body>

    <DIV class="container">
        Atividade do Curso IEP Santa Casa SJC 
        <div class="row">
            <div class="col-12 caixa_titulo">
            <br> FAÇA SEU LOGIN <br> <br>
        </div>

        <div class="col-md-6 caixa_conteudo 
        d-flex justify-content-center align-items-center">
            <img src="iep.png" alt="IEP" style="height: 200px; width: 200px">
        </div>

        <div class="col-12 col-md-6 caixa_conteudo">
            FORMULARIO

            <div class="row">
        <div class="col-12 caixa_formulario">
        Nome:<input class = "form-control" type="text" name="Nome_form" id="">
        </div>

        <div class="col-12 caixa_formulario">
        CPF:<input class = "form-control" type="string" name="CPF_form" id="">
        </div>
        
            <div class="row">
        <div class="col-12 caixa_formulario">
        Login:<input class = "form-control" type="text" name="Login_form" id="">
        </div>

        <div class="col-12 caixa_formulario">
        Senha:<input class = "form-control" type="password" name="Senha_form" id="">
        </div>

        <div class="col-12 caixa_formulario">
            <button class= "btn btn-primary"> ENVIAR </button>
            </div>
        </div>
    </div>
</div> 
<br> <br> <br> <br> <i> Todos os direitos reservados© Desenvolvido por Sylvio Alberto</i> 
</div>   
</body>
</html>