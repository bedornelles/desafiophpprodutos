<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js"></script>
</head>

<body>
    <header class="p-5 text-center container-fluid text-white bg-black">
        <h1>Desafio</h1>
    </header>
    <div class="container-fluid">
        <div class="row">
            <nav class="p-3 col-md-3">
                <h2>Produtos</h2>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="?controller=produt&action=produtsRegister"><i class="bi bi-bag-check"> </i>Adicionar</a>
                    </li>
                </ul>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="?controller=produt&action=listProduts"><i class="bi bi-bag-heart"> </i>Listagem</a>
                    </li>
                </ul>
            </nav>
            <section class="p-3 col-md-9">