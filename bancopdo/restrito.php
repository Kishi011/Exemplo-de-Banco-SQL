<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <title>Sorveteria</title>
    </head>
    <body class="text-center">
        <div class="container">
            <img class="mb-4" src="img/lily.jpg" alt="sorveteria" width="256" height="256">
            <h1>Sorveteria</h1>
            <table class="table table-striped table-hover">
                <thead>
                    <td>id</td> <td>Nome</td> <td>Descrição</td> <td>Preço</td> <td>Ações</td>
                </thead>
                <tbody>
                    <?php
                        include_once("controller/Produto.Controller.php");
                        $produto = new ProdutoController();
                        $produto->imprimeProduto();
                    ?>
                </tbody>
            </table>
        </div>
    </body>