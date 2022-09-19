<?php
require_once 'model/conexao.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">
        <title>Sorveteria</title>
    </head>
    <body class="text-center">
        <main class="form-signin w-100 m-auto">
            <form action="restrito.php?login=1" method="POST">
                <img class="mb-4" src="img/shylily.jpg" alt="" width="200" height="200">
                <h1 class="h3 mb-3 fw-normal">Faça Login</h1>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="exemplo@gmail.com">
                    <label for="floatingInput">Email: </label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Senha">
                    <label for="floatingPassword">Senha: </label>
                </div>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Lembrar
                    </label>
                </div>
                <div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Acessar</button>
                </div>
            </form>
        </main>
    </body>
</html>